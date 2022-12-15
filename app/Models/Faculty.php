<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function getMyFaculty() {
        $faculties = Faculty::select('faculties.*')
                        ->wherenull('deleted_at')
                        ->orderby('sort_num','ASC')
                        ->get();
        return $faculties;
    }

}
