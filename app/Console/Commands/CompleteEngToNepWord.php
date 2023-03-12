<?php

namespace App\Console\Commands;

use App\Models\Setting\Nepalicontent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CompleteEngToNepWord extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'complete:englishtonepali';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store The words of lang file into database nepali content';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $array = require resource_path('lang/ne/lang.php');
        foreach ($array as $key => $item) {
            $nepaliEngContent = Nepalicontent::where('english_string', $key)->first();
            if (!$nepaliEngContent)
                Nepalicontent::create(['english_string' => $key, 'nepali_string' => $item]);
        }
        Log::info('Succesfully imported English To Nepali.');
    }
}
