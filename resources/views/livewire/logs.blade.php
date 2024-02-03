<div class="mb-16">
    <div class="overflow-hidden flex">
        <select class="mb-6 mr-6 shadow appearance-none block w-36 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model="level">
            <option value="0" class="text-gray-800">Alle</option>
            <option value="100" class="{{ \App\Repositories\ProjectRepository::getColorStringForLogLevel(100) }}">Debug</option>
            <option value="200" class="{{ \App\Repositories\ProjectRepository::getColorStringForLogLevel(200) }}">Info</option>
            <option value="300" class="{{ \App\Repositories\ProjectRepository::getColorStringForLogLevel(300) }}">Warning</option>
            <option value="400" class="{{ \App\Repositories\ProjectRepository::getColorStringForLogLevel(400) }}">Error</option>
            <option value="500" class="{{ \App\Repositories\ProjectRepository::getColorStringForLogLevel(500) }}">Critical</option>
            <option value="550" class="{{ \App\Repositories\ProjectRepository::getColorStringForLogLevel(550) }}">Alert</option>
        </select>
        <input wire:model.lazy="search" type="text" placeholder="{{ __('Search the logs') }}"
               class="mb-6 shadow appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
    </div>
    <table class="table-fixed w-full mb-16 mt-6 px-4 py-3 shadow-xl text-gray-700 responsive">
        <tbody x-data="{open: -1}">
        @foreach($logs as $index => $log)
            <tr class="bg-transparent hover:bg-gray-200 text-sm">
                <td class="flex align-top border-t px-2 py-1 {{ \App\Repositories\ProjectRepository::getColorStringForLogLevel($log->level) }} ">
                    <button class="max-h-6 pt-1" @click="open = (open == {{ $index }} ? -1 : {{ $index }})">
                        <i class="far fa-plus-square align-top"  x-show="open != {{ $index }}"></i>
                        <i class="far fa-minus-square align-top" x-show="open == {{ $index }}"></i>
                    </button>
                    <div x-show="open == {{ $index }}" class="align-top ml-2">
                        {!! nl2br($log->formatted) !!}
                    </div>
                    <div x-show="open != {{ $index }}" class="truncate align-top ml-2">
                        {!! \App\Repositories\ProjectRepository::formatLogLine($log) !!}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $logs->links() }}
</div>
