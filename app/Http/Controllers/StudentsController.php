<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Http\Requests\StorestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use Database\Seeders\Students as SeedersStudents;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        if(!empty($search)){
            $dataStudents = Students::where('students.idstudents','like','%'. $search. '%')
                ->orwhere('students.fullname','like','%'. $search. '%')
                ->paginate(10)->onEachSide(1)->fragment('std');
            
        }else{
            $dataStudents = Students::paginate(10)->onEachSide(1)->fragment('std');
        }

        return view('students.data')->with([
            'students' => $dataStudents,
            'search' => $search
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestudentsRequest $request)
    {
        $validate = $request->validated();

        $students = new Students;
        $students->idstudents = $request->txtid;
        $students->fullname = $request->txtfullname;
        $students->gender = $request->txtgender;
        $students->age = $request->txtage;
        $students->address = $request->txtaddress;
        $students->email = $request->txtemail;
        $students->phone = $request->txtphone;
        $students->save();

        return redirect('students')->with('msg','Add New Student Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(students $students,$idstudents)
    {
        $data = \App\Models\students::where('idstudents', $idstudents)->first();


        return view('students.formedit')->with([
            'txtid' => $idstudents,
            'txtfullname' => $data->fullname,
            'txtage' => $data->age,
            'txtaddress' => $data->address,
            'txtemail' => $data->email,
            'txtphone' => $data->phone,
            'txtgender' => $data->gender
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentsRequest $request, students $students,$idstudents)
    {
 
        $data = $students->find($idstudents);
        $data->fullname = $request->txtfullname;
        $data->gender = $request->txtgender;
        $data->age = $request->txtage;
        $data->address = $request->txtaddress;
        $data->email = $request->txtemail;
        $data->phone = $request->txtphone;
        $data->save();

        return redirect('students')->with('msg','Data dengan nama '.$data->fullname.' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data->delete();

        return redirect('students')->with('msg','Data dengan nama '.$data->fullname.' berhasil dihapus');

    }
}
