<?php
namespace Lantern\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

use \Lantern\Models\Post;

class ArchiveController extends BaseController
{
    public function show($category)
    {
        $posts = Post::with(['terms', 'meta']);

        $data = (object) [
            'title' => 'Lantern!',
            'posts' => $posts->published()->get(),
        ];

        return View::make('archive', [
            'app' => $data->app
        ]);
    }
}
