<?php

namespace App\Domain\Entities;

class DiskWarningEntity
{
    private $Id;
    private $WarningTime;
    private $HostMachine;
    private $Contact;
    private $LogAction;

    public function __construct(Id $id,
                                WarningTime $date_time,
                                HostMachineEntity $host_machine,
                                ContactEntity $contact,
                                LogActionEntity $log_action
    )
    {
        $this->Id = $id;
        $this->WarningTime = $date_time;
        $this->HostMachine = $host_machine;
        $this->Contact = $contact;
        $this->LogAction = $log_action;
    }
}