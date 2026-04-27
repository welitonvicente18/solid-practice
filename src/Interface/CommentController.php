<?php

declare(strict_types=1);

namespace DevApp\Interface;

use DevApp\Application\ProcessComment;
use DevApp\Domain\Comment;

class CommentController
{
    public function __construct(
        protected ProcessComment $processComment
    )
    {
    }

    public function sendComment(array $request): false|string
    {
        $comment = new Comment(
            $request['comment_id'],
            $request['author'],
            $request['comment']
        );

        try {
            $this->processComment->process($comment);
        } catch (\Exception $e) {
            throw new \RuntimeException('Error Processing Comment: ' . $e->getMessage());
        }

        return json_encode([
            'status' => 'success',
            'message' => 'Comment processed successfully'
        ], JSON_THROW_ON_ERROR);
    }
}