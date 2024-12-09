<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeamLeaderNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $teamName;
    public $teamLeaderName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($teamLeaderName, $teamName)
    {
        $this->teamName = $teamName;
        $this->teamLeaderName = $teamLeaderName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registration Completed - Rethinking Architecture Competition')
            ->view('frontend.mail.team_leader_notification');
    }
}
