<?php
/*
Author: Noor Abdi
Company: Drongo Technology
 */

namespace Drongotech\Iplocationmanager\IpInterfaces;

interface IpInterface
{

    public function setIpAddress();
    public function setAccessKey($key);
    public function requestStandardIpLookup();
    public function requestBulkIpLookup();
    public function setBaseUrl($url);
}
