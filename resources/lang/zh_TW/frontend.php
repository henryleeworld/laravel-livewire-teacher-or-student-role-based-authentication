<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Frontend Language Lines
    |--------------------------------------------------------------------------
    */
    'dashboard' => [
        'title' => '儀表板',
    ],
    'api' => [
        'tokens'            => 'API 權杖',
        'api_token_manager' => [
            'content' => [
                'api_token'                             => 'API 權杖',
                'api_tokens'                            => 'API 權杖',
                'api_token_permissions'                 => 'API 權杖權限',
                'api_tokens_allow_third_party_services' => 'API 權杖允許第三方服務代表您向我們的應用程式進行身份驗證。',
                'close'                                 => '關閉',
                'create'                                => '新增',
                'created'                               => '已新增',
                'create_api_token'                      => '新增 API 權杖',
                'delete'                                => '刪除',
                'delete_api_token'                      => '刪除 API 權杖',
                'last_used'                             => '最後使用時間',
                'manage_api_tokens'                     => '管理 API 權杖',
                'nevermind'                             => '沒關係',
                'permissions'                           => '權限',
                'please_copy_your_new_api_token'        => '請複製您的新 API 權杖。為了安全起見，不會再顯示它。',
                'save'                                  => '儲存',
                'token_name'                            => '權杖名稱',
                'you_may_delete'                        => '如果不再需要任何現有權杖，則可以刪除它們。',
                'you_would_like_to_delete'              => '您確定要刪除此 API 權杖嗎？',
            ],
        ],
    ],
    'manage_account' => [
        'title' => '管理帳號',
    ],
    'manage_team' => [
        'title'           => '管理團隊',
        'create_new_team' => [
            'title' => '新增團隊',
        ],
        'switch_teams'    => [
            'title' => '切換團隊',
        ],
        'team_settings'   => [
            'title' => '團隊設定',
        ],
    ],
    'profile' => [
        'title'       => '個人資料',
        'delete_user' => [
            'content' => [
                'are_you_sure_you_want_to_delete' => '您確定要刪除您的帳號嗎？帳號刪除後，其所有資源和資料將被永久刪除。請輸入密碼，以確認您要永久刪除您的帳號。',
                'delete_account'                  => '刪除帳號',
                'once_your_account_is_deleted'    => '帳戶刪除後，其所有資源和資料將被永久刪除。在刪除帳號之前，請下載您希望保留的所有資料或資訊。',
                'nevermind'                       => '沒關係',
                'password'                        => '密碼',
                'permanently_delete_your_account' => '永久刪除您的帳號。',
            ],
        ],
        'logout_other_browser_sessions' => [
            'content' => [
                'browser_sessions'                       => '瀏覽器 Sessions',
                'done'                                   => '完成。',
                'if_necessary'                           => '如有必要，您可以登出所有裝置上的所有其他瀏覽器 Sessions。下面列出了您近期的一些 Sessions；但是，此列表可能並不詳盡。如果您認為自己的帳號已被盜用，則也應該更新密碼。',
                'last_active'                            => '最後啟用時間',
                'logout_other_browser_sessions'          => '登出其他瀏覽器 Sessions',
                'manage_and_logout_your_active_sessions' => '在其他瀏覽器和裝置上管理和登出啟用 Sessions。',
                'nevermind'                              => '沒關係',
                'password'                               => '密碼',
                'please_enter_your_password'             => '請輸入密碼，以確認您要登出所有裝置上的其他瀏覽器 Sessions。',
                'this_device'                            => '這個裝置',
            ],
        ],
        'two_factor_authentication' => [
            'title'   => '雙重認證',
            'content' => [
                'add_additional_security'                   => '使用雙重認證為您的帳號增加額外的安全性。',
                'disable'                                   => '關閉',
                'enable'                                    => '啟用',
                'regenerate_recovery_codes'                 => '重新產生恢復碼',
                'show_recovery_codes'                       => '顯示恢復碼',
                'store_these_recovery_codes'                => '將這些恢復碼儲存在安全的密碼管理器中。如果您的雙重認證裝置遺失，則可以使用它們來恢復對您帳號的存取。',
                'two_factor_authentication_is_now_enabled'  => '現在啟用了雙重認證。使用手機的身份驗證器應用程式掃描以下 QR 碼。',
                'when_two_factor_authentication_is_enabled' => '啟用雙重認證後，身份驗證期間將提示您輸入安全的隨機權杖。您可以從手機的 Google 驗證器應用程式中取得此權杖。',
                'you_have_enabled'                          => '您已啟用雙重認證。',
                'you_have_not_enabled'                      => '您尚未啟用雙重認證。',
            ],
        ],
        'update_password' => [
            'title'   => '更新密碼',
            'content' => [
                'confirm_password'    => '確認密碼',
                'current_password'    => '目前密碼',
                'ensure_your_account' => '確保您的帳號使用的是隨機長密碼，以確保安全。',
                'new_password'        => '新密碼',
                'save'                => '儲存',
                'saved'               => '已儲存。',
            ],
        ],
        'update_profile_information' => [
            'content' => [
                'email'               => '電子郵件',
                'name'                => '姓名',
                'photo'               => '照片',
                'profile_information' => '個人資料資訊',
                'remove_photo'        => '刪除照片',
                'save'                => '儲存',
                'saved'               => '已儲存。',
                'select_a_new_photo'  => '選擇一張新照片',
                'update_your_account' => '更新您帳號的個人資料資訊和電子郵件地址。',
            ],
        ],
    ],
    'student' => [
        'lessons' => [
            'title'   => '課程',
            'content' => [
                'lessons_list'      => '課程清單',
                'only_for_students' => '僅適用於學生。',
            ],
        ],
    ],
    'teacher' => [
        'courses' => [
            'title'   => '課程',
            'content' => [
                'courses_list'      => '課程清單',
                'only_for_teachers' => '僅教師可用。',
            ],
        ],
    ],
    'users' => [
        'title' => '使用者',
    ],
];
