<?php

namespace App\Http\Controllers\frontend\register;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;
use TimeHunter\LaravelGoogleReCaptchaV2\Validations\GoogleReCaptchaV2ValidationRule;
use Illuminate\Support\Str;

class RegisterController extends Controller
{


        public function store(Request $request)
    {
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

        // Benzersiz team_name oluştur
        $lastTeam = Team::latest('id')->first(); // En son takımı bul
        $nextTeamNumber = $lastTeam ? intval(substr($lastTeam->team_name, 5)) + 1 : 1;
        $teamName = 'team-' . str_pad($nextTeamNumber, 3, '0', STR_PAD_LEFT);

        // Takımı kaydet
        $team = Team::create([
            'team_name' => $teamName,
        ]);

        // Üyeleri kaydet
        foreach ($request->members as $member) {
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

        return redirect()->back()->with('success', 'Your registration is completed');
    }



}
