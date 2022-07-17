<?php
namespace Drongotech\Iplocationmanager\Models;

use Illuminate\Database\Eloquent\Model;

class IpLogModel extends Model
{
    protected $table = "ip_log";
    public $guarded = [];

    private $error = null;
    public function createRecord($data)
    {
        try {
            $record = $this->create($data);
            return $record;
        } catch (\Throwable$th) {
            $this->error = $th->getMessage();
            return false;
        }
    }

    public function getMessage()
    {
        return $this->error;
    }

}
