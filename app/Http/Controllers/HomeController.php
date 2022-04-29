<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $students = Student::all();
        // dd($student);
        return view('student.index', compact('students'));
    }

    public function addForm() {
        $student = Student::all();
        // dd($student);

        return view('student.add', compact('student'));
    }

    public function saveAdd(Request $request) {
        $model = new Student();
        $model->fill($request->all());
        // dd($request->all());
        $model->save();

        return redirect(route('student.index'));
    }

    // List danh sách 20 
    public function listForm() {
        $list = Student::where('age',20)->get();
        // dd($list);
        return view('student.list20', compact('list'));
    }
    public function editForm($id) {
        $st = Student::find($id);
        if (!$st) {
            return redirect()->back();
        }
        return view('student.edit', compact('st'));
    
    }

    // Xóa 
    public function remove($id){
        Student::destroy($id);
        return redirect()->back();
    }
}
