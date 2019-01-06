<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeToPm2 extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The Email address to send the Mail to.
     *
     * @var string
     */
    protected $email;

    /**
     * WelcomeToPm2 constructor.
     *
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->email)
                    ->markdown('emails.welcome');
    }
}
