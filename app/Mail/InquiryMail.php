<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     */
   public function build()
{
    return $this->subject('New Property Inquiry')
                ->from('hifzanasir26@gmail.com', 'Real Estate Website')
                ->replyTo($this->details['email'], $this->details['name'])
                ->view('emails.inquiry')
                ->with('details', $this->details);
               
}


}
