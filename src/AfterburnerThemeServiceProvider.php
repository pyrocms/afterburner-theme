<?php namespace Pyrocms\AfterburnerTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Ui\ControlPanel\Component\Navigation\Event\SortNavigation;
use Pyrocms\AfterburnerTheme\Listener\ApplySorting;

/**
 * Class AfterburnerThemeServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AfterburnerThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The addon listeners.
     *
     * @var array
     */
    protected $listeners = [
        SortNavigation::class => [
            ApplySorting::class,
        ],
    ];

    /**
     * The view overrides.
     *
     * @var array
     */
    protected $overrides = [
        'streams::table.table' => 'pyrocms.theme.afterburner::streams.table.table',
        'streams::table.partials.views' => 'pyrocms.theme.afterburner::streams.table.partials.views',
        'streams::table.partials.filters' => 'pyrocms.theme.afterburner::streams.table.partials.filters',
        'streams::table.partials.heading' => 'pyrocms.theme.afterburner::streams.table.partials.heading',
    ];

}
