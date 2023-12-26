<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['date', 'departure_location_id', 'destination_location_id'];

    public function departureLocation()
    {
        return $this->belongsTo(Location::class, 'departure_location_id');
    }

    public function destinationLocation()
    {
        return $this->belongsTo(Location::class, 'destination_location_id');
    }

    public function seatAllocations()
    {
        return $this->hasMany(SeatAllocation::class);
    }
}
