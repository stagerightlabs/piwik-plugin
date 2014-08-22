<?php namespace SRLabs\Piwik;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Piwik Free/Libre Analytics',
            'description' => 'Provides a Piwik tracking script. Inspired by RainLab\GoogleAnalytics.',
            'author' => 'Stage Right Labs',
            'icon' => 'icon-bar-chart-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'SRLabs\Piwik\Components\Piwik' => 'piwik'
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label' => 'Piwik Free/Libre Analytics',
                'icon' => 'icon-bar-chart-o',
                'description' => 'Configure Piwik tracking options.',
                'class' => 'SRLabs\Piwik\Models\Settings',
                'order' => 600
            ]
        ];
    }
}