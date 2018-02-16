<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class indexController extends BaseController {

    public function getIndex(){
        return $this->render('admin/index.twig');
    }
}