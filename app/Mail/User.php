<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class User extends Mailable
{
    use Queueable, SerializesModels;

    public $Mail;
    public function __construct($details)
    {
        $this->Mail=$details;
    }

    public function build()
    {
        return $this->subject('Mail from A. School')->view('gmail.send',$this->Mail);
    }
}
