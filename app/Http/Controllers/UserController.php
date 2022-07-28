<?php

namespace App\Http\Controllers;
use App\Models\Distribute;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userAll()
    {
        $distributes = Distribute::oldest()->paginate(5);
        return view('userAll',compact('distributes'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function userAdd()
    {
        $territory = DB::table('territorys')->get();
        return view('userAdd',compact('territory'));
    }

    public function ustore(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'nic'=>'required',
            'add'=>'required',
            'mobile'=>'required',
            'tCode'=>'required',
            'uName'=>'required',
            'pass'=>'required',
        ]);

        $input = $request->all();
        Distribute::create($input);
        return redirect()->route('userAll');
    }

    public function userEdit(Distribute $distribute)
    {
        return view('userEdit',compact('distribute'));
    }

    public function uUpdate(Request $request, Distribute $distribute)
    {
        $request->validate([
            'name'=>'required',
            'nic'=>'required',
            'add'=>'required',
            'mobile'=>'required',
            'tCode'=>'required',
            'uName'=>'required',
            'pass'=>'required',
        ]);

        $input = $request->all();
        $distribute->update($input);
        return redirect()->route('userAll');
    }

    public function udestroy(Distribute $distribute)
    {
        $distribute->delete();
        return redirect()->route('userAll');
    }
}
