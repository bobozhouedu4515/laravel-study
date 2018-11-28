<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CommentNotify extends Notification
{
    use Queueable;
    protected $comment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($commnet)
    {
        $this->comment=$commnet;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
    	//修改驱动为数据库类型 然后传送的数据在toarray中写
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
        'user_id'=>$this->comment->user->id,
        'user_icon'=>$this->comment->user->ico,
        'user_name'=>$this->comment->user->name,
        'article_id'=>$this->comment->article->id,
        'article_title'=>$this->comment->article->title,
        'link'=>$this->comment->article->getLink('#comment'.$this->comment->id),
//        'link'=>$this->comment->article->getLink('#comment' . $this->comment->id),

        ];
    }
}
