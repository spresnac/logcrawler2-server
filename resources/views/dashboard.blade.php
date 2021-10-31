<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="shadow-lg rounded w-full">
                <thead>
                    <tr>
                        <th class="m-2 p-2 font-bold">ID</th>
                        <th class="m-2 p-2 font-bold">{{ __('project.name') }}</th>
                        <th class="m-2 p-2 font-bold">{{ __('project.entries.count') }}</th>
                        <th class="m-2 p-2 font-bold">{{ __('project.actions') }}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="4" class="m-2 p-2 font-extralight">{{ __('project.count') }}: 0</td>
                    </tr>
                </tfoot>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
