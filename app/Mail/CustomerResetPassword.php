<?php

namespace App\Mail;

use Modules\Insurance\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    protected $customer;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Customer $obj, $password)
    {
        $this->customer = $obj;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.customer_reset_password')
            ->with([
                'password' => $this->password,
                'customer' => $this->customer
            ]);
    }
}
