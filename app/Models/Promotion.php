<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    public function getMyPromotion() {
        $promotions = Promotion::select('promotions.*')
                        ->wherenull('deleted_at')
                        ->orderby('id','ASC')
                        ->get();
        return $promotions;
    }

}
