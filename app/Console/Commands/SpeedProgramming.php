<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class SpeedProgramming extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'speed {task_number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $task = $this->argument('task_number');

        $this->line('-----------------------------------------------------------------');
        $this->line('-------------10pearls Speed Programming Competition--------------');
        $this->line('-----------------------------------------------------------------');
        $this->line('Executing task '.$task.'...');
        $taskMethod = 'execute'.$task;
        $this->$taskMethod();
    }


    /**
     *
     * Task 1
     */
    private function execute1()
    {
        $this->info('task 1');
$name =        $this->ask('whats your name');

    $this ->info('your name is'. $name);
    }


    /**
     *
     * Task 2
     */
    private function execute2()
    {
        $this->info('task 2');
        $name =        $this->ask('whats your name');

        $this ->info('your name is'. $name);
    }

}