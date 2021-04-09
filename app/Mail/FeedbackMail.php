<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Feedback;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $feedback, $answer;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Feedback $feedback, $answer)
    {
        $this->feedback = $feedback;
        $this->answer = $answer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.feedback')->with([
            'answer' => $answer,
            'feedback' => $feedback
        ]);
    }
}
