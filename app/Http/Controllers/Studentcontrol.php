<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Branch;
use App\Course;

class Studentcontrol extends Controller
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
        $courses = Course::all();
        $branches = Branch::all();
        return view('studentregister',compact(['courses','branches']));
    }

    public function search(Request $request){
        $search = $request->get('search');
        $students =student::table('students')->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('studentdetails', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->sname = $request->sname;
        $student->fname = $request->fname;
        $student->class = $request->class;
        $student->phnum = $request->phnum;
        $student->email = $request->email;
        if($request->image->getClientOriginalName()){
            $ext  =  $request->image->getClientOriginalExtension();
            $file =  date('YmdHis').rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/postimg',$file);
        }
        else{
            $file = ''; 
        }
        $student->image = $file;

       /* $student->image = $request->file('image')->getClientOriginalName();
        $student->image->move(public_path('postimg'),$student->image);*/

        /*$student->course_id = $request->course_id;
        $student->branch_id = $request->branch_id;*/

        $student->save();
        return redirect('studentdetails');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) 
    {
        $student_cols = $request->param;
        if($student_cols){

            $student = Student::select('id','sname');
            foreach ($student_cols as $key => $value) {
                $student->addselect($value);
            }

            $students = $student->paginate(4);
        }else

        $students = Student::select('id','sname')->paginate(3);
        return view('studentdetails',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('studentedit',compact('students'));
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
        $student = Student::find($id);
        $student->sname = $request->sname;
        $student->fname = $request->fname;
        $student->class = $request->class;
        $student->phnum = $request->phnum;
        $student->email = $request->email;
        $student->save();
        return redirect('studentdetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('studentdetails');
    }
    /*public function courses(Request $request){
        $id = $request->id;
        $data['courses'] = Course::where('branch_id',$id)->get();
        echo json_encode($data);
    }*/
}
