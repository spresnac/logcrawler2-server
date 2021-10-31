<div class="mb-16 px-4">
    <div class="overflow-hidden">
        <input wire:model="search" type="text" placeholder="{{ __('project.search') }}" class="mb-6 shadow appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
    </div>
    <table class="table-fixed w-full mb-16 mt-6 px-4 py-3 shadow shadow-xl border text-gray-700 responsive">
        <thead class="text-left">
            <th class="px-4 py-2 w-1/12">ID</th>
            <th class="px-4 py-2">{{ __('project.owner') }}</th>
            <th class="px-4 py-2">{{ __('project.name') }}</th>
            <th class="px-4 py-2">{{ __('project.entries.count') }}</th>
            <th class="px-4 py-2">{{ __('project.actions') }}</th>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5" class="font-extralight text-right text-sm">{{ __('project.count') }} {{ $projects->count() }}</td>
            </tr>
        </tfoot>
        <tbody>
        @foreach($projects as $project)
            <tr class="bg-transparent hover:bg-gray-200">
                <td nowrap class="border px-4 py-2 overflow-hidden">{{ $project->id }}</td>
                <td nowrap class="border px-4 py-2 overflow-hidden">{{ $project->user_id }}</td>
                <td nowrap class="border px-4 py-2 overflow-hidden">{{ $project->name }}</td>
                <td nowrap class="border px-4 py-2 overflow-hidden">0</td>
                <td nowrap class="border px-4 py-2 overflow-hidden">...</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $projects->links() }}
</div>
