<?php


namespace App\Domain\Entities;

use App\Domain\ValuObjects\Id;
use App\Domain\ValuObjects\ToolAddress;


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