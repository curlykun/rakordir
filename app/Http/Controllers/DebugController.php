<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Absen;
use App\Emp;
use App\User;
use DataTables;
use App\Materi;
use App\File;
use App\Role;
use App\Reporter;
use App\Notulen;

class DebugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $user =  Auth::user();
        // $roles = $user->getRoleNames();

        // $materi = Materi::lastRecodeOfUser('6')->first();
        // $materi = Materi::lastRecodeOfReporter('7')->first();

        // $filtterUser = User::select('username')
        //     ->role('administrator')
        //     ->orWhere('username',$user->username)
        //     ->get();

        $notulen = Notulen::find(1);
        return $notulen->users;
        // $administrator = Auth::user()->hasRole('administrator');
        // $username = Auth::user()->username;

        // $materi = Materi::where(function ($query) use ($administrator,$username){
        //     if(!$administrator){
        //         $query->where('username',$username)
        //         ->orWhereHas('users', function ($query) use ($username) {
        //             $query->where('username',$username);
        //         });
        //     }
        // })->with(['files']);
        

        // Tanpilkan semua user yang role administrator
        // $role = User::role('administrator')->get();
        // dd($role);
        

        // $emp = Emp::with(['absens' => function ($query) {
        //     $query->orderBy('time','desc')
        //         ->groupBy('date','emp_id','inout');
        // }])->get();
        // // dd($emp);
        // return view('absen',compact('emp'));
        
        // Tampilkan semua permission user yang sedang login
        // $login = Auth::user()->getAllPermissions();

        // Tampilkan role user yang sedang login
        // $login = Auth::user()->getRoleNames();
        // $login = $user->hasRole('user');
        // dd($login);


        // $materi = Reporter::where('user_id',$login->id)->first();
        // return ($materi);
        $arry = [
            ['nik'=>'10001','nama'=>'kurob'],
            ['nik'=>'10002','nama'=>'gugum'],
            ['nik'=>'10003','nama'=>'dhani'],
            ['nik'=>'10005','nama'=>'ukon']
        ];
        $collection = collect($arry);

        $filtered = $collection->filter(function ($value, $key) {
            return str_is('*gu*',$value['nama']);
        });
        
        $filtered->all();

        dd($arry);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
