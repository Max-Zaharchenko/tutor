<?php

namespace App\Mail\Students;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invite extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \App\Models\Invite
     */
    public $invite;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\Invite $invite
     */
    public function __construct(\App\Models\Invite $invite)
    {
        $this->invite = $invite;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invites');
    }
}
