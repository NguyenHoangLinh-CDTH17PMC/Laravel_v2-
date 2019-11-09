<?php

namespace App\Http\Controllers;
use App\Linhvuc;
use Illuminate\Http\Request;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dslinhvuc = Linhvuc::all();
       return  view('ds_linh_vuc',compact('dslinhvuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('themmoi_linhvuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linh_vuc = new  Linhvuc;
        $linh_vuc-> ten_linh_vuc =$request->ten_linh_vuc;
        $linh_vuc->save();
        return redirect()->Route('linhvuc.danhsach');

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
        
        return view('capnhat_linhvuc',['id'=>$id]);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        Linhvuc::where('id',$id)->update(['ten_linh_vuc'=> $request->ten_linh_vuc]);
        return redirect()->route('linhvuc.danhsach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sId)
    {
      
        $id = Linhvuc::find($sId);
        $id->delete();
        return redirect()->route('linhvuc.danhsach');
    }
}
