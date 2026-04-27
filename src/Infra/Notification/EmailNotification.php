<?php

declare(strict_types=1);

namespace DevApp\Infra\Notification;

class EmailNotification implements NotificatorInterface
{

    public function send(string $destination, string $messenger): void
    {
        // TODO: Implement send() method.
    }
}