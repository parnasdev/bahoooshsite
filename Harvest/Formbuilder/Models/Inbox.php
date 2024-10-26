<?php

namespace Harvest\Formbuilder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inbox extends Model
{
    protected $guarded = [];

    protected $connection = 'sqlite';

    public static function setDatabaseConnection($uniqueCode)
    {
        config(['database.connections.sqlite' => [
            'driver' => 'sqlite',
            'database' => config('formbuilder.inbox.storage') . $uniqueCode . '.sqlite',
            'prefix' => config('formbuilder.inbox.prefix'),
        ]]);

        DB::reconnect('sqlite');
    }

}
