<?php

namespace Harvest\Formbuilder\Console\Commands;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Console\Command;

class FormBuilderInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'formbuilder:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install formbuilder module default';

    public function handle()
    {
        $defaults = config('formbuilder');

        foreach ($defaults['permissions'] as $permission) {
            $roles = Role::query()->whereIn('name', $permission['roles'])->get();
            $pr = Permission::query()->create($permission);

            foreach ($roles as $role) {
                $role->permissions()->attach($pr->id);
            }
        }

        $this->info('Command finish successful');
    }
}
