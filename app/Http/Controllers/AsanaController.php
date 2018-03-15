<?php
/**
 * Created by PhpStorm.
 * User: luco
 * Date: 15/03/18
 * Time: 19:10
 */

namespace App\Http\Controllers;

use App\Asana;
use Illuminate\Routing\Controller as BaseController;

class AsanaController extends BaseController
{
    public function show()
    {
        $asana = Asana::first();

        $benefits = $asana->benefits()->get();

        return view('home')->with([
            'asana' => $asana,
            'benefits' => $benefits
        ]);
    }

    public function list($search)
    {
        // TODO: no esta contemplado en Laravel
        // https://github.com/laravel/framework/issues/5429
        $asanas = Asana::whereHas('benefits.body', function ($query) use ($search) {
            $query->where('name', '=', $search);
            //$query->whereHas('body', function ($q) use ($search) {
              //  $q->where('name', '=', $search);
            //});
        })->toSQL();
        dd($asanas);

        return view('list')->with([
            'asanas' => $asanas
        ]);
    }
}