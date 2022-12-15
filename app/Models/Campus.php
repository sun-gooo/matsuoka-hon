<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    public function getMyCampus() {
        $campuses = Campus::select('campuses.*')
                        ->wherenull('deleted_at')
                        ->orderby('sort_num','ASC')
                        ->get();
        return $campuses;
    }
}
