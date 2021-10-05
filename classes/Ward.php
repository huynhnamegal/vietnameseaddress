<?php namespace EgalHTN\VietnameseAddress\Classes;

class Ward  
{
    /*
     * Ward data structured
     * ['name', 'slug', 'type', 'name_with_type', 'code', 'path', 'path_with_type', 'code', 'parent_code'] 
     */
    private static function getWardsFromFile($district_code)
    {
        if ($district_code == '') {
            return null;
        }
        return json_decode(file_get_contents(plugins_path('masent/address/assets/wards/' . $district_code . '.json')),true);
    }

    /**
     * Get list of wards based on district code that suitable with dropdown options
     * @param string $district_code
     * @return array
     */
    public static function getList($district_code)
    {
        if ($district_code == '') {
            return [];
        }else{
            $rs = [];
            $wards = self::getWardsFromFile($district_code);
            foreach ($wards as $value) {
                $rs[$value['code']] =  $value['name_with_type'];
            }
            return $rs;
        }
    }

    /**
     * Get ward content by using code
     * To get data we should use $ward['name']
     * @param string $district_code
     * @param string $ward_code
     * @return array 
     */
    public static function getContent($district_code, $ward_code)
    {
        if ($district_code == 763) {
            $code = 769;
        } else {
            $code = $district_code;
        }
        $wards = self::getWardsFromFile($code);
        return $wards[$ward_code];
    }
}
