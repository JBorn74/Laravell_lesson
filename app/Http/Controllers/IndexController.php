<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $title='Главная страница';
      return view('static.index')->with('header',$title);
    }
    public function about(){
        $title='О нас';
        return view('static.about')->with('header',$title);
    }

    public function articles($id){
        $array=['header'=>'Детальнее о статье № ',
            'id'=>$id]
        ;
        return view('static.article')->with($array);
       //return "Эта статья № ".$id."</br>Здесь будет код обработки БД" ;
    }
}
