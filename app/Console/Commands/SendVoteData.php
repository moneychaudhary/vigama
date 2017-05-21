<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendVoteData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vigama:send-vote-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Vote Data to Mail';

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
        //

        $vote=1;
        Mail::send('vote_email',['$vote'=>$vote],function ($message){
            $message->to('vigama2k17co@gmail.com');
            $message->subject('Voting Details');
        });



    }
}
