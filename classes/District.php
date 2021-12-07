<?php namespace EgalHTN\VietnameseAddress\Classes;

class District  
{
    /*
     * District data structured
     * ['name', 'slug', 'type', 'name_with_type', 'code', 'path', 'path_with_type', 'code', 'parent_code'] 
     */

    /**
     * Get list of district based on province code
     * @param string $province_code
     * @return array
     */
    private static function getDistrictsFromFile($province_code)
    {
        if ($province_code == '') {
            return null;
        }
        return json_decode(file_get_contents(plugins_path('egalhtn/vietnameseaddress/assets/districts/' . $province_code . '.json')),true);
    }

    /**
     * Get list of districts based on province code that suitable with dropdown options
     * @param string $province code
     * @return array
     */
    public static function getList($province_code) : array
    {
        if ($province_code == '') {
            return [];
        }else{
            $rs = [];
            $districts = self::getDistrictsFromFile($province_code);
            foreach ($districts as $value) {
                $rs[$value['code']] =  $value['name_with_type'];
            }
            return $rs;
        }
    }

    /**
     * Get district content by using code
     * To get data we should use $district['name']
     * @param string $province_code
     * @param string $district_code
     * @return array 
     */
    public static function getContent($province_code, $district_code)
    {
        if ($district_code == 763) {
            $code = 769;
        } else {
            $code = $district_code;
        }  
        $districts = self::getDistrictsFromFile($province_code);
        return $districts[$code];
    }
}
