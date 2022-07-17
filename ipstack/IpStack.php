<?php
/*
Author: Noor Abdi
Company: Drongo Technology
 */

namespace Drongotech\Iplocationmanager\IpStack;

use Drongotech\Iplocationmanager\IpInterfaces\IpInterface;
use Drongotech\Iplocationmanager\Models\IpLogModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class IpStack implements IpInterface
{
    private $ip_address;
    private $access_key;
    private $api_endpoint;
    private $error_message;
    public function setIpAddress()
    {
        $this->ip_address = env('APP_REMOTE_IP', true) ? Request::ip() : trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
        Log::info('checking ip for ' . $this->ip_address);
    }
    public function setAccessKey($key)
    {
        $this->access_key = $key;
    }

    public function setBaseUrl($base_url)
    {
        $this->api_endpoint = $base_url;
    }
    public function requestStandardIpLookup()
    {
        try {
            $url = $this->api_endpoint . $this->ip_address . "?access_key=" . $this->access_key;
            $response = Http::get($url);
            Log::info($url);
            if ($response->ok()) {
                session($this->ip_address, json_decode($response->body(), true));
                return json_decode($response->body(), true);
            } else {
                $this->error_message = $response->body();
                return false;
            }

        } catch (\Throwable$th) {
            $this->error_message = $th->getMessage();
            return false;
        }
    }
    public function saveToDatabase($data)
    {
        $logModel = new IpLogModel();
        $data['location'] = json_encode($data['location'] ?? []);
        $data['time_zone'] = json_encode($data['time_zone'] ?? []);
        $data['currency'] = json_encode($data['currency'] ?? []);
        $data['connection'] = json_encode($data['connection'] ?? []);
        $saved = $logModel->createRecord($data);
        $this->error_message = $logModel->getMessage();
        return $saved;
    }
    public function requestBulkIpLookup()
    {}

    public function getMessage()
    {
        return $this->error_message;
    }
}
