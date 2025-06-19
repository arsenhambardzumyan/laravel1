<?php
namespace App\Domain\User\Entity;

use App\Domain\User\Enum\UserRole;
use App\Domain\User\ValueObject\Email;

class UserEntity {
    public function __construct(
        public readonly ?int $id,
        public string $name,
        public Email $email,
        public string $password,
        public UserRole $role
    ) {}
}
