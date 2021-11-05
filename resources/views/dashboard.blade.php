<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <a href="{{ route('projects.create') }}"><x-jet-secondary-button>{{ __('project.new') }}</x-jet-secondary-button></a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-6 sm:px-6 bg-white border-b border-gray-200">
                    <livewire:projectlist />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
