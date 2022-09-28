<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class ProductManager extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.admin.product-manager')->layout('layouts.admin');
    }
}
