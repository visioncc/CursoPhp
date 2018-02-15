<?php

namespace App\Controllers\Admin;

class indexController {

    public function getIndex(){
        return render('../views/admin/index.php');
    }
}