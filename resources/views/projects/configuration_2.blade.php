<x-jet-form-section submit="" class="mt-6">
    <x-slot name="title">
        {{ __('project.configuration.2.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.2.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            {!! __('project.configuration.2.text_1') !!}<br />

<pre class="tl_pre_container"><x-torchlight-code language='php' class="m-4">
    'channels' => [
        //...
        'logcrawler' => [ // [tl! ++]
            'driver' => 'monolog', // [tl! ++]
            'level' => 'debug', // [tl! ++]
            'handler' => LogCrawler::class, // [tl! ++]
        ], // [tl! add]
        //...
    ],
</x-torchlight-code></pre>
        </div>
    </x-slot>
</x-jet-form-section>

