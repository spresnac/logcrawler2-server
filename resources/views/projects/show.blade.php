<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex">
            {{ __('Project Logs - #:id :name', ['id' => $project->id, 'name' => $project->name ]) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-6 sm:px-6 bg-white border-b border-gray-200">
                    <livewire:logs :project="$project"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
