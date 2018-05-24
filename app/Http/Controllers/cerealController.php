<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cerealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function tampil(Request $request)
    {
        return view('/result');
    }

    public function predict(Request $request)
    {
      $this->validate($request,[
       'calories'=>'required',
       'carbo'=>'required',
       'fat'=>'required',
       'fiber'=>'required',
       'potass'=>'required',
       'sodium'=>'required',
       'protein'=>'required',
       'vitamins'=>'required',
     ]);
     $data = array(
       'calories'=>$request->calories,
       'carbo'=>$request->carbo,
       'fat'=>$request->fat,
       'fiber'=>$request->fiber,
       'potass'=>$request->potass,
       'sodium'=>$request->sodium,
       'protein'=>$request->protein,
       'vitamins'=>$request->vitamins,
       'datatemp'=>$request->tmpresult
     );
     $liat= array_get($data,'datatemp');
     dd($liat);
   return view('result',compact('data'));


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
