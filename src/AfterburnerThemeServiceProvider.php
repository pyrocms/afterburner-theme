<?php

namespace Pyrocms\AfterburnerTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class AfterburnerThemeServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AfterburnerThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The view overrides.
     *
     * @var array
     */
    public $overrides = [
        'streams::table.table' => 'pyrocms.theme.afterburner::streams.table.table',
        'streams::table.partials.views' => 'pyrocms.theme.afterburner::streams.table.partials.views',
        'streams::table.partials.filters' => 'pyrocms.theme.afterburner::streams.table.partials.filters',
        'streams::table.partials.heading' => 'pyrocms.theme.afterburner::streams.table.partials.heading',
    ];

    public function register()
    {
        dd('# code...');
    }
}
