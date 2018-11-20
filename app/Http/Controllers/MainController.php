<?php
/**
 * Created by PhpStorm.
 * User: eudem
 * Date: 11/19/2018
 * Time: 9:10 PM
 */

namespace App\Http\Controllers;

use App\Http\Models\Service;

use Illuminate\Http\Request;

class MainController
{
    protected $service;

    public function __construct(
        Service $service
    )
    {
        $this->service = $service;
    }

    public function home(){
        $movies = $this->service->get(3);

        return view('index')->with(['movies' => $movies]);
    }
}