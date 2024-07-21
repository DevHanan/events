<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $table = 'organizations';
    protected $fillable = array(
    'name',
    'organization_Sn',
    'commercial_Name' , 
    'name_tag',
    'commercial_rgistryID ' ,
    'commercial_registry_expiration',
    'commercial_registry_file',
    'tax_registryID' ,
    'tax_registry_expiration', 
    'email' ,
    'establish_date',
    'zip',

    'Phone1' , 
    'Phone2' , 
    'WhatsApp' ,
    'head_office_address'   ,
    'website' ,
    'city_id' , 
    'nationality_country_Id' ,
    'org_classification_id' ,
    'legal_form_id',
    'organization_parent_Sn',
    'manager_id',
    'iban' ,
    'swift_code',
    'bank' , 
    'account_number'
    );
}
