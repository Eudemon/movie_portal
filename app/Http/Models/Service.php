<?php
/**
 * Created by PhpStorm.
 * User: eudem
 * Date: 11/19/2018
 * Time: 9:12 PM
 */

namespace App\Http\Models;

use Illuminate\Support\Facades\DB;
use PhpParser\Node\Scalar\String_;

class Service
{
    /**
     * @param $title String
     * @param $format String
     * @param $length Integer
     * @param $year Integer
     * @param $rating TinyInt
     */
    public function insert($title, $format, $length, $year, $rating, $path){
        DB::table('movie')->insert([
            'title' => $title,
            'format' => $format,
            'length' => $length,
            'year' => $year,
            'rating' => $rating,
            'img' => $path
        ]);
    }

    /**
     * @param $id Int
     */
    public function delete($id){
        DB::table('movie')->delete($id);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function get($num = null){
        if ($num === null){
            $return = DB::table('movie')->get();
        } else {
            $return = DB::table('movie')->select()->limit($num)->get();
        }

        return $return;
    }

    /**
     * @param $id Int
     * @return \Illuminate\Database\Query\Builder
     */
    public function single($id){
        $return = DB::table('movie')->select()->where('id', $id)->get();

        return $return;
    }

}