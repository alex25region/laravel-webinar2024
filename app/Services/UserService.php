<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Services\Contracts\CrudInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

final class UserService implements CrudInterface
{
    public function create(array $data): Model
    {
        return User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function update(Model $model, array $data): Model
    {
        $model->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        return $model;
    }

    public function delete(Model $model): bool
    {
        return $model->delete();
    }


}
