<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request, Product $product): RedirectResponse
    {
        Comment::query()->create([
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
            'comments' => $request->get('comments'),
            'status' => '0',
        ]);
        return back()->with('success', 'نظر شما به ثبت رسید و پس از تایید نمایش داده می شود .');
    }

}
