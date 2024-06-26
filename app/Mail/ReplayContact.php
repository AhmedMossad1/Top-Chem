<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class ReplayContact extends Mailable
{
    use Queueable, SerializesModels;
    protected $message;
    protected $replay;
    public function __construct($message,$replay)
    {
        $this->message =$message;
        $this->replay = $replay;
    }
    public function build()
    {
        $contactMessage = $this->message;
        $replay = $this->replay;
        return $this->to($contactMessage->email)
            ->view('Dashboard.mails.replay-message' , compact('contactMessage' , 'replay'));

    }
}
