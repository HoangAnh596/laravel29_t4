<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    public $fillable = [
        'name',
        'age',
        'gender',
        'program'
    ];

    // public function list20() {
    //     $users = DB::table('students')->where('age', 20)->get();
    //     // dd($users);
    //     return $users;
    // }
}