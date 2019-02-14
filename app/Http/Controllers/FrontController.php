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
use App\ProjectFile;
use App\Tag;
use App\Team;
use App\Project;
use App\Whychoose;
use App\Room;
use App\Gallery;
use App\ProjectType;
use App\City;
use App\ProjectStatus;
use App\RoomImage;
use App\FloorPlan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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

    public function index()
    {


        $homeslides     = Homeslide::all();
        $about          = About::first();
        $gallerys       = Gallery::all();
        $whychoose      = Whychoose::get();
        $indexdata      = Indexdata::first();
        $business       = Business::get();
        $faq            = Faq::Limit(3)->get();

        return view('index', [
            'homeslides'    => $homeslides,
            'about'         => $about,
            'gallerys'      => $gallerys,
            'whychoose'     => $whychoose,
            'indexdata'     => $indexdata,
            'business'      => $business,
            'faq'           => $faq,
        ]);
    }

    public function about()
    {
        $about      = About::first();
        $whychoose  = Whychoose::get();
        return view('about', [
            'about'     => $about,
            'whychoose' => $whychoose,
        ]);
    }

    public function milestone()
    {
        $milestones = Milestone::orderBy('created_at', 'desc')->paginate(10);
        return view('milestone', [
            'milestones' => $milestones
        ]);
    }

    public function team()
    {

        $founder        = Team::where('type', '=', 'FEC')->get();
        $organization   = Team::where('type', '=', 'Honorable')->get();
        $represent      = Team::where('type', '=', 'Representative')->get();
        $about          = About::first();
        $founders       = Team::first();
        // return response($founder);
        return view('team', [
            'founder'       => $founder,
            'organization'  => $organization,
            'represent'     => $represent,
            'about'         => $about,
            'founders'      => $founders
        ]);
    }

    public function csr()
    {
        $csrs = Csr::orderBy('created_at', 'desc')->paginate(10);
        return view('csr', [
            'csrs' => $csrs,
        ]);
    }

    public function csrdetail(Csr $csr)
    {
        $csrs = Csr::Limit(3)->get();
        return view('csrdetail', [
            'csr' => $csr,
            'csrs' => $csrs,
        ]);
    }

    public function project()
    {

        $projects = Project::orderBy('priority')->get();
        return view('project', [
            'projects' => $projects,
        ]);
    }
   

    public function projectdetail(Project $project)
    {
        $rooms = $project->rooms()->OrderBy('created_at', 'asc')->get();
        $types = ProjectType::get();
        $cities= City::get();
        $status = ProjectStatus::get();
              
        return view('projectdetail', [
            'project' => $project,
            'rooms'    => $rooms,
            'types'    => $types,
            'cities'   => $cities,
            'status'   => $status,
        ]);
    }

    public function projectViewer(ProjectFile $projectFile)
    {
        return $this->viewer->render('viewer', $projectFile);
    }
   
    public function roomdetail(Room $room){
        
        session_start();
        $_SESSION['room'] = $room;
        $types = ProjectType::get();
        $cities= City::get();
        $status = ProjectStatus::get();
        
        $roomimages = RoomImage::where('room_id',$room->id)->get();  
        $floorplans  = FloorPlan::where('room_id',$room->id)->get(); 
             
        return view('roomdetail',[
            'room' => $room,
            'roomimages' => $roomimages,
            'floor_plans' => $floorplans,
            'types'    => $types,
            'cities'   => $cities,
            'status'   => $status,
        ]);
    }   

    public function business()
    {
        $business = Business::orderBy('created_at', 'desc')->paginate(4);
        return view('business', [

            'business' => $business
        ]);
    }

    public function businessdetail(Business $business)
    {
        $businesses = Business::limit(3)->get();
        return view('businessdetail', [
            'business'      => $business,
            'businesses'    => $businesses,
        ]);
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('faq', [
            'faqs' => $faqs
        ]);
    }

    public function blog()
    {
        $blogs          = Blog::orderBy('created_at', 'desc')->paginate(6);
        $blogcategorys  = Blogcategory::all();
        $tags = Tag::all();
        return view('blog', [
            'blogs'         => $blogs,
            'blogcategorys' => $blogcategorys,
            'tags'          => $tags
        ]);
    }

    public function blogdetail(Blog $blog)
    {
        $blogs          = Blog::limit(3)->orderBy('id', 'desc')->get();
        $blogcategorys  = Blogcategory::all();
        $tags           = Tag::all();
        return view('blogdetail', [
            'blog'          => $blog,
            'blogs'         => $blogs,
            'blogcategorys' => $blogcategorys,
            'tags'          => $tags
        ]);
    }

    public function contact()
    {
        $contacts   = Contact::first();
        return view('contact',[
            'contacts' => $contacts
        ]);
    }

    public function postContact(Request $request)
    {
        MailconfigController::index();

        $parameters['name']    = $request->name;
        $parameters['email']   = $request->email;
        $parameters['message'] = $request->message;
        $title                 = "Customer Contact message from website";

        $Subject  = "Customer Contact message from website";
        $bcc      = [];

        Mail::send('emails.contactmail', array('parameters' => $parameters, 'title' => $title), function ($message) use ($bcc, $Subject, $request) {
            $message->from($request->email, $request->name)
                ->bcc($bcc)
                ->replyTo($request->email, $request->name)
                ->subject($Subject);

        });

//        flash()->success('Thanks for your contact message. ');
        return redirect()->back();
    }

    public function search(Request $request){


        $projects = Project::query()->when($request->status,function($q) use ($request){
            return $q->where('project_status_id',$request->status);
        })
        ->when($request->city,function($q) use($request){
            return $q->where('city_id',$request->city);
        })
        ->when($request->type,function($q) use ($request){
            return $q->where('project_type_id',$request->type);
        })
        ->when($request->price,function($q) use ($request){
            return $q->where('price',$request->price);
        })
        ->get();

      return view('search',compact('projects'));
    }
}
