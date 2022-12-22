<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $allAuthors = Author::all();
        return AuthorResource::collection($allAuthors);
    }

    public function show(Request $request, Author $author)
    {
        return new AuthorResource($author);
    }
}
