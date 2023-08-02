<?php

// app/Models/Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['ClientName', 'ServicesAvailed', 'StaffAssigned'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'StaffAssigned');
    }

    // Mối quan hệ một-nhiều với Testimonials
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'ClientID');
    }
}

