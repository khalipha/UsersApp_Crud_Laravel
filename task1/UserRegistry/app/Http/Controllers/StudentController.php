<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModels\Student;

use DB;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);
        //$students = DB::select( DB::raw("SELECT * FROM students"));
       // return response()->json(['students' => $students]);
        return view('StudentViews.index',compact('students'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('StudentViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([

            'name'     => 'required',
            'surname'  => 'required',
            'email'    => 'required',
            'position' => 'required'

        ]);
        Student::create($request->all());
      return redirect()->route('students.index')->with('success','Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $students = Student::find($id);
         return view('StudentViews.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $student = Student::find($id);
        return view('StudentViews.edit',compact('student'));
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
        request()->validate([

            'name'     => 'required',
            'surname'  => 'required',
            'email'    => 'required',
            'position' => 'required',

        ]);
        Student::find($id)->update($request->all());
        return redirect()->route('students.index')->with('success','Student updated successfully');
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

        return response($id);
        // Student::find($id)->delete();
        // return redirect()->route('students.index')->with('success','Student deleted successfully');
    }
}
