<?php
namespace Lantern\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

use \Lantern\Models\Post;

class IndexController extends BaseController
{
    public function show()
    {
        $posts = Post::with(['author', 'meta']);

        $data = (object)[
            'app' => (object) [
                'title' => 'Lantern!',
                'posts' => $posts->published()->get(),
            ],
        ];

        return View::make('index', [
            'app' => $data->app
        ]);
    }
}
