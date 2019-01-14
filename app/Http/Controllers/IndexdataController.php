<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Indexdata;

class IndexdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $indexdatas = Indexdata::all();
       return view('admin.indexdatas.index',[
            'indexdatas' => $indexdatas,
            'menu'           => 'active',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.indexdatas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $indexdata = new Indexdata;

        $indexdata->title               = $request->title ?? '';
        $indexdata->description         = $request->description ?? '';
        $indexdata->project             = $request->project ?? '';
        $indexdata->staff               = $request->staff ?? '';
        $indexdata->investment          = $request->investment ?? '';
        $indexdata->taxation            = $request->taxation ?? '';
        $indexdata->save();

        return redirect('admin/indexdata');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indexdata  $indexdata
     * @return \Illuminate\Http\Response
     */
    public function show(Indexdata $indexdata)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indexdata  $indexdata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $indexdata = Indexdata::find($id);

        return view('admin.indexdatas.edit',[

            'indexdata' => $indexdata
             ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indexdata  $indexdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $indexdata = Indexdata::find($id);
        $indexdata->title               = $request->title ?? '';
        $indexdata->description         = $request->description ?? '';
        $indexdata->project             = $request->project ?? '';
        $indexdata->staff               = $request->staff ?? '';
        $indexdata->investment          = $request->investment ?? '';
        $indexdata->taxation            = $request->taxation ?? '';
        $indexdata->save();

        return redirect('admin/indexdata');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indexdata  $indexdata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $indexdata = Indexdata::find($id);
      $indexdata->delete();

      return redirect('admin/indexdata');
    }
}
