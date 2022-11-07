<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserInterface $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;

    }

    public function index()
    {
        return response()->json(
            ['status' => 200,
                'users' => $this->user->getAll()
            ]);
    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
