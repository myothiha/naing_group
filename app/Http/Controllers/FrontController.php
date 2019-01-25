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
use App\Businessimage;
use App\Csrimage;
use App\Blogimage;
use App\Contact;
use App\Tag;
use App\Team;
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

        $founder            = Team::where('type', '=', 'FEC')->get();
        $organization       = Team::where('type', '=', 'Honorable')->get();
        $represent          = Team::where('type', '=', 'Representative')->get();
        $about              = About::first();
        $founders           = Team::first();
        // return response($founder);
    	return view('team', [
            'founder'           => $founder,
            'organization'      => $organization,
            'represent'         => $represent,
            'about'             => $about,
            'founders'          => $founders
        ]);
    }

    public function csr(){
    	$csrs   = Csr::orderBy('created_at','desc')->paginate(10);
    	return view('csr',[
    		'csrs' => $csrs,
    	]);
    }

    public function csrdetail(Csr $csr){
        $csrs       = Csr::Limit(3)->get();
    	return view('csrdetail',[
    		'csr'	=> $csr,
            'csrs'  => $csrs,
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
        $businesses = Business::limit(3)->get();
    	return view('businessdetail',[
    		'business'  => $business,
            'businesses' => $businesses,
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
        $tags           = Tag::all();
    	return view('blog',[
    		'blogs'  => $blogs,
            'blogcategorys'    => $blogcategorys,
            'tags'              => $tags
    	]);
    }

    public function blogdetail(Blog $blog){
        $blogs  = Blog::limit(3)->orderBy('id', 'desc')->get();
        $blogcategorys   = Blogcategory::all();
        $tags           = Tag::all();
    	return view('blogdetail',[
            'blog'      => $blog,
            'blogs'     => $blogs,
            'blogcategorys'    => $blogcategorys,
            'tags'              => $tags
    	]);
    }

    public function contact() {
    	return view('contact');
    }
}
