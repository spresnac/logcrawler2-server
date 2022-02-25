<x-jet-form-section submit="" class="mt-6">
    <x-slot name="title">
        {{ __('project.configuration.5.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.5.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            {!! __('project.configuration.5.text_1') !!}<br />
<pre class="tl_pre_container"><x-torchlight-code language='shell' class="m-4 select-all">
    php artisan vendor:publish --tag=logcrawlerclient-config
</x-torchlight-code></pre>
        </div>
    </x-slot>
</x-jet-form-section>

