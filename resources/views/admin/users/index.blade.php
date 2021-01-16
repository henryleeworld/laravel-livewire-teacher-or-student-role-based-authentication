<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans('administrator.users.content.users_list') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{ trans('administrator.users.content.only_for_administrators') }}
        </div>
    </div>
</x-admin-layout>
