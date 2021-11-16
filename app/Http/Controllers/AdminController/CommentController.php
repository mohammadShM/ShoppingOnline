<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index(Product $product): Factory|View|Application
    {
        return view('admin.productComment.index', [
            'product' => $product,
        ]);
    }

    public function edit(Comment $comment): Factory|View|Application
    {
        return view('admin.productComment.edit', [
            'comment' => $comment,
        ]);
    }

    public function update(Request $request, Comment $comment): RedirectResponse
    {
        if ($request->get('status_1')) {
            $comment->update([
                'status' => '1',
            ]);
        } else {
            $comment->update([
                'status' => '0',
            ]);
        }
        $comment->update([
            'comments' => $request->get('comments'),
        ]);
        return redirect(route('product.comments.index', $comment->product));
    }

    public function updateStatus(Comment $comment): RedirectResponse
    {
        $comment->update([
            'status' => '1',
        ]);
        return back();
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return back();
    }

}
