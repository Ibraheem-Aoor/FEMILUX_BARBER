<?php

namespace App\Models;

use App\Transformers\Admin\BookingTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = ['id' , '_token'];

    public $modal = '#bookingModal';

    public $transformer = BookingTransformer::class;



    public function services() : BelongsToMany
    {
        return $this->belongsToMany(Service::class , 'service_bookings' , 'booking_id' , 'service_id');
    }

    public function barber() : BelongsTo
    {
        return $this->belongsTo(Barber::class , 'barber_id');
    }
}
