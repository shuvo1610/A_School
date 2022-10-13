<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class forgot extends Mailable
{
    use Queueable, SerializesModels;

    public $Pass;
    public function __construct($data)
    {
        $this->Pass=$data;
    }
    public function build()
    {
        return $this->subject('Mail from A. School')->view('gmail.forgot', $this->Pass);
    }
}
