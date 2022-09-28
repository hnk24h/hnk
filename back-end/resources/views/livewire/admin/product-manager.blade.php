<div>
    <div class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Products</h2>
        </div>
    </div>
    <div class="max-w-3xl mx-auto">
        <div class="mt-6 flex flex-col">
            <div class="-my-2 overflow-x-auto -mx-4 sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">                        
                        <livewire:admin.product-information-form :product="$product" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
