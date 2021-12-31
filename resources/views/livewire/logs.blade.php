<div class="mb-16" wire:poll>
    <div class="overflow-hidden">
        <input wire:model="search" type="text" placeholder="{{ __('Search the logs') }}" class="mb-6 shadow appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
    </div>
    <table class="table-fixed w-full mb-16 mt-6 px-4 py-3 shadow-xl text-gray-700 responsive">
        <tbody x-data="{open: -1}">
        @foreach($logs as $index => $log)
            <tr class="bg-transparent hover:bg-gray-200">
                <td class="flex align-top border-t text-sm px-2 py-1 {{ \App\Repositories\ProjectRepository::getColorStringForLogLevel($log->level) }} ">
                    <button class="align- max-h-6" @click="open = (open == {{ $index }} ? -1 : {{ $index }})">
                        <i class="far fa-plus-square align-top"  x-show="open != {{ $index }}"></i>
                        <i class="far fa-minus-square align-top" x-show="open == {{ $index }}"></i>
                    </button>
                    <div x-bind:class="open == {{ $index }} ? 'break-all' : 'truncate'" class="align-top ml-4">
                    @if ($log->formatted !== '?')
                        {{ $log->formatted }}
                    @else
                        {!! \App\Repositories\ProjectRepository::formatLogLine($log) !!}
                    @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $logs->links() }}
</div>
