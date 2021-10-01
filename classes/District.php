<?php namespace EgalHTN\VietnameseAddress\Classes;

class District  
{
    public static function getList($province_code)
    {
        if ($province_code == '') {
            return [];
        }else{
            $rs = [];
            $districts = json_decode(file_get_contents(plugins_path('egalhtn/vietnameseaddress/assets/districts/' . $province_code . '.json')),true);
            foreach ($districts as $value) {
                $rs[$value['code']] =  $value['name_with_type'];
            }
            return $rs;
        }
    }
}
