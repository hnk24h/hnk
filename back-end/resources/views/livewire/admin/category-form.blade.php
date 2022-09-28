<div>
    <form wire:submit.prevent="save">
        <x-dialog-modal wire:model="isShown">
            <x-slot name="title">
                Category form
            </x-slot>

            <x-slot name="content">
            <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <x-label for="name" value="Name" class="sm:mt-px sm:pt-2" />
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <x-input wire:model.defer="category.name" type="text" name="name" id="name" class="max-w-lg block w-full sm:max-w-xs sm:text-sm" />
                            <x-input-error for="category.name" class="mt-2" />
                        </div>
                    </div>                    

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <x-label for="slug" value="Slug" class="sm:mt-px sm:pt-2" />
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <x-input wire:model.defer="category.slug" type="text" name="slug" id="slug" class="max-w-lg block w-full sm:max-w-xs sm:text-sm" />
                            <x-input-error for="category.slug" class="mt-2" />
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <x-label for="description" value="Description" class="sm:mt-px sm:pt-2" />
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <x-textarea wire:model.defer="category.description" name="description" id="description" class="max-w-lg block w-full sm:max-w-xs sm:text-sm" />
                            <x-input-error for="category.description" class="mt-2" />
                        </div>
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <div class="flex items-center">
                    <x-action-message on="saved" class="mr-2" />
                    <x-button>
                        Save
                    </x-button>
                </div>
            </x-slot>
        </x-dialog-modal>
    </form>
</div>