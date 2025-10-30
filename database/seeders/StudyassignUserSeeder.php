<?php

namespace ModuleStudyassign\Seeders;

use Module\System\Models\User;
use Illuminate\Database\Seeder;

class StudyassignUserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        if ($superadmin = User::firstWhere('email', config('auth.admin_email'))) {
            $superadmin->attachAbilities('studysign-superadmin');
        }
    }
}
