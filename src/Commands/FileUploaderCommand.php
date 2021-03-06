<?php

namespace Ahmedtaha\FileUploader\Commands;

use Illuminate\Console\Command;

class FileUploaderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'file:upload';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'a PHP class which simplifies file uploading';

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
     * @return int
     */
    public function handle()
    {
    }
}
