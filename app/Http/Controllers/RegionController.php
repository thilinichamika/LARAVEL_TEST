<?php

namespace App\Http\Controllers;
use App\Models\Region;
use DB;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function regionAll()
    {
        $regions = Region::oldest()->paginate(5);
        return view('regionAll',compact('regions'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function regionAdd()
    {
        $zone = DB::table('zones')->get();
        return view('regionAdd',compact('zone'));
    }

    public function rstore(Request $request)
    {
        $request->validate([
            'zCode'=>'required',
            'rCode'=>'required',
            'rName'=>'required',
        ]);

        $input = $request->all();
        Region::create($input);
        return redirect()->route('regionAll');
    }

    public function regionEdit(Region $region)
    {
        return view('regionEdit',compact('region'));
    }

    public function rupdate(Request $request, Region $region)
    {
        $request->validate([
            'zCode'=>'required',
            'rCode'=>'required',
            'rName'=>'required',
        ]);

        $input = $request->all();
        $region->update($input);
        return redirect()->route('regionAll');
    }

    public function rdestroy(Region $region)
    {
        $region->delete();
        return redirect()->route('regionAll');
    }
}
