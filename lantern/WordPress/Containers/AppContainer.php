<?php

namespace Lantern\WordPress\Containers;

use \Carbon_Fields\Container;
use \Carbon_Fields\Field;

class AppContainer
{
    public function __construct()
    {
        $this->fieldsetA()
             ->fieldsetB();
    }

    public function fieldsetA()
    {
        Container::make('post_meta', __('Hero Content', 'lantern'))
                ->where('post_type', '=', 'app')

            ->add_fields([
                Field::make('html', 'admin_description')
                    ->set_html(__('<p>This first set of fields controls the content of the green hero image (top).</p>', 'lantern')),

                Field::make('text', 'title', 'Heading'),
                Field::make('text', 'subtitle', 'Subheading'),
                Field::make('rich_text', 'disclaimer', 'Disclaimer')
            ]);

        return $this;
    }

    public function fieldsetB()
    {
        Container::make('post_meta', __('Introduction', 'lantern'))
                ->where('post_type', '=', 'app')

            ->add_tab(__('General', 'lantern'), [
                Field::make('text', 'heading', 'Heading'),
                Field::make('rich_text', 'content', 'Content')
            ])

            ->add_tab(__('List Item One', 'lantern'), [
                Field::make('text', 'list_item_one', __('List Item One', 'lantern')),
            ])

            ->add_tab(__('List Item Two', 'lantern'), [
                Field::make('text', 'list_item_two', __('List Item Two', 'lantern')),
            ])

            ->add_tab(__('List Item Three', 'lantern'), [
                Field::make('text', 'list_item_three', __('List Item Three', 'lantern')),
            ]);

        return $this;
    }
}
