# Vietnamese address plugin
This plugin will show all Vietnamses provinces, districts and wards. The data from 
## Structured
All data of provinces, district and wards that be saved in json file that exists in assets folder of plugin.

The version of plugin will be updated when data from https://danhmuchanhchinh.gso.gov.vn/ updated.

The data of provinces will be saved in assets/provinces.json: 

``"01": {
        "name": "Hà Nội",
        "slug": "ha-noi",
        "type": "thanh-pho",
        "name_with_type": "Thành phố Hà Nội",
        "code": "01"
    },
    "79": {
        "name": "Hồ Chí Minh",
        "slug": "ho-chi-minh",
        "type": "thanh-pho",
        "name_with_type": "Thành phố Hồ Chí Minh",
        "code": "79"
    },``
    
The data of districts will be saved in assets/districts/**{province_code}**.json: 

``"777": {
        "name": "Bình Tân",
        "type": "quan",
        "slug": "binh-tan",
        "name_with_type": "Quận Bình Tân",
        "path": "Bình Tân, Hồ Chí Minh",
        "path_with_type": "Quận Bình Tân, Thành phố Hồ Chí Minh",
        "code": "777",
        "parent_code": "79"
    },
    "778": {
        "name": "7",
        "type": "quan",
        "slug": "7",
        "name_with_type": "Quận 7",
        "path": "7, Hồ Chí Minh",
        "path_with_type": "Quận 7, Thành phố Hồ Chí Minh",
        "code": "778",
        "parent_code": "79"
    },``
    
The data of wards will be saved in assets/wards/**{district_code}**.json: 

``"27481": {
        "name": "Tân Quy",
        "type": "phuong",
        "slug": "tan-quy",
        "name_with_type": "Phường Tân Quy",
        "path": "Tân Quy, 7, Hồ Chí Minh",
        "path_with_type": "Phường Tân Quy, Quận 7, Thành phố Hồ Chí Minh",
        "code": "27481",
        "parent_code": "778"
    },
    "27484": {
        "name": "Phú Thuận",
        "type": "phuong",
        "slug": "phu-thuan",
        "name_with_type": "Phường Phú Thuận",
        "path": "Phú Thuận, 7, Hồ Chí Minh",
        "path_with_type": "Phường Phú Thuận, Quận 7, Thành phố Hồ Chí Minh",
        "code": "27484",
        "parent_code": "778"
    },``

### How to use
I provided three class in Classes namespace included Provice class, District class and Ward Class.

For example, to get list of provinces

`` $provinces = \EgalHTN\VietnameseAddress\Classes\Provice::getList(); ``

To get list of districts that depends on the above Provice, we can use

`` $districts = \EgalHTN\VietnameseAddress\Classes\District::getList($province_code) ``

which **$province_code** is a value of 'code' colum in json file.

To get list of wards that depends on the above Ward, we can use

`` $districts = \EgalHTN\VietnameseAddress\Classes\Ward::getList($district_code) ``

### References:
**Tổng cục Thống Kê**: https://danhmuchanhchinh.gso.gov.vn/

**Export data plugin**: https://github.com/madnh/hanhchinhvn