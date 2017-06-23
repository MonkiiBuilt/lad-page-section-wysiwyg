<?php
/**
 * @author Jonathon Wallen
 * @date 23/6/17
 * @time 2:34 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadPageSectionWysiwyg;

use MonkiiBuilt\LaravelPages\PageSectionDecoratorAbstract as PageSectionDecoratorAbstract;

class Decorator extends PageSectionDecoratorAbstract
{
    public function renderForm() {
        return view('page-section-wysiwyg::wysiwyg', ['section' => $this->wrapped]);
    }
}