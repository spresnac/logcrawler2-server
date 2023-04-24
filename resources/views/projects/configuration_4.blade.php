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
    # Logcrawler logging
    LOGCRAWLER_HEADER_KEY="x-lc-key"
    LOG_CRAWLER_THRESHOLD="0"
    LOG_CRAWLER_URL="{{ config('app.url') }}"
    LOG_CRAWLER_BEARER_TOKEN="This is the token you generate in the backend for your user"
    LOG_CRAWLER_KEY="{{ $project->key }}"
    LOGCRAWLER_INFO_PHP="false"
    LOGCRAWLER_INFO_LARAVEL="false"
</x-torchlight-code></pre>
            <span class="text-sm text-gray-500">
                <span class="fas fa-info-circle"></span> {{ __('project.configuration.4.hint') }}
            </span>
        </div>
    </x-slot>
</x-jet-form-section>
