<x-jet-form-section submit="">
    <x-slot name="title">
        {{ __('project.configuration.1.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('project.configuration.1.description') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            {{ __('project.configuration.1.text_1') }}<br />
            <pre class="mt-2 bg-slate-700 px-4 rounded-lg"><x-torchlight-code language='shell' class="m-4">
                composer require spresnac/logcrawler-client
            </x-torchlight-code></pre>
        </div>
    </x-slot>
</x-jet-form-section>

