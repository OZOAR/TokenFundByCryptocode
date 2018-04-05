<?php

namespace App\Mail;

use App\Http\Middleware\Localization;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Session;

class UserCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param $password
     */
    public function __construct(User $user, $password)
    {
        $this->user = $user;
        $this->password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('mail.subject'))
            ->view('mail.users.create')
            ->with(['user' => $this->user, 'password' => $this->password]);
    }
}
