<?php


namespace App\Domain\Entities;


class RegisterMediaEntity
{
    private $Id;
    private $Name;
    private $MediaType;

    public function __construct(Id $id,
                                Name $name,
                                MediaTypeEntity $type)
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->MediaType = $type;
    }
}