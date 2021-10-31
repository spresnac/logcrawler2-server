<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="shadow-lg rounded w-full">
                <thead class="text-left bg-white">
                    <tr>
                        <th class="m-2 p-2 font-bold">ID</th>
                        <th class="m-2 p-2 font-bold">{{ __('project.owner') }}</th>
                        <th class="m-2 p-2 font-bold">{{ __('project.name') }}</th>
                        <th class="m-2 p-2 font-bold">{{ __('project.entries.count') }}</th>
                        <th class="m-2 p-2 font-bold">{{ __('project.actions') }}</th>
                    </tr>
                </thead>
                <tfoot class="text-right">
                    <tr>
                        <td colspan="5" class="m-2 p-2 font-extralight">{{ __('project.count') }}: {{ $projects->count() }}</td>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($projects as $project)
                        <tr class="bg-transparent hover:bg-white">
                            <td class="m-2 p-2">{{ $project->id }}</td>
                            <td class="m-2 p-2">{{ $project->user_id }}</td>
                            <td class="m-2 p-2">{{ $project->name }}</td>
                            <td class="m-2 p-2"> --- </td>
                            <td class="m-2 p-2">...</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
