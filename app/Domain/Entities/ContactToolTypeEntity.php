<?php


namespace App\Domain\Entities;

use App\Domain\ValueObjects\Id;
use App\Domain\ValueObjects\Name;


class ContactToolTypeEntity
{
    private $Id;
    private $Name;

    public function __construct(Id $id,
                                Name $name
    )
    {
        $this->Id = $id;
        $this->Name = $name;
    }
}