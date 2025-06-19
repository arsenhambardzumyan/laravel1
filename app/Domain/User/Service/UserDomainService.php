<?php

namespace App\Domain\User\Service;

use App\Domain\User\Entity\UserEntity;
use App\Domain\User\Enum\UserRole;
use App\Domain\User\ValueObject\Email;

class UserDomainService {
    public function create(string $name, string $email, string $hashedPassword, string $role): UserEntity {
        return new UserEntity(
            null,
            $name,
            new Email($email),
            $hashedPassword,
            UserRole::from($role)
        );
    }
}
