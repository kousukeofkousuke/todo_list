<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReply extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $tasks;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$tasks)
    {
        $this->user = $user;
        $this->tasks = $tasks;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.text')
                    ->subject('今日のタスク')
                    ->with(['user'=>$this->user,'tasks'=>$this->tasks]);
    }
}
