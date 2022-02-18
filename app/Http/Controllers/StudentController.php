<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.home', [
            'students'  => Student::orderBy('created_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn'      => 'required|unique:students',
            'nis'       => 'required|unique:students',
            'fullName'  => 'required',
            'phone'     => 'required',
            'address'   => 'required',
            'avatar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->avatar->extension();  
       
        $request->avatar->move(public_path('images'), $imageName);

        Student::create([
            'nisn'      => $request->nisn,
            'nis'       => $request->nis,
            'fullName'  => $request->fullName,
            'gender'    => $request->gender,
            'phone'     => $request->phone,
            'address'   => $request->address,
            'avatar'    => $imageName
        ]);

        return redirect('siswa')->with('success', 'Selamat! Data berhasil ditambahkan');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
        $student = Student::find($id);


        $student->delete();


        return redirect('siswa')->with('success', 'Selamat! Anda berhasil dihapus');
    }
}
