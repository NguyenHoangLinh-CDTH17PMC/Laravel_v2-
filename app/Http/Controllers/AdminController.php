<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Admin;
use  Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    protected $redirectTo='danhsach';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $admin = Admin::find(1);
        // $admin->mat_khau = Hash::make($admin->mat_khau);
        // $admin->save();
        return view('login');
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
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap,'password'=>$mat_khau])){
            return redirect()->route('linhvuc.danhsach');
        }
        return "Đăng nhập thất bại";
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function laythongtin()
    {
        return Auth::id();
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
