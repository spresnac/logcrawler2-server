<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('project.edit') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 mb-20">
            @livewire('project-edit', ['project' => $project])
            <h2 class="text-2xl text-center mt-2 mb-6 underline">{{ __('project.configuration.headline') }}</h2>
            @include('projects.configuration_1')
            @include('projects.configuration_2')
            @include('projects.configuration_3')
            @include('projects.configuration_4')
            @include('projects.configuration_5')
        </div>
    </div>
</x-app-layout>
