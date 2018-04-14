<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserSignUpRequested extends Mailable
{
    use Queueable, SerializesModels;

    private $userEmailToSignUp;

    /**
     * Create a new message instance.
     *
     * @param $userEmailToSignUp
     */
    public function __construct($userEmailToSignUp)
    {
        $this->userEmailToSignUp = $userEmailToSignUp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), __('mail.from'))
            ->subject(__('mail.sign_up.subject'))
            ->to(env('GLOBAL_ADMIN_EMAIL'))
            ->view('mail.request.sign_up')
            ->with('email', $this->userEmailToSignUp);
    }
}
