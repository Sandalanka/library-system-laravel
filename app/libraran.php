<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class libraran extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;   
}
