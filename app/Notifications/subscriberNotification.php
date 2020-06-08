<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class subscriberNotification extends Notification
{
    use Queueable;

    public $news;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($news)
    {
        $this->news=$news;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->greeting('Hi Blood Donar new Bloog Added')
                    ->subject('New Blood Add')
                    ->line('Title:'.$this->news->news_title)
                    ->action('View', url('/'))
                    ->line('Thank you for Wathing our Website!');
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
            //
        ];
    }
}
