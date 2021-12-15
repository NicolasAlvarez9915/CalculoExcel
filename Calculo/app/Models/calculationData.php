<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class calculationData extends Model
{
    use HasFactory, SoftDeletes;

    public $valueData;
    public $politicParty_id;

    protected $table = 'calculationData';
    protected $fillable = ['valueData','politicParty_id'];
}
