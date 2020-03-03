<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Intro extends Model
{
    //$fillable - ホワイトリスト_複数代入時に代入を許可する属性を配列で設定
    //プロフィール画面で名前、登録日、自己紹介内容、更新日、サイト、誕生日が欲しいため
    protected $fillable = [
        'name',
        'content',
        'web',
        'birth'
    ];
}
