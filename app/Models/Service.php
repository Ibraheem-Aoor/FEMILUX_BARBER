<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\ServiceTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, HasStatus;
    protected $guarded = [
        'id',
        '_token'
    ];

    public $modal = "#service-modal";
    public $transformer = ServiceTransformer::class;
}
