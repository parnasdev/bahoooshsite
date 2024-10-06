<?php

namespace App\Http\Controllers\Panel;

use App\Enums\CategoryType;
use App\Enums\PostType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function logout()
    {
        auth()->logout();

        return redirect(route('panel.login'));
    }

    public function getPosts($post_type, $ignore = null)
    {
        $q = request('q') ?? '';
        $posts = match ($post_type) {
            'page' => Page::search($q)
                ->whereNotIn('id', [$ignore])
                ->get()->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'text' => $item->title,
                    ];
                }),
            default => Post::search($q)
                ->whereNotIn('id', [$ignore])
                ->get()->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'text' => $item->title,
                    ];
                })
        };

        return response(['items' => $posts]);
    }

    public function getCategories($type, $post_type = null)
    {
        $q = request('q') ?? '';
        $categories = Category::query()->where('name' , 'LIKE' , "%$q%")->where('cat_type', $type)
            ->when(!empty($post_type), function ($query) use ($post_type) {
                $query->where('post_type', $post_type);
            })->get()->map(function ($item) {
                return [
                    'id' => $item->id,
                    'text' => $item->name,
                ];
            });

        return response(['items' => $categories]);
    }


    public function getUsers($role)
    {
        $q = request('q') ?? '';

        $users = User::search($q)
            ->when(!empty($role), function ($query) use ($role) {
                $query->where('role_id', $role);
            })->get()->map(function ($item) {
                return [
                    'id' => $item->id,
                    'text' => $item->fullName ?? $item->username ?? $item->phone,
                ];
            });

        return response(['items' => $users]);
    }
}
