<x-jet-form-section submit="">
    <x-slot name="title">
        {{ __('project.configuration.1.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.1.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            {{ __('project.configuration.1.text_1') }}<br />
            {!! __('project.configuration.1.text_2') !!}
        </div>
    </x-slot>
</x-jet-form-section>

