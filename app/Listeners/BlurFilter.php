<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.10.2018
 * Time: 19:14
 */

namespace App\Listeners;


class BlurFilter
{
    public function handle($image) {
        $image->blur(10);
    }
}