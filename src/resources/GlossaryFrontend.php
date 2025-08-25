<?php

namespace codemonauts\glossary\resources;

use craft\web\AssetBundle;

class GlossaryFrontend extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init(): void
    {
        $this->sourcePath = '@codemonauts/glossary/resources';

        $this->js = [
            /*'js/Glossary.js',*/
            'js/Popover-Hover.js'
        ];

        $this->css = [
            /*'css/tippy.css',*/
            'css/light.css',
            'css/popover.css'
        ];

        parent::init();
    }
}
