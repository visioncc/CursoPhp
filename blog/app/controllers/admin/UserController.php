<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UserController extends BaseController {
    public function getIndex(){
        $users = User::all();
        return $this->render('', [
            'users' => $users
        ]);

}

}