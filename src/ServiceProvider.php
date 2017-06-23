<?php
/**
 * @author Jonathon Wallen
 * @date 23/6/17
 * @time 2:33 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadPageSectionWysiwyg;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use MonkiiBuilt\LaravelPages\Models\PageSection;
use MonkiiBuilt\LaravelPageSectionsWysiwyg\Models\PageSectionWysiwyg;

class ServiceProvider extends BaseServiceProvider
{
    protected $defer = false;

    public function boot(\MonkiiBuilt\LaravelAdministrator\PackageRegistry $packageRegistry)
    {
        $packageRegistry->registerPackage('MonkiiBuilt\LadPageSectionWysiwyg');

        PageSection::addSingleTableSubclass(PageSectionText::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'page-sections-wysiwyg');

    }
}