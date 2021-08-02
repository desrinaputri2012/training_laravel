<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StringTransformationCommand extends Command
{
    protected $signature = 'hello-world
                            {text=I aM CrAzY TeXT} 
                            {--lowercase}
                            {--uppercase}
                            {--ucwords}
                            ';
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

    /** ----------- String Transformation - Lowercase ------------- */
    // public function handle()
    //   {
    //       $text = $this->argument('text');
        
    //   $lowercase = $this->option('lowercase');

    //           $this->info(strtolower($text));
    //   }


    /** ----------- String Transformation - Uppercase ------------- */
    // public function handle()
    //  {
    //      $text = $this->argument('text');
       
    //      $uppercase = $this->option('uppercase');

    //          $this->info(strtoupper($text));
    //  }

    /** ----------- String Transformation - Camel Case ------------- */
    // public function handle()
    // {
    //     $text = $this->argument('text');
       
    //     $ucwords = $this->option('ucwords');

    //         $this->info(ucwords($text));
    // }
     
}
