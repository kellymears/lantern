<?php

namespace Lantern\Blocks;

use \BlockCompose\Composer;
use \BlockCompose\Attribute;
use \BlockCompose\Traits\Compose;

class Header extends Composer
{
    public $name = 'header'; // block name
    public $namespace = 'lantern'; // block namespace
    public $style = 'lantern/blocks'; // registered style
    public $editor_script = 'lantern/blocks'; // registered editor script

    // override view
    public $view = 'blocks.header';

    public function attributes()
    {
        return [
            new Attribute('heading', 'string'),
            new Attribute('mediaID', 'number'),
            new Attribute('mediaURL', 'string'),
        ];
    }

    /**
     * Serve data to view
     *
     * @return array associative
     */
    public function with($data)
    {
        return $data;
    }

    /**
     * Manipulate source block markup
     */
    public function withContent($content)
    {
        return $content;
    }

    /**
     * Manipulate source block data
     */
    public function withData($block, $source)
    {

        return $block;
    }

    use Compose;
}
