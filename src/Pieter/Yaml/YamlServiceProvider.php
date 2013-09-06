<?php namespace Pieter\Yaml;

use Illuminate\Support\ServiceProvider;
use Pieter\Yaml\Parser;


class YamlServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;


    public function boot()
    {
        $this->package('pieter/yaml');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['yaml'] = $this->app->share(function($app) {

            $cfg = $app['config']->get('yaml::config.yaml_path');

            return new Parser($cfg);
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('yaml');
	}

}