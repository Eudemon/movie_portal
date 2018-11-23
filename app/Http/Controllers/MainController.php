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
use Illuminate\Support\Facades\Storage;

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

    public function post(Request $request){
        $input = $request->all();

        $filename = time() . '-' . $input['image']->getClientOriginalName();


        $this->service->insert($input['title'], $input['format'], $input['length'], $input['year'], $input['rating'], $filename);
    }

    public function list(){
        return view('list')->with(['movies' => $this->service->get()->toArray()]);
    }

    public function movie(Request $request, $id){
        return view('movie')->with(['movies' => $this->service->single($id)->toArray()]);
    }

    public function delete(Request $request){
        $this->service->delete($request->get('id'));

        return redirect('/list');
    }
}