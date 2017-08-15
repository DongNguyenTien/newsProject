<?php

namespace App\Mail;

use Modules\Insurance\Models\InsuranceAgency;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AgencyResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    protected $agency;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(InsuranceAgency $obj, $password)
    {
        $this->agency = $obj;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.agency_reset_password')
            ->with([
                'password' => $this->password,
                'agency' => $this->agency
            ]);
    }
}
