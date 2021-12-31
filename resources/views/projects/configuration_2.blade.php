<x-jet-form-section submit="" class="mt-6">
    <x-slot name="title">
        {{ __('project.configuration.2.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.2.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            {!! __('project.configuration.2.text_1') !!}<br />

<pre class="bg-gray-800 text-gray-200 p-2 text-xs">
    'channels' => [
        //...
        'logcrawler' => [
            'driver' => 'monolog',
            'level' => 'debug',
            'handler' => LogCrawler::class,  // import this!
        ],
        //...
    ],
</pre>
        </div>
    </x-slot>
</x-jet-form-section>

