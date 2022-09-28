<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.product-list', [
            'products' => Product::query()->latest()->paginate(),
        ])->layout('layouts.admin');
    }
}
