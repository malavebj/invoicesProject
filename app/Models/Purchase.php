<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function client()
    {
        return $this->belongsTo(User::class);
    }

    public function purchasesInvoiceRegister($invoiceID,$user_id){
        $this->where('invoice_id',null)->where('user_id',$user_id)->update(['invoice_id'=>$invoiceID]);
    }
}

