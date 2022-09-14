<?php

namespace App\Models;

// eliminar de manera lógica con laravel
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsertInformationModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'upload_insert';

    protected $fillable = [
        'id',
        'name',
        'email',
        'agent',
        'activity',
        'comments',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
}
