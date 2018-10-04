<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $order;
    public $carts;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name,$order,$cart_books)
    {
        $this->name=$user_name;
        $this->order=$order;
        $this->carts=$cart_books;
        $this->email=$order->email;

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
                    ->subject('Order Placed')
                    ->view('emails.orders.placed');
    }
}
