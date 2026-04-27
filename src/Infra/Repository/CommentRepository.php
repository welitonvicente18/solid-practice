<?php

declare(strict_types=1);

namespace DevApp\Infra\Repository;

use DevApp\Domain\Comment;
use DevApp\Infra\Repository\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{
    public function save(Comment $comment): void
    {

    }
}