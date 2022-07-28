<?php

namespace App\Http\Controllers;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{ 
    public function zoneAll()
    {
        $zones = Zone::oldest()->paginate(5);
        return view('zoneAll',compact('zones'))->with('i',(request()->input('page',1)-1)*5);
    }
    public function zoneAdd()
    {
        return view('zoneAdd');
    }

    public function zstore(Request $request)
    {
        $request->validate([
            'zCode'=>'required',
            'zLD'=>'required',
            'zSD'=>'required',
        ]);

        $input = $request->all();

        Zone::create($input);
        return redirect()->route('zoneAll');
    }

    public function zoneEdit(Zone $zone)
    {
        return view('zoneEdit',compact('zone'));
    }

    public function zupdate(Request $request, Zone $zone)
    {
        $request->validate([
            'zCode'=>'required',
            'zLD'=>'required',
            'zSD'=>'required',
        ]);

        $input = $request->all();
        $zone->update($input);
        return redirect()->route('zoneAll');
    }

    public function destroy(Zone $zone)
    {
        $zone->delete();
        return redirect()->route('zoneAll');
    }

}
