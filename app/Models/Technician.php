<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Category;
use App\TransformingAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technician extends Model
{
    use HasFactory, TransformingAttribute;

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
