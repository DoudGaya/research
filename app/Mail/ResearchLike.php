<?php

namespace App\Mail;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResearchLike extends Mailable
{
    use Queueable, SerializesModels;

    
    public $liker;
    public $post;


    public function __construct(User $liker, Post $post)
    {
        $this->$liker = $liker;
        $this->$post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.research.research_like')->subject('Someone liked your research');
    }
}
