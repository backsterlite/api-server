<?php

namespace App\Console\Commands;

use App\Models\Parser\CoreStrategy;
use App\Models\Parser\JsonStrategy;
use App\Models\Parser\ParserManager;
use App\Models\Parser\XMLStrategy;
use App\Models\Parser\YAMLStrategy;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;


class parseFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse from files to DB';

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

        $items = new \DirectoryIterator(public_path('Files/'));
            foreach ($items as $item)
            {
                if ($item->getExtension())
                {
                    $result = (new ParserManager($item->getPath() .'/'. $item->getFilename(),
                        $item->getExtension()))->handle();
                }else{
                    continue;
                }

            }
            echo ($result) ? 'Information added successful' . PHP_EOL : 'Something went wrong' . PHP_EOL;


    }
}
