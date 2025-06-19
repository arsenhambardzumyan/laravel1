<?php
namespace App\Domain\User\Enum;

enum UserRole: string {
    case ADMIN = 'admin';
    case USER = 'user';
}
