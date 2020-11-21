<?php

namespace App\Domain\Entities;

class HostMachineEntity{
    private $Id;
    private $Name;
    private $IpAddress;
    private $AllowDiskSpaceRate;

    public function __construct(Id $id,
                                Name $name,
                                IpAddress $ip_address,
                                Rate $rate
    )
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->IpAddress = $ip_address;
        $this->AllowDiskSpaceRate = $rate;
    }
}