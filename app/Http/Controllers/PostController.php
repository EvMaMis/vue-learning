<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $persons = [
            [
                'id' => 1,
                'title' => 'Some post',
                'description' => 'Some description',
                'likes' => 10,
            ],
            [
                'id' => 2,
                'title' => 'Another post',
                'description' => 'Some description',
                'likes' => 105,
            ],
        ];
        return $persons;
    }
}
