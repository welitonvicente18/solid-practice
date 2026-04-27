<?php
declare(strict_types=1);

namespace DevApp\Application;

use DevApp\Domain\Comment;
use DevApp\Infra\Notification\NotificatorInterface;
use DevApp\Infra\Repository\CommentRepositoryInterface;

class ProcessComment
{
    public function __construct(
        protected CommentRepositoryInterface $repository,
        protected NotificatorInterface       $notificator
    )
    {
    }

    public function process(Comment $comment): Comment
    {
        $this->repository->save($comment);

        $this->notificator->send('destination_any', 'messenger');

        return $comment;
    }
}