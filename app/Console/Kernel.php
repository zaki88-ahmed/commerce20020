<?php

namespace App\Console;

use App\Console\Commands\SendingMailEveryMinute;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
//         $schedule->command('inspire')->hourly();
//        $schedule->command('queue:work')->everyMinute(1);
//        $schedule->command('queue:restart')->everyMinute(5);
//        $schedule->command('send:email')->everyMinute();
        $schedule->command('print:hello')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
