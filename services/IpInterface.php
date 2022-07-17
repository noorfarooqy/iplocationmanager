<?php
namespace App\IplocationManager\IpInterfaces;
interface IpInterface
{

    public function setIpAddress($ipAddress);
    public function setAccessKey($key);
    public function requestStandardIpLookup();
    public function requestBulkIpLookup();
    public function setApiEndpoint();
}
