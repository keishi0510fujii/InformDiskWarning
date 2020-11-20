<?php


namespace App\Domain\Entities;


class ContactToolEntity
{
    private $Id;
    private $Name;
    private $ContactToolType;

    public function __construct(Id $id,
                                Name $name,
                                ContactToolTypeEntity $type
    )
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->ContactToolType = $type;
    }

}