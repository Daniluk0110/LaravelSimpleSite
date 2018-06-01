<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    private $x;
    /**
     * @return string
     */
    public function index()
    {
        $x=2018;
        echo "Привет всем";
        echo "<br>";
        echo "На дворе", "$x год";
        echo "<h4>Пример вывода в PhP</h4>";
        echo 'использована переменная $x';
        //$this->myfunc(5);
        $this->x = 5;
        $this->myfunc();
        echo $this->x.' '.$x.'<br/>';
        dd('GuestBookController action Index');
        return 'GuestBookController action Index';//pho
    }
//    $x=5;
    function myfunc(){
     $this->x+= 2;
    }
}
