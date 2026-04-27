<?php

declare(strict_types=1);

namespace DevApp\Infra\Notification;

class SmsNotification implements NotificatorInterface
{

    public function send(string $destination, string $messenger): void
    {
        // TODO: Implement send() method.
    }
}