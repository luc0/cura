<?php
/**
 * Created by PhpStorm.
 * User: luco
 * Date: 15/03/18
 * Time: 19:10
 */

namespace App\Http\Controllers;

use App\Asana;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AsanaController extends BaseController
{
    public function index()
    {
        return view('home')->with([
            'asana' => Asana::all()
        ]);
    }
    public function show(int $id)
    {
        $asana = Asana::where('id', $id)->first();

        $benefits = $asana->benefits()->get();

        return view('show')->with([
            'asana' => $asana,
            'benefits' => $benefits
        ]);
    }

    public function list(Request $request)
    {
        $search = $request->get('asana');

        $asanas = Asana::whereBenefitableLike($search);

        return view('list')->with([
            'asanas' => $asanas,
            'request' => $request
        ]);
    }
}