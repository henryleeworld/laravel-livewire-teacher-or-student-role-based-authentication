<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans('frontend.student.lessons.content.lessons_list') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{ trans('frontend.student.lessons.content.only_for_students') }}
        </div>
    </div>
</x-student-layout>
