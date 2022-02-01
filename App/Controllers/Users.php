<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
  public function index()
  {
    $users = UsersModel::all();

    unset($users[0]);

    return view('users/index', [
      'title' => 'Hello World',
      'users' => $users,
    ]);
  }

  public function detail($id)
  {
    $user = UsersModel::find($id);

    return view('users/detail', [
      'title' => 'Hello World',
      'user'  => $user,
    ]);
  }
}