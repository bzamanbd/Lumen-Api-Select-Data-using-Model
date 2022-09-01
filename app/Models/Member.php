<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model{
    protected $table = "members";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing=true;

    // protected $fillable = [];

    // public $timestamps = false;
}