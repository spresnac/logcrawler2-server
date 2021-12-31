<div class="mb-16" wire:poll>
    <div class="overflow-hidden">
        <input wire:model="search" type="text" placeholder="{{ __('project.search') }}" class="mb-6 shadow appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
    </div>
    <table class="table-fixed w-full mb-16 mt-6 px-4 py-3 shadow shadow-xl border text-gray-700 responsive">
        <thead class="text-left">
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">{{ __('project.owner') }}</th>
            <th class="px-4 py-2">{{ __('project.name') }}</th>
            <th class="px-4 py-2">{{ __('project.last_log_date') }}</th>
            <th class="px-4 py-2 text-right ">{{ __('project.entries.count') }}</th>
            <th class="px-4 py-2 text-right">{{ __('project.actions') }}</th>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr class="bg-transparent hover:bg-gray-200">
                <td nowrap class="border px-4 py-2 overflow-hidden">{{ $project->id }}</td>
                <td nowrap class="border px-4 py-2 overflow-hidden">{{ $project->user->name }} ({{ $project->user_id }})</td>
                <td nowrap class="border px-4 py-2 overflow-hidden">
                    <a href="{{ route('projects.show', ['project' => $project]) }}" class="">
                        {{ $project->name }}
                    </a>
                </td>
                <td nowrap class="border px-4 py-2 overflow-hidden">{{ $project->lastEntryDate }}</td>
                <td nowrap class="border px-4 py-2 overflow-hidden text-right">{{ $project->logs_count }}</td>
                <td nowrap class="border px-4 py-2 overflow-hidden text-right">
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
