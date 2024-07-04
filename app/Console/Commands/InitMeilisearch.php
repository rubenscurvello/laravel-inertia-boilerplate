<?php

namespace App\Console\Commands;

use App\Models\Admission;
use App\Models\MadrasahResult;
use App\Models\Student;
use App\Models\SupportConversationMessage;
use App\Models\User;
use Illuminate\Console\Command;

class InitMeilisearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meilisearch:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inits Meilisearch indexes data';

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
        Student::makeAllSearchable();
        MadrasahResult::makeAllSearchable();
        SupportConversationMessage::makeAllSearchable();
        Admission::makeAllSearchable();
        User::makeAllSearchable();
    }
}
