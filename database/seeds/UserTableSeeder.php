<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    public function run(){

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123123123')
        ]);
        User::create([
            'name'=>'ShopManager',
            'email'=>'shop_manager@shop.vn',
            'password'=>Hash::make('shop_manager')
        ]);
        User::create([
            'name'=>'ArticleManager',
            'email'=>'article_manager@shop.vn',
            'password'=>Hash::make('article_manager')
        ]);
    }
}
