<?php


namespace App\Domain\Entities;


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