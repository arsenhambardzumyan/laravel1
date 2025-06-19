<?php
namespace App\Infrastructure\Mail;

use Illuminate\Mail\Mailable;

class WelcomeUserMail extends Mailable {
    public function build() {
        return $this->subject('Welcome!')->view('emails.welcome');
    }
}
