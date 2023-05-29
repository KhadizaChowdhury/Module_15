<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Display a listing of the resource.';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Show the form for creating a new resource.';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Store a newly created resource in storage.';
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return 'Display the specified resource.';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return 'Show the form for editing the specified resource.';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        return 'Update the specified resource in storage.';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return 'Remove the specified resource from storage.';
    }
}
