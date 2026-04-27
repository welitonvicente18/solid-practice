<?php

declare(strict_types=1);

namespace DevApp\Domain;

class Comment
{
    public function __construct(
        public int    $id,
        public int    $author,
        public string $comment,
    )
    {
    }
}