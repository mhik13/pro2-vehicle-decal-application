<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'firstname',
        'middlename',
        'lastname',
        'rank',
        'address',
        'designation',
        'other_office',
        'office',
        'mobile',
        'telephone',
        'pnp_id_picture',
        'verified_by',
        'verified_date',
        'status',
        'remarks',
        'email_sent',
        'endorser',
        'endorser_id',
        'drivers_license'
    ];

    public function verified() {
        return $this->belongsTo(User::class, 'verified_by', 'id');
    }

    public function vehicle() {
        return $this->hasOne(UserVehicle::class, 'applicant_id', 'id');
    }
}
