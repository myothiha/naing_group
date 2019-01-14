<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs  = Faq::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.faqs.index',[
            'faqs'     => $faqs
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq = new Faq;

        $faq->question              = $request->question ?? '';
        $faq->answer                = $request->answer ?? ''; 
        $faq->save();

        return redirect('admin/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', [

            'faq' => $faq
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->question              = $request->question ?? '';
        $faq->answer                = $request->answer ?? '';
        $faq->save();

        return redirect('admin/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect('admin/faq');
    }
}
