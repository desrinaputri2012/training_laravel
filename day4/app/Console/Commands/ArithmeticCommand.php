<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ArithmeticCommand extends Command
{
    protected $signature = 'aritmatika
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

    /** ----------- Arithmetic - Sum ------------- */
    // public function handle()
    // {
    //     $value = array(1,4,5,2,3);
       
    //     $this->info(array_sum($value));

    // }

    /** ----------- Arithmetic - Multiply ------------- */
    // public function handle()
    // {
    //     $value = array(3,5,8);
       
    //     for($i = 0; $i < count($value); $i++) {
    //         $result[] = $value[$i] * $value[$i];
    //     }

    //     echo "sum(result) = " . array_sum($result) . "\n";

    // }

    /** ----------- Arithmetic - Divide ------------- */
    // public function handle()
    // {
    //     $value = array(100,5,2);
       
    //     for($i = 0; $i < count($value); $i++) {
    //         $result[] = $value[$i] / $value[$i];
    //     }

    //     echo "sum(result) = " . array_sum($result) . "\n";

    // }
     
}
