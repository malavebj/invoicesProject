<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tax',
        'amount'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
   
    public function client()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
    public function scopePurchasesWithoutInvoice(){
        return Purchase::where('invoice_id',null)->with('product')->get();
    }

    public function amountsByInvoice($purchasesWithoutInvoice){
        foreach($purchasesWithoutInvoice as $purchase){
            $user_id=$purchase->user_id;
            $taxs=($purchase->product->price)*($purchase->product->tax/100);
            $totalPrice=($purchase->product->price)+$taxs;
            $amounts[$user_id]= (empty($amounts[$user_id]) ? 0 : $amounts[$user_id]) + $totalPrice;
            $tax[$user_id]=(empty($tax[$user_id]) ? 0 : $tax[$user_id])+$taxs;
        }    
        return [$amounts,$tax];
    } 

    public function invoiceRegister($invoiceAttributes){
        $purchase=new Purchase();
        foreach($invoiceAttributes[0] as $key=>$value){
            $invoiceID=$this->create([
                'user_id'=>$key,
                'amount'=>$value,
                'tax'=>$invoiceAttributes[1][$key]
            ])->id;
            $purchase->purchasesInvoiceRegister($invoiceID,$key);
        }
    } 

    
}
