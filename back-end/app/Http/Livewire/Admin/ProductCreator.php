<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class ProductCreator extends Component
{
    public Product $product;

    public function mount()
    {
        $this->product = new Product();
    }

    public function render()
    {
        return view('livewire.admin.product-creator')->layout('layouts.admin');
    }
}
