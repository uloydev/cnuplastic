<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Promote;

class PromotionStatus extends Mailable
{
    use Queueable, SerializesModels;

    public $promotion;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Promote $promotion)
    {
        $this->promotion = $promotion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.promotion.status')->with(['promotion' => $this->promotion]);
    }
}
