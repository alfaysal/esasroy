<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class BusinessAdmin extends Model
{
    use HasRoles;
}
