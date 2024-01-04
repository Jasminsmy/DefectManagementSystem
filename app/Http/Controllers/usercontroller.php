<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\defectfile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    function report()
    {
        

        if(Auth::check()){

            $typeuser=Auth::user()->usertype;

                if($typeuser=='0')
                {
                    $data = defectfile::all();
                    return view('client.report', ['data'=>$data]);
                }

                if($typeuser=='1')
                {
                    $data=defectfile::all();

                    return view('newdev.hompage', ['data'=>$data]);
                }

                if($typeuser=='2')
                {
                    $data = defectfile::all();
                    return view('cont.reportpage', ['data'=>$data]);
                }
        }
    }

    function addreport()
    {
        return view('client.addreport');
    }

    function addform(Request $req)
    {
        $member = new defectfile;
        $member->name=$req->name;
        $member->address=$req->address;
        $member->location=$req->location;
        $member->area=$req->area;
        $member->defect=$req->defect;
        $member->comment=$req->comment;
        $member->contractor=$req->contractor;
        $member->status=$req->status;
        $member->save();

        //$data = $req->all();
        //$check = $this->create($data);
         
        return redirect("reports");
    }

    function addreportclient(Request $req)
    {
        $member = new defectfile;
        $member->name=$req->name;
        $member->address=$req->address;
        $member->location=$req->location;
        $member->area=$req->area;
        $member->defect=$req->defect;
        $member->comment=$req->comment;
        $member->save();

        //$data = $req->all();
        //$check = $this->create($data);
         
        return redirect("reports");
    }


    function devreport()
    {
        $member=defectfile::all();

        return view('newdev.hompage', ['data'=>$member]);
    }

    function viewreport($id)
    {
        $data=DB::table('defectfiles')
            ->where('defectfiles.id', '=', $id)->select('defectfiles.*')
            ->get()->first();

        if(Auth::check()){

            $typeuser=Auth::user()->usertype;

                if($typeuser=='0')
                {
                    return view('client.reportpage', ['data'=>$data]);
                }

                if($typeuser=='1')
                {
                    return view('newdev.reportpage', ['data'=>$data]);
                }

                if($typeuser=='2')
                {
                    return view('cont.reportpage', ['data'=>$data]);
                }
        }
    }

    function editformcont($id)
    {
        $data=DB::table('defectfiles')
            ->where('defectfiles.id', '=', $id)->select('defectfiles.*')
            ->get()->first();

        return view('cont.editreport', ['data'=>$data]);
    }

    function updateformcont(Request $req)
    {
        $member=defectfile::find($req->id);
        $member->comment=$req->comment;
        $member->status=$req->status;
        $member->save();

        return redirect()->back();
    }

    function editform($id)
    {
        $data=DB::table('defectfiles')
            ->where('defectfiles.id', '=', $id)->select('defectfiles.*')
            ->get()->first();

        $items=User::where('usertype','=',2)->pluck('name');

        $selectedID = 2;

        return view('newdev.editreport', ['data'=>$data, 'id'=>$selectedID, 'items'=>$items]);
    }

    function newreport()
    {
        $items=User::where('usertype','=',2)->pluck('name');
        $member=User::where('usertype', '=', 0)->pluck('name');
        //$data=User::where('usertype','=',0)->pluck('address');
        //$num=User::where('id')
        //$adr=User::where('name','=', $member)->get('address');
        $selectedID = 2;

        return view('newdev.addreport', ['id'=>$selectedID, 'items'=>$items, 'member'=>$member]);
    }

    function updateform(Request $req)
    {
        $member=defectfile::find($req->id);
        $member->comment=$req->comment;
        $member->contractor=$req->contractor;
        $member->status=$req->status;
        $member->save();

        return redirect()->intended('reports');
        //return view('newdev.reportpage');
    }

    function contsavereports(Request $req)
    {
        $member=defectfile::find($req->id);
        $member->status=$req->status;
        $member->save();

        return view('cont.report');
    }

    function clientlist()
    {
        //$typeuser=Auth::user()->usertype();
        $member=User::where('usertype','=', 0)->get();
        return view('newdev.client',['data'=>$member]);
    }

    function contlist()
    {
        $member=User::where('usertype','=',2)->get();
        return view('newdev.cont', ['data'=>$member]);
    }

    function viewclientdetails($id)
    {
        $data=DB::table('users')
            ->where('users.id', '=', $id)->select('users.*')
            ->get()->first();

        return view('newdev.editclient', ['data'=>$data]);
    }

    function updateuser (Request $req)
    {
        $member=user::find($req->id);
        $member->address=$req->address;
        $member->phone=$req->phone;
        $member->email=$req->email;
        $member->usertype=$req->usertype;
        $member->save();

        return redirect()->back();
    }

    function contractordetails($id)
    {
        $data=DB::table('users')
            ->where('users.id', '=', $id)->select('users.*')
            ->get()->first();

        return view('newdev.editcont', ['data'=>$data]);
    }

    function deleteuser($id)
    {
        $members=user::find($id);
        $members->delete();
        redirect()->intended('clientlist');
        //return view('newdev.client');
    }

    function deletecont($id)
    {
        $members=user::find($id);
        $members->delete();
        redirect()->intended('contlist');
        //return view('newdev.client');
    }

    function modifyprofile(Request $request)
    {
        if(Auth::check()){

            $typeuser=Auth::user()->usertype;

                if($typeuser=='0')
                {
                    $request->validate([
                                'name' => 'required',
                                'email' => 'required',
                                'phone' => 'required',
                                'address' => 'required',
                    ]);

                    $data = $request->all();

                    $user=Auth::user();
                    $user->update($data);

                    return view('client.profile', ['data'=>$data]);
                }

                if($typeuser=='1')
                {
                    $request->validate([
                                'name' => 'required',
                                'email' => 'required',
                                'phone' => 'required',
                    ]);

                    $data = $request->all();

                    $user=Auth::user();
                    $user->update($data);
                    return view('newdev.profile', ['data'=>$data]);
                }

                if($typeuser=='2')
                {
                    return view('cont.profile', ['data'=>$data]);
                }
        }  
    }

    /*function modifypassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirm',
        ])

            $data = $request->only('password');
            $user=Auth::user();
            $user->update($data);

        return view('client.profile');  
    }*/
}
