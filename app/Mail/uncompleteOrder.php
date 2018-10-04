<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class uncompleteOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email)
    {
        $this->name=$name;
        $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('deepak.luminoguru@gmail.com','Book-Store')
                    ->to($this->email,$this->name)
                    ->subject('Pending Order')
                    ->view('emails.orders.unCompleteOrder');
    }
}
