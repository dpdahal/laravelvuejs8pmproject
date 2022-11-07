<?php

namespace App\Repositories\User;

interface UserInterface
{
    public function getAll();

    public function getById($criteria);

    public function insert(array $data);

    public function update($id, array $data);

    public function delete($id);


}
