<x-jet-form-section submit="" class="mt-6">
    <x-slot name="title">
        {{ __('project.configuration.4.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.4.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            {!! __('project.configuration.4.text_1') !!}<br />

<pre class="bg-gray-800 text-gray-200 p-2 select-all text-sm">
LOG_CRAWLER_KEY="{{ $project->key }}"
</pre>
            <span class="text-sm text-gray-500">
                <span class="fas fa-info-circle"></span> {{ __('project.configuration.4.hint') }}
            </span>
        </div>
    </x-slot>
</x-jet-form-section>

