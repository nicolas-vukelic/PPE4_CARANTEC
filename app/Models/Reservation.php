<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'Reservation';
    protected $fillable = ['IDEVENT','IDTEUFEUR', 'DATE', 'NBPLACES'];
protected $guarded = 'COUTTOTAL';
    protected $primaryKey = ['IDEVENT','IDTEUFEUR','DATE'];
    public $incrementing = false;



}
