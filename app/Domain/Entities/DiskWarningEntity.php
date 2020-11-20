<?php

namespace Domain\Entities;

class DiskWarningEntity
{
    private $Id;
    private $WarningTime;
    private $HostMachine;
    private $Contact;
    private $LogAction;

    public function __construct(Id $id,
                                WarningTime $date_time,
                                HostMachine $host_machine,
                                Contact $contact,
                                LogAction $log_action
    )
    {
        $this->Id = $id;
        $this->WarningTime = $date_time;
        $this->HostMachine = $host_machine;
        $this->Contact = $contact;
        $this->LogAction = $log_action;
    }
}