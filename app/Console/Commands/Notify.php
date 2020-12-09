<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify for all users evrey day';

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
     * @return int
     */
    public function handle()
    {
        // $user = User::select('email')->get()
        $emails = User::pluck('email')->toArray();  // بجيب الايميلات وبضعهم في اري
        $data = ['title' => 'programming', 'body' => 'Laravel'];
        foreach ($emails as $email) {
            Mail::To($email)->send(new NotifyEmail($data));
        }
    }
}
