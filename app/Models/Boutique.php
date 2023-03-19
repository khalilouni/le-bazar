<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;

    protected $fillable =  ['nom', 'description', 'logoUrl', 'adresse', 'telephone', 'mobile', 'userId'];
}
