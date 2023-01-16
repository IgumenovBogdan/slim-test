<?php

declare(strict_types=1);

namespace App\Domain\Post;

use JsonSerializable;

class Post implements JsonSerializable
{
    private int $id;

    private string $title;

    private string $text;

    private int $views;

    public function __construct(int $id, string $title, string $text, int $views)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->views = $views;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getViews(): int
    {
        return $this->views;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'text' => $this->text,
            'views' => $this->views,
        ];
    }
}