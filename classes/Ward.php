<?php namespace EgalHTN\VietnameseAddress\Classes;

class Ward  
{
    public static function getList($district_code)
    {
        if ($district_code == '') {
            return [];
        }else{
            $rs = [];
            $wards = json_decode(file_get_contents(plugins_path('egalhtn/vietnameseaddress/assets/wards/' . $district_code . '.json')),true);
            foreach ($wards as $value) {
                $rs[$value['code']] =  $value['name_with_type'];
            }
            return $rs;
        }
    }
}
