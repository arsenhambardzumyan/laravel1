<?php
namespace App\Infrastructure\Persistence\Eloquent;

use App\Domain\User\Entity\UserEntity;
use App\Domain\User\Enum\UserRole;
use App\Domain\User\Port\Out\UserRepositoryInterface;
use App\Domain\User\ValueObject\Email;

class EloquentUserRepository implements UserRepositoryInterface {
    public function save(UserEntity $user): UserEntity {
        $model = UserModel::create([
            'name' => $user->name,
            'email' => $user->email->value(),
            'password' => $user->password,
            'role' => $user->role->value,
        ]);

        return new UserEntity(
            id: $model->id,
            name: $model->name,
            email: new Email($model->email),
            password: $model->password,
            role: UserRole::from($model->role)
        );
    }
}
