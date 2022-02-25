<div class="mb-16" wire:poll>
    <div class="overflow-hidden">
        <input wire:model="search" type="text" placeholder="{{ __('project.search') }}" class="mb-6 shadow appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
    </div>
    <table class="table-fixed w-full mb-16 mt-6 px-4 py-3 shadow-md border border-slate-200 text-gray-600 responsive rounded-lg">
        <thead class="text-left bg-slate-200 text-slate-400">
            <th class="px-4 py-2 w-20 font-normal text-right">ID</th>
            <th class="px-4 py-2 w-60 font-normal">{{ __('project.owner') }}</th>
            <th class="px-4 py-2 font-normal">{{ __('project.name') }}</th>
            <th class="px-4 py-2 w-60 font-normal text-center ">{{ __('project.last_log_date') }}</th>
            <th class="px-4 py-2 text-right w-36 font-normal">{{ __('project.entries.count') }}</th>
            <th class="px-4 py-2 text-right w-20 font-normal">{{ __('project.actions') }}</th>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr class="bg-transparent hover:bg-slate-100">
                <td nowrap class="border border-slate-100 px-4 py-2 overflow-hidden text-right">{{ $project->id }}</td>
                <td nowrap class="border border-slate-100 px-4 py-2 overflow-hidden" title="UserId {{ $project->user_id }}">{{ $project->user->name }}</td>
                <td nowrap class="border border-slate-100 px-4 py-2 overflow-hidden">
                    <a href="{{ route('projects.show', ['project' => $project]) }}" class="underline decoration-gray-600 decoration-1">
                        {{ $project->name }}
                    </a>
                </td>
                <td nowrap class="border border-slate-100 px-4 py-2 overflow-hidden text-center">{{ $project->lastEntryDate }}</td>
                <td nowrap class="border border-slate-100 px-4 py-2 overflow-hidden text-right">{{ $project->logs_count }}</td>
                <td nowrap class="border border-slate-100 px-4 py-2 overflow-hidden text-right">
                    <a href="{{ route('projects.edit', ['project' => $project->id]) }}" title="{{ __('project.edit') }}">
                        <i class="fas fa-tools"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $projects->links() }}
</div>
