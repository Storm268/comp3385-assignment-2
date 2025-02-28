<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $email;
    public $comment;

    public function __construct($fullname, $email, $comment)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->comment = $comment;
    }

    public function build()
    {
        return $this->from($this->email)
                    ->subject('New Feedback from ' . $this->fullname)
                    ->view('mail.feedback')
                    ->with([
                        'fullname' => $this->fullname,
                        'email' => $this->email,
                        'comment' => $this->comment,
                    ]);
    }
}
