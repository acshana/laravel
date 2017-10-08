<?php

namespace App\Http\Controllers;

use App\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * User Repository µÄµÏ¡£
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * ´´½¨ÐµĿØÆ÷ý   *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Ïʾָ¶¨Ó»§µÄêÐϢ¡£
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->users->find($id);

        return view('user.profile', ['user' => $user]);
    }
}
