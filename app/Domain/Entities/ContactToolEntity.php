<?php


namespace App\Domain\Entities;

use App\Domain\ValueObjects\Id;
use App\Domain\ValueObjects\Name;

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