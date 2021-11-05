<x-jet-form-section submit="createForm">
    <x-slot name="title">
        {{ __('project.create') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.create_description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('project.name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="projectname"/>
            <x-jet-input-error for="name" class="mt-2" />
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-button>
            {{ __('project.create_new') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
