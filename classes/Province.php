<?php namespace EgalHTN\VietnameseAddress\Classes;

class Province  
{
    /*
     * Province data structured
     * ['name', 'slug', 'type', 'name_with_type', 'code'] 
     */

    /**
     * @return array Get array of provinces from json file
     */
    private static function getProvincesFromFile() : array
    {
        return json_decode(file_get_contents(plugins_path('egalhtn/vietnameseaddress/assets/provinces.json')),true);
    }

    /**
     * @return array getList of provinces
     */
    public static function getList() : array
    {
        $rs = [];
        $provinces = self::getProvincesFromFile();
        foreach ($provinces as $value) {
            $rs[$value['code']] =  $value['name_with_type'];
        }
        return $rs;
    }

    /**
     * Get province content by using code
     * To get data we should use $province['name']
     * @param string $code
     * @return array 
     */
    public static function getContent($code) : array
    {
        $provinces = self::getProvincesFromFile();
        return $provinces[$code];
    }
}
