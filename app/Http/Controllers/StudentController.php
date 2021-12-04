<?php

namespace App\Http\Controllers;

use PDF;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')
        ->join('sclasses','students.class_id','=','sclasses.id')
        ->get();
         return view('admin.allStudent',compact('students'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
         'studentName' => 'required',
         ]);
        if($request->file('image')){
          $image = $request->file('image');
          $ImageFullName = $request->studentName.'_'.$request->file('image')->getClientOriginalName();
          $image->move(public_path('/images'),$ImageFullName);
        }
        $homeAddress = $request->street." ".$request->city." ".$request->postalCode;
        $student = Student::create([
           'class_id'=>$request->class_id,
           'session_id' => $request->session_id,
           'childName'=>$request->studentName,
           'gender'=>$request->gender,
           'birthDate'=>$request->dateOfBirth,
           'placeOfBirth'=>$request->placeOfBirth,
           'homeAddress'=>$homeAddress,
           'homePhone'=>$request->homePhone,
           'momCellPhone'=>$request->momCellPhone,
           'dadCellPhone'=>$request->dadCellPhone,
           'FatherName'=>$request->name,
           'workPlace'=>$request->workPlace,
           'occupation'=>$request->occupation,
           'email'=>$request->emailAddress,
           'permanentAddress'=>$request->permanentAddress,
           'currentAddress'=>'',
           'admissionDate'=>$request->addmissionDate,
           'imageURL'=>$ImageFullName,
           'password'=>Hash::make($request->studentName."123")
           
        ]);
        if($student){
        return response()->json([route('students.index'),'Student Created Successfully'],201);
        } 
    }

    public function show(Student $student,$id)
    {
         $student = $student->find($id);
         $pdf = PDF::loadView('admin.PDFStudent');
         $pdf->setOption('footer-center','The Smart Education System');
         return $pdf->inline();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}