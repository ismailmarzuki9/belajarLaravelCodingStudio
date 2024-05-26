<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;


class ControlerStudent extends Controller
{
    Public function show($id)
    {
        $name = Student::find($id)->nama; // mencari data dengan key id untuk output nama
        return view('halaman2',['nama'=> $name]);

    }

    Public function tampil()
    {

        // $data2 = Student::all(); // unutk menampilkan semua data ke halaman index
        // return view('index', ['studentt'=> $data2]);
        $nama= Student::paginate(5);
        return view('index', ['data'=> $nama]);
    }

    public function filter(){
        $filterSdt = Student::where(`nilai`,`=>`,25)
                            ->where('nama','LIKE','%Z%')->get();
        return view('filter',compact('filterSdt'));
    }

    public function showdetail($id){
        
        $data2 = Student::find($id); // unutk menampilkan semua data ke halaman index
        return view('showdetail', ['datadetail'=> $data2]);
    }

    // tambah data==========>
    public function add(){

        return view('addData');
    }
    public function save(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nilai' => 'required'
        ]);

        Student::create([
            'nama'=>$request->nama,
            'nilai'=>$request->nilai
        ]);

        return Redirect::route('index');

    }

    // UPDATE DATA FUNCTION
    public function updateFuncation($id){
        $data=Student::find($id);
        return view('update', ['data'=>$data]);

    }
    // public function updateFuncation(Student $student){
    //     return view('update',compact('student'));
    // }

    // untuk menyimpan data yg diedit

    public function update(Request $request, Student $student)
    {
        $student->update([
            'nama' => $request->nama,
            'nilai' => $request->nilai

        ]);
         return Redirect::route('index'); 
    }

    //   function untuk Delet

    Public function delete(Student $student)
    {
        $student->delete();
        return Redirect::route('index');
    }
}
