<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendMeEmailJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $name;
    public $email;
    public $about;
    public $motiv;
    public $output;

    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->about = $request->input('about');
        $this->motiv = $request->input('motiv');
        $this->output = $request->input('output');
    }

    
    public function handle()
    {
      Mail::send('emails.email',
        ['testVar' => $this->name],
        function($message){
          $message->to('milosa942@gmail.com')->subject('CodeVision-report');
        });
    }
}
