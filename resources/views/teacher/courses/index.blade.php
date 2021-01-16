<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans('frontend.teacher.courses.content.courses_list') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{ trans('frontend.teacher.courses.content.only_for_teachers') }}
        </div>
    </div>
</x-teacher-layout>
