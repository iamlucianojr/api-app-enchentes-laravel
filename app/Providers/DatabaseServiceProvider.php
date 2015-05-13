<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->bind('App\Repositories\EventRepositoryInterface', 'App\Repositories\EventRepositoryEloquent');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

	}

}
