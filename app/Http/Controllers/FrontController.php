<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Homeslide;
use App\Csr;
use App\About;
use App\Project;
use App\whychoose;
use App\Indexdata;
use App\Business;
use App\Faq;
use App\Milestone;
use App\Blog;
use App\Businessimage;
use App\Csrimage;

class FrontController extends Controller
{
    public function index(){
    	$homeslides 		= Homeslide::all();
    	$about 				= About::find(1);
    	$projects  			= Project::all();
    	$whychoose  		= whychoose::get();
    	$indexdata 			= Indexdata::find(1);
    	$business 			= Business::get();
    	$faq 				= Faq::get();
    	return view('index',[
    		'homeslides'  	=> $homeslides,
    		'about'  		=> $about,
    		'projects' 		=> $projects,
    		'whychoose' 	=> $whychoose,
    		'indexdata' 	=> $indexdata,
    		'business' 		=> $business,
    		'faq'			=> $faq,
    	]);
    }

    public function about(){
    	$about = About::find(1);
    	$whychoose  		= whychoose::get();
    	return view('about',[
    		'about'  => $about,
    		'whychoose' 	=> $whychoose,
    	]);
    }

    public function milestone(){
    	$milestones  = Milestone::orderBy('created_at','desc')->paginate(10);
    	return view('milestone',[
    		'milestones'  => $milestones
    	]);
    }

    public function team(){
    	return view('team');
    }

    public function csr(){
    	$csrs   = Csr::orderBy('created_at','desc')->paginate(10);
    	return view('csr',[
    		'csrs' => $csrs,
    	]);
    }

    public function csrdetail(Csr $csr){
    	return view('csrdetail',[
    		'csr'	=> $csr
    	]);
    }

    public function project(){
    	return view('project');
    }

    public function projectdetail(Project $project){
    	return view('projectdetail',[
    		'project'  => $project
    	]);
    }

    public function business(){
    	$business  = Business::orderBy('created_at','desc')->paginate(4);
    	return view('business',[

    		'business' => $business
    	]);
    }

    public function businessdetail(Business $business){
    	return view('businessdetail',[
    		'business'  => $business
    	]);
    }

    public function faq(){
    	$faqs  = Faq::all();
    	return view('faq',[
    		'faqs'  => $faqs
    	]);
    }

    public function blog(){
    	$blogs   = Blog::orderBy('created_at','desc')->paginate(6);
    	return view('blog',[
    		'blogs'  => $blogs,
    	]);
    }

    public function blogdetail(Blog $blog){
    	return view('blogdetail',[
    		'blog'		=> $blog
    	]);
    }

    public function contact(){
    	return veiw('contact');
    }
}