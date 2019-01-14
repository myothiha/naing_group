<?php
namespace App\Util\Uploader;

use Carbon\Carbon;

class Image
{
	public static function upload($uploadImage, $path)
	{	
		$now = Carbon::now();
        $year = $now->year;
        $month = $now->month;
        $destinationPath = public_path() . $path . "{$year}/{$month}/";
        $coderand=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,6);

        $imageName = $now->timestamp . '_' . $coderand . '.' . $uploadImage->getClientOriginalExtension();
        $imagePath = $path . "{$year}/{$month}/{$imageName}";

        $uploadImage->move($destinationPath, $imageName);

        return $imagePath;
	}
}