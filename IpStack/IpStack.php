<?php
/*
Author: Noor Abdi
Company: Drongo Technology
 */

namespace Drongotech\Iplocationmanager\IpStack;

use Drongotech\Iplocationmanager\IpInterfaces\IpInterface;

class IpStack implements IpInterface
{
    private $ip_address;
    private $access_key;
    private $api_endpoint;
    public function setIpAddress($ipAddress)
    {
        $this->ip_address = $ipAddress;
    }
    public function setAccessKey($key)
    {
        $this->access_key = $key;
    }
    public function setApiEndpoint()
    {
        
    }
    public function requestStandardIpLookup()
    {}
    public function requestBulkIpLookup()
    {}
}
