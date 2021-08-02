<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
Use Symfony\Component\Process\Process;
use voku\helper\HtmlDomParser;

class HelloWorldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'hello
                             {name}
                             ';
    //   protected $signature = 'halo 
    //                           {name=World} 
    //                           {--uppercase}
    //                           {--age=28}
    //                           ';
                                // operator ? -> opsional tapi ngga punya nilai default -- operator = jika ada nilai defaultnya
                                // argumen (=) harus berurutan, option {} tidak harus berurutan
    // protected $signature = 'hello 
    //                         {name=Putri}
    //                         {--repeat}';
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

   
    // public function handle()
    // {
    //     $name = $this->argument('name');
    //     if($name) {
    //         $this->info('Hello, ' . $name);
    //     }else{
    //         $this->info('Hello World');
    //     }
    // }

    //  public function handle()
    //  {
    //      $name = $this->argument('name');
        
    //      $uppercase = $this->option('uppercase');

    //      if ($uppercase){
    //          $this->info(strtoupper('Hello, ' . $name));
    //      } else{
    //          $this->info('Hello World');
    //      }
    //  }

    // public function handle()
    // {
    //     $this->notify('Title', 'Body');
    // }

    // public function handle()
    // {
    //     $start = now();
    //     sleep(5);
    //     $end = now();

    //     if($start->diffInSeconds($end) > 3){
    //         $this->notify('Selesai', 'Export dokumen telah selesai');
    //     }
    // }

    // public function handle()
    // {
    //     try {$response = \Http::get('http://172.16.22.00');
    //     }
    //     catch (\Illuminate\Http\Client\ConnectionException $exception)
    //     {
    //         $this->line('Website Down');
    //         $this->notify('Website Down', 'http://localhost:8000 down!');
    //     }
    //  }

    //  public function handle()
    //  {
    //      Storage::append('./contoh.txt', now());
    //      \Log::info('testing');
    //  }

    // public function handle()
    // {
    //     $process = new Process(['ls', '-la']);
    //     $process->run();

    //     $this->line($process->getOutput());
    // }

    //  public function handle()
    //  {
    //      $process = new Process(['wkhtmltoimage', 'google.com', 'gambar-google.png']);
    //      $process->run();

    //      $this->line($process->getOutput());
    //  }

    // public function handle()
    //  {
    //      $names = $this->argument('name');
    //      $names = explode(',', $names);
    //      print_r($names);
    //  }

    // public function handle()
    //  {
    //      $html = HtmlDomParser::file_get_html('https://detik.com/');

    //      $elements = $html->find('.berita-utama .media__title');

    //      foreach($elements as $element){
    //          $href = $element->findOne('a')->getAttribute('href');
    //          $text = $element->findOne('a')->text();
    //          $this->line($href);
    //          $this->line($text);
    //      }
    //  }

    // public function handle()
    //  {
    //      $name = $this->argument('name');
    //      $repeat = $this->option('repeat');

    //      $this->line(str_repeat("Hello $name!", $repeat));
    //  }

    //  public function handle()
    //  {
    //      $name = $this->argument('name');
        
    //      $uppercase = $this->option('uppercase');

    //      if ($uppercase){
    //          $this->info(strtoupper('Hello, ' . $name));
    //      } else{
    //          $this->info('Hello World');
    //      }
    //  }
}
