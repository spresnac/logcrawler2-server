<x-jet-form-section submit="" class="mt-6">
    <x-slot name="title">
        {{ __('project.configuration.3.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.3.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            {!! __('project.configuration.3.text_1') !!}<br />

<pre class="tl_pre_container"><x-torchlight-code language='php' class="m-4">
    //...
    'stack' => [
        'driver' => 'stack',
        'channels' => ['daily'], // [tl! --]
        'channels' => ['daily', 'logcrawler'], // [tl! ++]
        'ignore_exceptions' => false,
    ],
    //...
</x-torchlight-code></pre>
        </div>
    </x-slot>
</x-jet-form-section>

