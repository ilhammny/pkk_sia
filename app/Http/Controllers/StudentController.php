<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexXa()
    {
        $students = Student::where('class', 'X A')->paginate(10);
        return view('students.xa', compact('students'));
    }

    public function indexXb()
    {
        $students = Student::where('class', 'X B')->paginate(10);
        return view('students.xb', compact('students'));
    }

    public function indexXc()
    {
        $students = Student::where('class', 'X C')->paginate(10);
        return view('students.xc', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.xa_create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:20|unique:students',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'date_of_birth' => 'required|date',
            'status' => 'required|string',
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->nis = $request->nis;
        $student->gender = $request->gender;
        $student->date_of_birth = $request->date_of_birth;
        $student->status = $request->status;
        $student->class = 'X A'; // Set class jika diperlukan
        $student->save();

        return redirect()->route('students.xa')->with('success', 'Siswa berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
   
     public function show($id)
     {
         $student = Student::findOrFail($id); // Ambil data siswa berdasarkan ID
         return view('students.xa_edit', compact('student')); // Ganti 'students.show' dengan view yang sesuai
     }

    public function showXB()
    {
        $students = Student::where('class', 'X B')->get();
        return view('students.xb', compact('students'));
    }

    public function showXC()
    {
        $students = Student::where('class', 'X C')->get();
        return view('students.xc', compact('students'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        // Pastikan date_of_birth adalah objek Carbon
        $student->date_of_birth = \Carbon\Carbon::parse($student->date_of_birth);
        return view('students.xa_edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all()); // Pastikan Anda melakukan validasi jika perlu
        return redirect()->route('students.xa')->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus($id)
    {
        $student = Student::findOrFail($id);
        return view('students.xa_hapus', compact('student'));
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.xa')->with('success', 'Data siswa berhasil dihapus.');
    }
}
