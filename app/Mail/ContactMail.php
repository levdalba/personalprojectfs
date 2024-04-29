<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // Declare the public property that will hold the details passed to the email.
    public $details;

    /**
     * Create a new message instance.
     * The $details array is expected to have 'name', 'email', and 'message' keys.
     *
     * @param array $details
     * @return void
     */

     
    public function __construct(array $details)
    {
        // Assign the passed details to the public property.
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Build the email view with the subject and view file.
        return $this->subject('Contact Mail')
            ->view('emails.contact')
            // Pass the details array to the view with the with() method.
            // This is actually optional since public properties are automatically available in views.
            ->with('details', $this->details);
    }
}
