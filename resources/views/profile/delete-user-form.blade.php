<x-jet-action-section>
    <x-slot name="title">
        {{ trans('frontend.profile.delete_user.content.delete_account') }}
    </x-slot>

    <x-slot name="description">
        {{ trans('frontend.profile.delete_user.content.permanently_delete_your_account') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ trans('frontend.profile.delete_user.content.once_your_account_is_deleted') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ trans('frontend.profile.delete_user.content.delete_account') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ trans('frontend.profile.delete_user.content.delete_account') }}
            </x-slot>

            <x-slot name="content">
                {{ trans('frontend.profile.delete_user.content.are_you_sure_you_want_to_delete') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ trans('frontend.profile.delete_user.content.password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ trans('frontend.profile.delete_user.content.nevermind') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ trans('frontend.profile.delete_user.content.delete_account') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
