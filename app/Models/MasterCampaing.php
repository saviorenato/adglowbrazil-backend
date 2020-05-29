<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterCampaing extends Model
{
    protected $fillable = [
        'id',
        'login_id',
        'master_campaing_name',
        'business_objective',
        'facebook_objective',
        'budget_minimum',
        'budget_maximum',
        'bid_strategy',
        'schedule_begin_date',
        'schedule_end_date',
        'ads_scheduling',
        'minimum_age',
        'maximum_age',
        'gender',
        'detailed_targeting',
        'offer_title',
        'offer_details',
        'offer_end_date',
        'upload_unique_codes',
        'image_ad',
        'text_ad',
        'status'
    ];
}
