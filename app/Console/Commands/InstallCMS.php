<?php

namespace App\Console\Commands;

use App\Console\InstallDefualtCheck;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class InstallCMS extends Command
{
    use InstallDefualtCheck;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install defaults your cms';

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
        $defaults = config('defaults');

        $dbs = [
            array('name' => 'Role' , 'module'=> null),
            array('name' => 'Permission' , 'module'=> null),
            array('name' => 'Setting' , 'module'=> null),
            array('name' => 'User' , 'module'=> null),
        ];

        $keys = array_keys($defaults['settings']);

        $conditions = [
            null,
            null,
            ['condition' => 'whereIn' , 'key' => 'name' , 'value' => $keys],
            ['condition' => 'where' , 'key' => 'role_id' , 'value' => 1]
        ];

        $res = $this->checking($dbs , $conditions);

        if ($res['User']) {
            $username = $this->ask('What is your username?');
            $password = $this->ask('What is your password?');
        }
        try {

            if ($res['Role']) {
                foreach ($defaults['roles'] as $role) {
                    Role::query()->create($role);
                }

                $this->info('Role create Successful');
            }

            if ($res['Permission']) {
                foreach ($defaults['permissions'] as $permission) {
                    $roles = Role::query()->whereIn('name', $permission['roles'])->get();
                    $pr = Permission::query()->create($permission);

                    foreach ($roles as $role) {
                        $role->permissions()->attach($pr->id);
                    }
                }
            }

            if ($res['Setting']) {
                foreach ($defaults['settings'] as $key => $setting) {
                    Setting::query()->create([
                        'name' => $key,
                        'value' => $setting
                    ]);
                }

                $this->info('setting generate Successful');
            }

            if ($res['User']) {
                User::query()->create([
                    'role_id' => 1,
                    'username' => $username,
                    'password' => $password,
                    'email_verified_at' => Carbon::now(),
                    'phone_verified_at' => Carbon::now(),
                ]);

                $this->info('Admin create successful');
            }
            $this->info('Command finish successful');
        } catch (\Exception $exception){
            $this->error("You Have Error: $exception");
        }
    }
}
