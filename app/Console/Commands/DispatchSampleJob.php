<?php

namespace App\Console\Commands;

use App\Jobs\SampleJob;
use Illuminate\Console\Command;

class DispatchSampleJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'moss:dispatch-sample-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatches a sample job';

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
        SampleJob::dispatch();
        $this->info('Job dispatched!');
    }
}
