<?php

namespace App\Http\Controllers\frontend\register;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TeamLeaderNotification;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // Form doğrulama
        $request->validate([
            'members' => 'required|array|min:1',
            'members.*.name' => 'required|string|max:255',
            'members.*.email' => 'required|email|max:255',
            'members.*.university' => 'required|string|max:255',
            'members.*.country' => 'required|string|max:255',
            'members.*.file' => 'required|file|mimes:pdf|max:2048',
        ], [
                'required' => 'This field is required.',
                'members.*.email.email' => 'Please enter a valid email address.',
                'members.*.file.mimes' => 'The file type must be PDF only.',
                'members.*.file.max' => 'The file size cannot exceed 2 MB.',
            ]
        );

        // Team leader bilgilerini al
        $teamLeaderEmail = $request->members[0]['email'];
        $teamLeaderName = $request->members[0]['name'];

        // Team leader e-posta kontrolü (daha önce kayıtlı mı?)
        $existingTeamLeader = Member::where('email', $teamLeaderEmail)->first();

        if ($existingTeamLeader) {
            return redirect()->back()->with('error', 'The email address for the Team Leader is already registered.');
        }

        // 5 karakterlik benzersiz team_name oluştur
        $teamName = $this->generateUniqueTeamName();

        // Takımı kaydet
        $team = Team::create([
            'team_name' => $teamName,
        ]);

        // Üyeleri kaydet
        foreach ($request->members as $index => $member) {
            $filePath = null;

            if (isset($member['file'])) {
                // Benzersiz dosya adı oluştur
                $fileName = uniqid() . '_' . $member['file']->getClientOriginalName();
                $filePath = $member['file']->storeAs('uploads', $fileName, 'public');
            }

            Member::create([
                'team_id' => $team->id,
                'name' => $member['name'],
                'email' => $member['email'],
                'university' => $member['university'],
                'country' => $member['country'],
                'file' => $filePath,
                'team_name' => $teamName,
            ]);
        }

        // E-posta gönderimi
        Mail::to($teamLeaderEmail)->send(new TeamLeaderNotification($teamLeaderName, $teamName));

        return redirect()->back()->with('success', 'Your registration is completed');
    }

    /**
     * 5 karakterlik benzersiz bir team_name oluşturur.
     */
    private function generateUniqueTeamName()
    {
        do {
            // 5 karakterlik rastgele bir dizgi oluştur
            $teamName = strtoupper(Str::random(5));
            // Bu team_name veritabanında var mı kontrol et
            $exists = Team::where('team_name', $teamName)->exists();
        } while ($exists);

        return $teamName;
    }
}
