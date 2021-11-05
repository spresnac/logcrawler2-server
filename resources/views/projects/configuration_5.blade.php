<x-jet-form-section submit="" class="mt-6">
    <x-slot name="title">
        {{ __('project.configuration.5.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.5.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            {!! __('project.configuration.5.text_1') !!}<br />
<pre class="bg-gray-800 text-gray-200 p-2 select-all text-sm">
php artisan vendor:publish --tag=logcrawlerclient-config
</pre>
        </div>
    </x-slot>
</x-jet-form-section>

