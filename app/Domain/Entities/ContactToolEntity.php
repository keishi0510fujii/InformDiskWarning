<?php


namespace App\Domain\Entities;


class ContactToolEntity
{
    private $Id;
    private $Name;
    private $ToolType;

    public function __construct(Id $id,
                                Name $name,
                                ToolType $tool_type
    )
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->ToolType = $tool_type;
    }

}