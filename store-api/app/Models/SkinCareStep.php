<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkinCareStep extends Model
{
    public function stepFirstProduct()
    {
        return $this->belongsTo(Product::class,'step_first');
    }

    public function stepSecondProduct()
    {
        return $this->belongsTo(Product::class,'step_second');
    }

    public function stepThirdProduct()
    {
        return $this->belongsTo(Product::class,'third_second');
    }
}
