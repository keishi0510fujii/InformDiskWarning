<?php


namespace App\Domain\Entities;


class Message
{
    private $Title;
    private $Body;

    public function __construct(Title $title, Body $body)
    {
        $this->Title = $title;
        $this->Body = $body;
    }
}