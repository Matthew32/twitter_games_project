<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;

class PostPublished extends Notification
{
    public function via($notifiable)
    {
        return [TwitterChannel::class];
    }

    public function toTwitter($notifiable) {
        return new TwitterStatusUpdate('You should follow @laravelnews https://laravel-news.com/');
    }
}