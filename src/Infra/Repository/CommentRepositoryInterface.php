<?php

declare(strict_types=1);

namespace DevApp\Infra\Repository;

use DevApp\Domain\Comment;

interface CommentRepositoryInterface
{
    public function save(Comment $comment): void;
}