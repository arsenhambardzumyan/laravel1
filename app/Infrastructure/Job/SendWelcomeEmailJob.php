<?php

namespace App\Infrastructure\Job;

use App\Infrastructure\Mail\WelcomeUserMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmailJob implements ShouldQueue {
    use Queueable;

    public function __construct(public string $email) {}

    public function handle() {
        Mail::to($this->email)->send(new WelcomeUserMail());
    }
}
