<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
            'full_name',
            'email',
            'position',
            'department'
        ];
    public static function list() {

        $employees = Employee::orderByRaw('full_name')->get();
        $list = [];
        foreach ($employees as $employee) {
            $list[$employee->id] = $employee->full_name;
        }
        return $list;
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function salaries()
    {
        return $this->hasMany(Salary::class);
    }
}
