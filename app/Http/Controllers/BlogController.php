<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * ブログを表示する
     *
     * @return view
     */
    public function showList()
    {
        return view('blog.list');
    }
}
