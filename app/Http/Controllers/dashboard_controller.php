<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard_controller extends Controller
{
    public function home()
    {
        $name="I am Md Bappy";
        $talent="WEB APP DEVLOPER";
        $link="https://github.com/Md-Bappy-Islam";
        return view("pages.home",["name"=>$name,"talent"=>$talent,"link"=>$link] );
    }
    public function project()
    {   
        $data=[
            ["image"=>"assets/imgs/blog.png","name"=>"Personal blog site","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/e-commers.jpeg","name"=>"E-commers Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"],
            ["image"=>"assets/imgs/personal.jpg","name"=>"Portfolio Website","build"=>"Category: full stack website"]
        
        ];
        return view("pages.project",["data"=>$data]);
    }
    public function contact()
    {
        return view("pages.contact");
    }
}
