<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gate extends Model
{
    use HasFactory;

    public function getMyGate() {
        $gates = Gate::select('gates.*')
                        ->wherenull('deleted_at')
                        ->orderby('sort_num','ASC')
                        ->get();
        return $gates;
    }
}
