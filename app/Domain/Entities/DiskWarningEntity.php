<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\Id;
use App\Domain\ValueObjects\WarningTime;

class DiskWarningEntity
{
    private $Id;
    private $WarningTime;
    private $HostMachine;
    private $Contact;
    private $LogAction;
    private $Message;

    public function __construct(Id $id,
                                WarningTime $date_time,
                                HostMachineEntity $host_machine,
                                ContactEntity $contact,
                                LogActionEntity $log_action,
                                Message $message
    )
    {
        $this->Id = $id;
        $this->WarningTime = $date_time;
        $this->HostMachine = $host_machine;
        $this->Contact = $contact;
        $this->LogAction = $log_action;
        $this->Message = $message;
    }
}