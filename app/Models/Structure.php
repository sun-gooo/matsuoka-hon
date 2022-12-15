<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    public function getMyStructure() {
        $structures = Structure::select('structures.*')
                      ->wherenull('deleted_at')
                      ->orderby('structure_type','ASC')
                      ->get();

        return $structures;
    }
}
