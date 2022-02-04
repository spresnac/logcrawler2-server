<x-jet-form-section submit="editForm">
    <x-slot name="title">
        {{ __('project.edit') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.edit_description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="projectname" value="{{ __('project.name') }}" />
            <x-jet-input id="projectname" type="text" class="mt-1 block w-full" wire:model="name" />
            <x-jet-input-error for="projectname" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="projectkey" value="{{ __('project.key') }}" />
            <x-jet-input readonly id="projectkey" type="text" class="mt-1 block w-full select-all" wire:model="key" />
            <x-jet-input-error for="projectkey" class="mt-2" />
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-button>
            {{ __('project.edit_button') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
<x-jet-section-border />

