<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CategoryList extends Component
{
    public Category $categoryBeingDeleted;
    public bool $confirmingCategoryDeletion = false;

    public function confirmCategoryDeletionFor(Category $category)
    {
        $this->confirmingCategoryDeletion = true;

        $this->categoryBeingDeleted = $category;
    }

    public function delete()
    {
        $this->categoryBeingDeleted->delete();

        $this->confirmingCategoryDeletion = false;
    }

    public function render()
    {
        $data = Category::with('parent')->latest()->get();
       
        return view('livewire.admin.category-list', [
            'categories' => $data,
        ])->layout('layouts.admin');
    }
}
