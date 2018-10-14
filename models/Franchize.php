<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 *
 *
 */
class Franchize extends Model
{
    public $cat_id;
    public $cat_id_parent;
    public $cat_name;
    public $cat_name_form2;
    public $cat_is_retail;
    public $cat_seo_descr;
    public $cat_link;
    public $cat_wp7_icon;
    public $cat_android_icon;
    public $cat_ios_icon;
    public $cat_son;

    public $fr_logo;
    public $fr_id;
    public $fr_name;
    public $fr_invest;
    public $fr_shops_count;
    public $fr_cat_name;

    /**
     * Возвращает каталог франшиз
     * @return array
     */
    public static function get_cats () {
        return json_decode(file_get_contents("https://www.beboss.ru/api/cats/0?json"), true);
    }

    /**
     * Возвращает витрину франшиз
     * @return array
     */
    public static function get_frs () {
        return (json_decode(file_get_contents("https://www.beboss.ru/api/main?json"), true));
    }


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
        ];
    }

}
