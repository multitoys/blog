<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.10.2018
 * Time: 19:20
 */

namespace App\Listeners;


class SharpenFilter
{
    public function handle($image) {
        $image->sharpen(50);
    }
}