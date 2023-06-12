<?php

namespace App\Console\Commands;

use App\Models\Contribution;
use App\Models\Credit;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Console\Command;

class Credits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'credits:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Contribution::check();
        Credit::notify();
        Notification::send();
    }
}
