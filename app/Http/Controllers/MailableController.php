<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\User;
use App\Task;
use App\Mail\ContactReply;

class Task extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '未完了タスクのメール送信';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::get();
        
        foreach($users as $user){
            $tasks = Task::where('user_id',$user->id)->where('state',0)->get();
            Mail::to($user->email)
              ->send(new ContactReply($user,$tasks));
        }

    }
}
