<?php

declare(strict_types=1);

namespace DevApp\Infra\Notification;

interface NotificatorInterface
{
    public function send(string $destination, string $messenger): void;
}