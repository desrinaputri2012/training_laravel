<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PalindromeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'palindrome
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

    /**
     * Execute the console command.
     *
     * @return int
     */

    /** ----------- 1 ------------- */
    // public function handle()
    // {
    //     function Palindrome($string){ 
    //         if (strrev($string) == $string){ 
    //             return 1; 
    //         }
    //         else{
    //             return 0;
    //         }
    //     } 
    //     $word1 = "Saya ingin pergi ke pasar";
    //     if(Palindrome($word1)){ 
    //         echo "Is $word1 Palindrome : Yes"; 
    //     }
    //     else { 
    //     echo "Is $word1 Palindrome : No"; 
    //     }
    // }

    /** ----------- 2 ------------- */
    // public function handle()
    // {
    //     function Palindrome($string){ 
    //         if (strrev($string) == $string){ 
    //             return 1; 
    //         }
    //         else{
    //             return 0;
    //         }
    //     } 
    //     $word1 = "Kasur ini rusak";
    //     if(Palindrome($word1)){ 
    //         echo "Is $word1 Palindrome : Yes"; 
    //     }
    //     else { 
    //         echo "Is  $word1 Palindrome : No"; 
    //     }
    // }

    /** ----------- 3 ------------- */
    // public function handle()
    // {
    //     function Palindrome($string){ 
    //         if (strrev($string) == $string){ 
    //             return 1; 
    //         }
    //         else{
    //             return 0;
    //         }
    //     } 
    //     $word1 = "Ibu Ratna antar ubi";
    //     if(Palindrome($word1)){ 
    //         echo "Is $word1 Palindrome : Yes"; 
    //     }
    //     else { 
    //         echo "Is  $word1 Palindrome : No"; 
    //     }
    // }

    /** ----------- 4 ------------- */
    public function handle()
    {
        function Palindrome($string){ 
            if (strrev($string) == $string){ 
                return 1; 
            }
            else{
                return 0;
            }
        } 
        $word1 = "Aku suka rajawali, bapak. Apabila wajar, aku suka";
        if(Palindrome($word1)){ 
            echo "Is $word1 Palindrome : Yes"; 
        }
        else { 
            echo "Is  $word1 Palindrome : No"; 
        }
    }
}
