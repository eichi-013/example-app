<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    
    // テーブル名がクラス名のスネークケースかつ複数形でない場合はひも付けが必要
    protected $table = 'tweets';

    // 主キーの名前がidではなくtweetIdのように違う場合、モデル側に対応する名前を宣言する必要がある
    // protected $primaryKey = 'tweetId';   ←今回は不要
    public $incrementing = false;
    protected $keyType = 'string';

    // タイムスタンプが不要な場合
    // public $timestamps = false;

    // タイムスタンプの内容を変更したい場合
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    
}
