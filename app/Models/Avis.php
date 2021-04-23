<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;
    protected $table = 'Avis';
    protected $primaryKey = 'IDAVIS';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



}
