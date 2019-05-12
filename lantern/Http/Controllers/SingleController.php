<?php

namespace Lantern\Http\Controllers;

use \Lantern\Models\Post;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;

class SingleController extends BaseController
{
    public function show($post_name)
    {
        global $post;
        $posts = $this->wpQuery($post_name);

        if ($posts) {
            foreach ($posts as $post) {
                setup_postdata($post);
                return View::make('single', [
                    'title'   => get_the_title(),
                    'content' => get_the_content(),
                ]);
                reset_postdata();
            }
        }
    }

    private function eloquentQuery($post_name)
    {
        return Post::where('post_name', $post_name)
                    ->published()
                    ->latest()
                    ->get()
                    ->toArray();
    }

    private function wpQuery($post_name)
    {
        return get_posts([
            'name' => $post_name,
        ]);
    }
}
