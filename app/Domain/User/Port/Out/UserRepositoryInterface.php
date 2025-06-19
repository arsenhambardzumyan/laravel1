<?php
namespace App\Domain\User\Port\Out;

use App\Domain\User\Entity\UserEntity;

interface UserRepositoryInterface {
    public function save(UserEntity $user): UserEntity;
}
