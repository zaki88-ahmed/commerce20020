<?php

namespace App\Console\Commands;

use App\Mail\ContactResponseMail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendingMailEveryMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'print:hello';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
//        $user = User::first();
//        Mail::to($user->email)->send(new ContactResponseMail($user));
        info('hello world');
    }
}
