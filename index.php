<?php

require_once 'vendor/autoload.php';

use DevApp\Application\ProcessComment;
use DevApp\Application\ProcessComment;
use DevApp\Infra\Notification\EmailNotification;
use DevApp\Infra\Repository\CommentRepository;
use DevApp\Interface\CommentController;

$repository = new CommentRepository();
$notification = new EmailNotification();
$processComment = new ProcessComment($repository, $notification);

$request = [
    'comment_id' => 1,
    'author' => 2,
    'comment' => 'lorem ipsum',
];

$controller = new CommentController($processComment);

$response = $controller->sendComment($request);

echo $response . "\n";

