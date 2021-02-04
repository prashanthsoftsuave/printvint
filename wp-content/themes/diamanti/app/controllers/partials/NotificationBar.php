<?php

namespace App;

trait NotificationBar
{
    public function notificationBar()
    {
        $content = get_field('notification_bar');
        return $content;
    }
}
