<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class CategoryForm extends Component
{
    public bool $isShown = false;
    public Category $category;

    protected $listeners = ['create', 'edit'];

    protected $rules = [
        'category.name' => 'required|string',
        'category.slug' => 'required|string',
        'category.description' => 'nullable|string',
    ];

    public function create()
    {
        $this->isShown = true;
        $this->category = new Category();
    }

    public function save()
    {
        $this->validate();
        $this->category->save();
        $this->isShown = false;
    }

    public function edit(Category $category)
    {
        $this->category = $category;
        $this->isShown = true;
    }

    public function render()
    {
        return view('livewire.admin.category-form');
    }
}
