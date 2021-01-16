<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Frontend Language Lines
    |--------------------------------------------------------------------------
    */
    'dashboard' => [
        'title' => 'Dashboard',
    ],
    'api' => [
        'tokens'            => 'API Tokens',
        'api_token_manager' => [
            'content' => [
                'api_token'                             => 'API Token',
                'api_tokens'                            => 'API Tokens',
                'api_token_permissions'                 => 'API Token Permissions',
                'api_tokens_allow_third_party_services' => 'API tokens allow third-party services to authenticate with our application on your behalf.',
                'close'                                 => 'Close',
                'create'                                => 'Create',
                'created'                               => 'Created',
                'create_api_token'                      => 'Create API Token',
                'delete'                                => 'Delete',
                'delete_api_token'                      => 'Delete API Token',
                'last_used'                             => 'Last used',
                'manage_api_tokens'                     => 'Manage API Tokens',
                'nevermind'                             => 'Nevermind',
                'permissions'                           => 'Permissions',
                'please_copy_your_new_api_token'        => 'Please copy your new API token. For your security, it won\'t be shown again.',
                'save'                                  => 'Save',
                'token_name'                            => 'Token Name',
                'you_may_delete'                        => 'You may delete any of your existing tokens if they are no longer needed.',
                'you_would_like_to_delete'              => 'Are you sure you would like to delete this API token?',
            ],
        ],
    ],
    'manage_account' => [
        'title' => 'Manage Account',
    ],
    'manage_team' => [
        'title'           => 'Manage Team',
        'create_new_team' => [
            'title' => 'Create New Team',
        ],
        'switch_teams'    => [
            'title' => 'Switch Teams',
        ],
        'team_settings'   => [
            'title' => 'Team Settings',
        ],
    ],
    'profile' => [
        'title'       => 'Profile',
        'delete_user' => [
            'content' => [
                'are_you_sure_you_want_to_delete' => 'Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.',
                'delete_account'                  => 'Delete Account',
                'once_your_account_is_deleted'    => 'Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.',
                'nevermind'                       => 'Nevermind',
                'password'                        => 'Password',
                'permanently_delete_your_account' => 'Permanently delete your account.',
            ],
        ],
        'logout_other_browser_sessions' => [
            'content' => [
                'browser_sessions'                       => 'Browser Sessions',
                'done'                                   => 'Done.',
                'if_necessary'                           => 'If necessary, you may logout of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.',
                'last_active'                            => 'Last active',
                'logout_other_browser_sessions'          => 'Logout Other Browser Sessions',
                'manage_and_logout_your_active_sessions' => 'Manage and logout your active sessions on other browsers and devices.',
                'nevermind'                              => 'Nevermind',
                'password'                               => 'Password',
                'please_enter_your_password'             => 'Please enter your password to confirm you would like to logout of your other browser sessions across all of your devices.',
                'this_device'                            => 'This device',
            ],
        ],
        'two_factor_authentication' => [
            'title'   => 'Two Factor Authentication',
            'content' => [
                'add_additional_security'                   => 'Add additional security to your account using two factor authentication.',
                'disable'                                   => 'Disable',
                'enable'                                    => 'Enable',
                'regenerate_recovery_codes'                 => 'Regenerate Recovery Codes',
                'show_recovery_codes'                       => 'Show Recovery Codes',
                'store_these_recovery_codes'                => 'Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.',
                'two_factor_authentication_is_now_enabled'  => 'Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.',
                'when_two_factor_authentication_is_enabled' => 'When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.',
                'you_have_enabled'                          => 'You have enabled two factor authentication.',
                'you_have_not_enabled'                      => 'You have not enabled two factor authentication.',
            ],
        ],
        'update_password' => [
            'title'   => 'Update Password',
            'content' => [
                'confirm_password'    => 'Confirm Password',
                'current_password'    => 'Current Password',
                'ensure_your_account' => 'Ensure your account is using a long, random password to stay secure.',
                'new_password'        => 'New Password',
                'save'                => 'Save',
                'saved'               => 'Saved.',
            ],
        ],
        'update_profile_information' => [
            'content' => [
                'email'               => 'Email',
                'name'                => 'Name',
                'photo'               => 'Photo',
                'profile_information' => 'Profile Information',
                'remove_photo'        => 'Remove Photo',
                'save'                => 'Save',
                'saved'               => 'Saved.',
                'select_a_new_photo'  => 'Select A New Photo',
                'update_your_account' => 'Update your account\'s profile information and email address.',
            ],
        ],
    ],
    'student' => [
        'lessons' => [
            'title'   => 'Lessons',
            'content' => [
                'lessons_list'      => 'Lessons List',
                'only_for_students' => 'Accessible only for students.',
            ],
        ],
    ],
    'teacher' => [
        'courses' => [
            'title'   => 'Courses',
            'content' => [
                'courses_list'      => 'Courses List',
                'only_for_teachers' => 'Accessible only for teachers.',
            ],
        ],
    ],
    'users' => [
        'title' => 'Users',
    ],
];
