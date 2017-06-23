<?php
/**
 * @author Jonathon Wallen
 * @date 23/6/17
 * @time 2:34 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadPageSectionWysiwyg\Models;

use MonkiiBuilt\LaravelPages\Models\PageSection;

class PageSectionWysiwyg extends PageSection
{
    protected static $singleTableType = 'wysiwyg';

    public function getDecorator()
    {
        $decoratorName = \MonkiiBuilt\LaravelPageSectionsText\PageSectionWysiwygDecorator::class;
        return new $decoratorName($this);
    }
}