<?php


namespace App\Domain\Entities;

use App\Domain\ValueObjects\Id;


class AdminGroupMemberEntity
{
    private $GroupId;
    private $MemberId;

    public function __construct(Id $gid,
                                Id $mid
    )
    {
        $this->GroupId = $gid;
        $this->MemberId = $mid;
    }
}