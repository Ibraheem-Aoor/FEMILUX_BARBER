<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\BarberTransformer;
use App\Transformers\Admin\ServiceTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory, HasStatus;
    protected $guarded = [
        'id',
        '_token'
    ];

    public $modal = "#barber-modal";
    public $transformer = BarberTransformer::class;
}
