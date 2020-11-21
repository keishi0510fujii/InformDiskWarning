<?php


namespace App\Domain\Entities;


class ContactAddressEntity
{
    private $MemberId;
    private $ToolId;
    private $Address;

    public function __construct(Id $mid,
                                Id $tid,
                                ToolAddress $address
    )
    {
        $this->MemberId = $mid;
        $this->ToolId = $tid;
        $this->Address = $address;
    }
}