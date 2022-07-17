<?php
/*
Author: Noor Abdi
Company: Drongo Technology
 */

namespace Drongotech\Iplocationmanager\IpInterfaces;

interface IpInterface
{

    public function setIpAddress($ipAddress);
    public function setAccessKey($key);
    public function requestStandardIpLookup();
    public function requestBulkIpLookup();
    public function setApiEndpoint();
}
