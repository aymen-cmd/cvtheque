<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Cv;
use Auth;
use App\http\requests\cvRequest;


class CvController extends Controller
{
    public function __construct() {
    
        $this->middleware('auth');

    }
    public function index(){
        $listcv = Auth::user()->cvs;

        return view ('cv.index' ,['cvs' => $listcv]);

    }
    public function create(){
        return view('cv.create');
        
    }
    public function store(cvRequest $request){
        $cv = new Cv();

        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->user_id = Auth::user()->id;

        if($request->hasFile('photo')) {
        $cv->photo=$request->photo->store('image');
    }
        
        $cv->save();
        session()->flash('success', 'le cv a etait bien enregestrer :)');
        return redirect('cvs');
    }
    public function edite($id){
        $cv = Cv::find($id);
        $this->authorize('update', $cv);
        return view('cv.edite',['cv' => $cv]);

        
    }
    public function update(cvRequest $request,$id){
        $cv = Cv::find($id);
        $cv->titre =$request->input('titre');
        $cv->presentation = $request->input('presentation');
        
        if($request->hasFile('photo')) {
        $cv->photo=$request->photo->store('image');
        }
           
        $cv->save();

        return redirect('cvs');
        
    }

    public function showlinkrequestform ($id){

        return "saalllllaaaalolo";
    }
    public function destroy(Request $request,$id){
        $cv = Cv::find($id);
        $cv->delete();
        return redirect('cvs');
        
    }
}
