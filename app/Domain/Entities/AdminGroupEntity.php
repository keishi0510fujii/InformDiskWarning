<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\Id;
use App\Domain\ValueObjects\Name;
use App\Domain\ValueObjects\IsValid;

class AdminGroupEntity{
    private $Id;
    private $Name;
    private $IsValid;

    public function __construct(Id $id,
                                Name $name,
                                IsValid $is_valid
    )
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->IsValid = $is_valid;
    }
}