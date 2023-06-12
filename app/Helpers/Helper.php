<?php

namespace App\Helpers;

use App\Admin\Actions\BatchRestore;
use App\Admin\Actions\Restore;
use App\Admin\Actions\ForceDelete;
use App\Admin\Extensions\DataExporter;
use App\Models\Lang;
use Encore\Admin\Admin;
use Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Helper
{
    public static function money($number)
    {
        return number_format($number, 2, '.', ' ');
    }
}
