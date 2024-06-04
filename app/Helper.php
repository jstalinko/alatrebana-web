<?php
namespace App;

class Helper
{
    public static function websetting($key)
    {
        $setting = \App\Models\WebSetting::where('active', true)->first();
        return $setting->$key;
    }

    public static function harga($price):string
    {
        if($price !== 0){
        return 'Rp. '.number_format($price,0,',','.');
        }else{
            return 'Hubungi Kami';
        }
    }

    public static function waNumber(): string
    {
        $setting = \App\Models\WebSetting::where('active', true)->first();
        $phone = $setting->phone;
        if(preg_match('/^0|^\+62/', $phone)){
            $phone = preg_replace('/^0/', '62', $phone);
        }

        return $phone;
    }

    public static function orderWaButton(string $productLink): string
    {
        return 'https://wa.me/'.self::waNumber().'?text='.urlencode('Halo, saya tertarik dengan produk ini ! '.$productLink);
    }

    public static function imageUrl(string $path): string
    {
        if(preg_match('/^http/', $path)){
            return $path;
        }else{
            return asset('storage/'.$path);
        }
    }



}
