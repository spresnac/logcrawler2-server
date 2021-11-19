<x-jet-form-section submit="" class="mt-6">
    <x-slot name="title">
        {{ __('project.configuration.3.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.3.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            {!! __('project.configuration.3.text_1') !!}<br />

<pre class="bg-gray-800 text-gray-200 p-2 select-all text-xs">
    //...
    'stack' => [
        'driver' => 'stack',
        'channels' => ['daily', <b class="bg-yellow-600">'logcrawler'</b>],
        'ignore_exceptions' => false,
    ],
    //...
</pre>
        </div>
    </x-slot>
</x-jet-form-section>

