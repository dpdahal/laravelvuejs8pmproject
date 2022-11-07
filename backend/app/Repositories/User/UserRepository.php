<?php

namespace App\Repositories\User;

use App\General\General;
use App\Models\User\User;

class UserRepository implements UserInterface
{
    use General;

    public function __construct(User $model)
    {
        $this->model = $model;

    }

    public function getAll()
    {
        return $this->model->all();
    }


    public function getById($criteria)
    {
        return $this->model->findOrFail($criteria);
    }

    public function insert(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $user = $this->model->findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = $this->model->findOrFail($id);
        $user->delete();
        return $user;
    }


}
