<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\Id;

class ContactEntity{
    private $Id;
    private $ContactTool;
    private $AdminGroup;

    public function __construct(Id $id,
                                ContactToolEntity $contact_tool,
                                AdminGroupEntity $admin_group
    )
    {
        $this->Id = $id;
        $this->ContactTool = $contact_tool;
        $this->AdminGroup = $admin_group;
    }
}
