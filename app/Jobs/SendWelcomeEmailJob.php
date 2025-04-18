<?php

namespace App\Jobs;

use App\Mail\SendWelcomeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendWelcomeEmailJob implements ShouldQueue
{
   
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create a new job instance.
     */

     protected $details;
     protected $email;


    public function __construct($email, $details)
    {
        $this->email = $email;
        $this->details = $details;
    }

    /**
     * Execute the job.
     */
    
    public function handle(): void
    {
        Mail::to($this->email)->send(new SendWelcomeMail($this->details));
    }

    
}
