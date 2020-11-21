<?php


namespace App\Domain\Entities;


class LogActionEntity
{
    private $Id;
    private $RegisterMediaId;

    public function __construct(Id $id, Id $media_id)
    {
        $this->Id = $id;
        $this->RegisterMediaId = $media_id;
    }
}