<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
      "brand",
      "type",
      "description",
      "alcohol_content",
      "price"
    ]
}
