<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex">
            {{ __('Dashboard') }}
            <div class="w-full text-right">
                <a class="" href="{{ route('projects.create') }}"><x-jet-button>{{ __('project.new') }}</x-jet-button></a>
            </div>
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
