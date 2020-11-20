<?php


namespace App\Domain\Entities;


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