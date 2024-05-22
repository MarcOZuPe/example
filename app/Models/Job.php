<?php
 namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory as FactoriesHasFactory;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Arr ;
 use Iluminate\Database\Eloquent\Factories\HasFactory;

 class Job extends Model{
    
    use  FactoriesHasFactory   ;
    protected $table = 'job_listings';

    protected $fillable = [
        'title',

        'salary'
    ];
    }   