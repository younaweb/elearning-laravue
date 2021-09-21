<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\VideoUser;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::with('user')->withcount('videos')->get();
        
        return Inertia::render('Courses/index',['courses'=>$courses]);
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

    public function show($id)
    {
        $course=Course::with('videos')->where('id',$id)->first();
        $watch=auth()->user()->Videos;
        $watched=[];
        foreach($watch as $w){
            //dd($w);

            if($w->course_id==$id){
                $watched[]=$w;
            }
        }
        //dd($watched);
        return Inertia::render('Courses/show',['course'=>$course,'watched'=>$watched]);
    }


    public function togglewatched()
    {
        $video_id=request()->id;
        $user=auth()->user()->id;
     
        $exist=VideoUser::where([['video_id',$video_id],['user_id',$user]])->first();
    if($exist){
            $tog=VideoUser::where([['video_id',$video_id],['user_id',$user]])->delete();
        }else{
            $tog=VideoUser::create([
                'video_id'=>$video_id,
                'user_id'=>$user
            ]);
        }
        return $tog;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

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
