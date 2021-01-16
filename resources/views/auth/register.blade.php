<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" x-data="{role_id: 2}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ trans('global.auth.register.content.name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ trans('global.auth.register.content.email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ trans('global.auth.register.content.password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ trans('global.auth.register.content.confirm_password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ trans('global.auth.register.content.register_as') }}" />
                <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="2">{{ trans('global.auth.register.content.student') }}</option>
                    <option value="3">{{ trans('global.auth.register.content.teacher') }}</option>
                </select>
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="student_address" value="{{ trans('global.auth.register.content.address') }}" />
                <x-jet-input id="student_address" class="block mt-1 w-full" type="text" :value="old('student_address')" name="student_address" />
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="student_licence_number" value="{{ trans('global.auth.register.content.licence_number') }}" />
                <x-jet-input id="student_licence_number" class="block mt-1 w-full" type="text" :value="old('student_licence_number')" name="student_licence_number" />
            </div>

            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="teacher_qualifications" value="{{ trans('global.auth.register.content.qualifications') }}" />
                <x-jet-input id="teacher_qualifications" class="block mt-1 w-full" type="text" :value="old('teacher_qualifications')" name="teacher_qualifications" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! trans('global.auth.register.content.i_agree_to', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.trans('global.auth.register.content.terms_of_service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'. trans('global.auth.register.content.privacy_policy') .'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ trans('global.auth.register.content.already_registered') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ trans('global.auth.register.title') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
