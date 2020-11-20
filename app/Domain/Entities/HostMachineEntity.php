<?php

namespace App\Domain\Entities;

class HostMachineEntity{
    private $Id;
    private $Name;
    private $IpAddress;
    private $AllowDiskSpaceRate;
    private $OperationSystem;

    public function __construct(Id $id, Name $name, IpAddress $ip_address, Rate $rate, OS $os)
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->IpAddress = $ip_address;
        $this->AllowDiskSpaceRate = $rate;
        $this->OperationSystem = $os;
    }
}