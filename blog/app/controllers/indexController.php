<?php

namespace App\Controllers;
use App\Models\BlogPost;

class indexController extends BaseController {

    public function getIndex() {

       $blogPosts = BlogPost::query()->orderBy('id', 'desc')->get();
        return $this->render('index.twig', ['blogPosts' => $blogPosts]);

    }
}