## Drongotech/iplocationmanager ![enter image description here](https://img.shields.io/badge/Version-1.0.7-brightgreen)

IP location manager uses [Ipstack](https://ipstack.com/)  to do a look up of the client ip address. The data include :-

ip:  "xxx.xxx.xxx.xxx"
type:  "ipv4"
continent_code:  "AF"
continent_name:  "Africa"
country_code:  "KE"
country_name:  "Kenya"
region_code:  "30"
region_name:  "Nairobi Area"
city:  "Nairobi"
zip:  00001
...... [sea more](https://ipstack.com/)

To install :

`composer require drongotech/iplocationmanager`
`php artisan vendor:publish --tag=dt-config`
`php artisan vendor:publish --tag=dt-migrations`
`php artisan migrate`

