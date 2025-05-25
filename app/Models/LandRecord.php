<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LandRecord extends Model
{
    use HasFactory;
    protected $fillable = ['parcel_id', 'plot_number', 'owner_name', 'address', 'area', 'status'];
}
