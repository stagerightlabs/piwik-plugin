<?php namespace SRLabs\Piwik\Components;

use Cms\Classes\ComponentBase;
use SRLabs\Piwik\Models\Settings;

class Piwik extends ComponentBase
{
	public function componentDetails()
	{
		return [
			'name' => 'Piwik Free/Libre Analytics Tracker',
			'description' => 'Places a Piwik tracking code.'
		];
	}

	public function trackerUrl()
	{
		return Settings::get('tracker_url');
	}

	public function siteId()
	{
		return Settings::get('site_id');
	}
}