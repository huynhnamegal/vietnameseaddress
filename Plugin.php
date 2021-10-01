<?php namespace EgalHTN\VietnameseAddress;

use Backend;
use System\Classes\PluginBase;

/**
 * Vietnamse Address Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Vietnamse Address',
            'description' => 'Manage vietnamsese address',
            'author'      => 'EgalHTN',
            'icon'        => 'icon-bus'
        ];
    }
}
