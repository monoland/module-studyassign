<?php

namespace ModuleStudyassign\Seeders;

use App\Imports\BaseImport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

class StudyassignBaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run($mode = 'install'): void
    {
        $path = base_path(
            'modules' . DIRECTORY_SEPARATOR .
                'module-studyassign' . DIRECTORY_SEPARATOR .
                'database' . DIRECTORY_SEPARATOR .
                'masters' . DIRECTORY_SEPARATOR .
                'base-seeder.xlsx'
        );

        if (File::exists($path)) {
            Excel::import(new BaseImport($this->command, $mode), $path);
        }
    }
}
