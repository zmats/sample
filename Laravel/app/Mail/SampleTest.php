<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleTest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $text)
    {
     $this->title = sprintf('%sさん、ありがとうございます'.$name);
     $this->text = $text;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sample_test');
                ->text('emails.sample_test_plain')
                ->subject($this->title)
                ->with([
                  'text'=>$this->text
                ])
    }
}
