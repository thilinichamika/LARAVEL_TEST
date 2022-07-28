<?php

namespace App\Http\Controllers;
use App\Models\Territory;
use DB;
use Illuminate\Http\Request;

class TerritoryController extends Controller
{
    public function territoryAll()
    {
        $territorys = Territory::oldest()->paginate(5);
        return view('territoryAll',compact('territorys'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function territoryAdd()
    {
        $zone = DB::table('zones')->get();
        $region = DB::table('regions')->get();
        return view('territoryAdd',compact('zone','region'));
    }

    public function tstore(Request $request)
    {
        $request->validate([
            'zCode'=>'required',
            'rCode'=>'required',
            'tCode'=>'required',
            'tName'=>'required',
        ]);

        $input = $request->all();
        Territory::create($input);
        return redirect()->route('territoryAll');
    }

    public function territoryEdit(Territory $territory)
    {
        return view('territoryEdit',compact('territory'));
    }

    public function tupdate(Request $request, Territory $territory)
    {
        $request->validate([
            'zCode'=>'required',
            'rCode'=>'required',
            'tCode'=>'required',
            'tName'=>'required',
        ]);

        $input = $request->all();
        $territory->update($input);
        return redirect()->route('territoryAll');
    }

    public function tdestroy(Territory $territory)
    {
        $territory->delete();
        return redirect()->route('territoryAll');
    }
}
