<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function getMyProperty() {
        $properties = Property::select('properties.*')
                      ->wherenull('deleted_at')
                      ->orderby('property_type','ASC')
                      ->get();

        return $properties;
    }
}
