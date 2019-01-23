<?php

namespace App\Http\Controllers;

use App\About;
use App\AutoDesk\Services\Viewers\AutoDeskViewerService;
use App\Blog;
use App\Blogcategory;
use App\Business;
use App\Csr;
use App\Faq;
use App\Homeslide;
use App\Indexdata;
use App\Milestone;
use App\Project;
use App\Whychoose;

class FrontController extends Controller
{

    private $viewer;

    /**
     * TestController constructor.
     * @param AutoDeskViewerService $autoDeskViewer
     */
    public function __construct(AutoDeskViewerService $autoDeskViewer)
    {
        $this->viewer = $autoDeskViewer;
    }

    public function index(){

    	$homeslides 		= Homeslide::all();
    	$about 				= About::find(1);
    	$projects  			= Project::all();
    	$whychoose  		= Whychoose::get();
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
    	$whychoose  		= Whychoose::get();
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

    public function project() {

        $projects = Project::all();

    	return view('project', [
    	    'projects' => $projects,
        ]);
    }

    public function projectdetail(Project $project) {

        return $this->viewer->render('projectdetail', $project->projectFile, [
            'project'  => $project,
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
        $blogcategorys   = Blogcategory::all();
    	return view('blog',[
    		'blogs'  => $blogs,
            'blogcategorys'    => $blogcategorys
    	]);
    }

    public function blogdetail(Blog $blog){
        $blogs  = Blog::limit(3)->orderBy('id', 'desc')->get();
        $blogcategorys   = Blogcategory::all();
    	return view('blogdetail',[
            'blog'      => $blog,
            'blogs'     => $blogs,
            'blogcategorys'    => $blogcategorys
    	]);
    }

    public function contact() {
    	return view('contact');
    }
}
