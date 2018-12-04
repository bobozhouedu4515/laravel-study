<?php

namespace App\Observers;

use App\Models\Config;

class ConfigObserver
{
	public function created ()
	{
	  $this->saveConfigToCache ();
	}

	public function updated ()
	{
	$this->saveConfigToCache ();
	}

	public function saveConfigToCache ()
	{

		\Cache::forever ('config_cache',Config::pluck('data','name'));
	}

}
