<?php

namespace App\Domain\Entities;

class ContactEntity{
    private $Id;
    private $ContactTool;
    private $AdminGroup;

    public function __construct(Id $id,
                                ContactTool $contact_tool,
                                AdminGroup $admin_group
    )
    {
        $this->Id = $id;
        $this->ContactTool = $contact_tool;
        $this->AdminGroup = $admin_group;
    }
}
