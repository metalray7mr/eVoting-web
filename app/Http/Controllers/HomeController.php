<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $users = DB::table('users')->get();
         return view('dashboard',compact("users"));
        
    }
    
    public function index1()
    {
        
         $users = DB::table('users')->get();
         return view('face',compact("users"));
    }
    function insert(Request $req)
    {
        $voteindex =$req->input('voterindex');
        $data = array('voterindex'=>$voteindex);
        DB::table('voteindex')->insert($data);
        echo "success"; 
    }
    
}