<?php
/**
 * User: tairo.miguel
 * Date: 15/10/2015
 * Time: 19:59
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller{

    public function index() {
        return view('layout');
    }
}