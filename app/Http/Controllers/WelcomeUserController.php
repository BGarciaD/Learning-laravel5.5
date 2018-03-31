<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index1($name, $nickname = null)
    {
        $name = $this->firstLetterUpperCase($name);
        return "Welcome {$name}, your nickname will be {$nickname}";
    }

    public function index2($name)
    {
        $name = $this->firstLetterUpperCase($name);
        return "Welcome {$name}, you didn't choose a nickname";
    }

    public function firstLetterUpperCase($name)
    {
        return ucfirst($name);
    }
}
