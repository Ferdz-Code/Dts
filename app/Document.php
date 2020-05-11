<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    Protected $fillable = ['classification','subject','document_type','sender_name','sender_profile',
    'mode_of_delivery','addressee','office_name','date_received','time_received'];
    Protected $primaryKey = 'id';

}