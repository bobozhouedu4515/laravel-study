<?php

	namespace App\Console\Commands;

	use App\Models\Module;
	use App\Spatie\Permission\Models\Role;
	use App\User;
	use Illuminate\Console\Command;
	use Spatie\Permission\Models\Permission;

	class HdModule extends Command
	{
		/**
		 * The name and signature of the console command.
		 *
		 * @var string
		 */
		protected $signature = 'Hd_module';

		/**
		 * The console command description.
		 *
		 * @var string
		 */
		protected $description = '命令描述';

		/**
		 * Create a new command instance.
		 *
		 * @return void
		 */
		public function __construct ()
		{
			parent ::__construct ();
		}

		/**
		 * Execute the console command.
		 *
		 * @return mixed
		 */
		public function handle ()
		{


			$modules = glob ('app/Http/Controllers/*');
			//dump ($modules);
			foreach ($modules as $module) {
				if (is_dir ($module . '/System')) {
					$moduleName = basename ($module);
					//	dump($moduleName);
					$config = include $module . '/System/config.php';
					//	dump ($config);
					$permissions = include $module . '/System/permission.php';
					//  dump ($permissions);
					Module ::firstOrNew ([ 'name' => $moduleName ]) -> fill ([
					'title' => $config[ 'app' ],
					'permissions' => $permissions
					]) -> save ();

					foreach ($permissions as $permission) {
						Permission ::firstOrNew ([ 'name' => $moduleName . '-' . $permission[ 'name' ] ]) -> fill ([
						'title' => $permission[ 'title' ],
						'module' => $moduleName
						]) -> save ();
					}
				}
			}
			$role=\Spatie\Permission\Models\Role::where('name','webmaster')->first();
			$permissions=Permission::pluck('name');
			$role->syncPermissions($permissions);
			$user=User::find(1);
			$user->assignRole('webmaster');
//			清除权限缓存
            app()['cache']->forget('spatie.permission.cache');
        //命令执行成功提示信息
            $this->info('permission init successfully');
    }


	}
