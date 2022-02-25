<x-jet-form-section submit="" class="mt-6">
    <x-slot name="title">
        {{ __('project.configuration.4.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.4.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            {!! __('project.configuration.4.text_1') !!}<br />

<pre class="tl_pre_container"><x-torchlight-code language='php' class="m-4 select-all">
    LOG_CRAWLER_KEY="{{ $project->key }}"
</x-torchlight-code></pre>
            <span class="text-sm text-gray-500">
                <span class="fas fa-info-circle"></span> {{ __('project.configuration.4.hint') }}
            </span>
        </div>
    </x-slot>
</x-jet-form-section>

