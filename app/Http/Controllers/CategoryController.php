<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryController extends Model
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['tasks' => $category->getByCategory()]);
    }
}