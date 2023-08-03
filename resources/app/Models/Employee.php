<?php

// app/Models/Employee.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['UserID', 'EmployeeName', 'Address', 'ContactNumber', 'EmployeeCode', 'Department', 'Role', 'Photo'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
