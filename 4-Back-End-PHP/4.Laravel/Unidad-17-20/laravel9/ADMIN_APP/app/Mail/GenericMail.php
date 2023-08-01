<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GenericMail extends Mailable
{
    use Queueable, SerializesModels;

    
    private $_data;
    private $_subject;
    private $_template;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $subject, $template)
    {
        $this->_data = $data;
        $this->_subject = $subject;
        $this->_template = $template;
    }
    

    /**
     * Build the message
     * 
     * return $this
     */
    public function build()
    {
        return $this->subject($this->_subject)->view('mails.' . $this->_template, $this->_data);
    }




    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Generic Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mails.myfirstmail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
