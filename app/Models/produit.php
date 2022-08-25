<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $table='produits';
    protected $fillable=['name'];
    
    
    public function category(){
        return $this->belongsTo(category::class);
    }
    public static function boot()
    {
        parent::boot();

        self::creating(function ($produit) {
            $produit->user()->associate(auth()->user()->id);
            $produit->category()->associate(request()->category); 
        });
        return redirect()->route('register')->with('success', 'Votre post a ete cree');

        self::updating(function ($produit) {
            $produit->category()->associate(request()->category);
        });
    }

}
