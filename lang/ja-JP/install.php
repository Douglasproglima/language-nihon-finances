<?php

return [

    'next'                  => '次',
    'refresh'               => '更新',

    'steps' => [
        'requirements'      => 'エラーを修正するために、ホストプロバイダーへ連絡してください！',
        'language'          => 'ステップ 1/3 : 言語選択',
        'database'          => 'ステップ 2/3 : データベース設定',
        'settings'          => 'ステップ 3/3 : 会社詳細情報と管理者',
    ],

    'language' => [
        'select'            => '言語選択',
    ],

    'requirements' => [
        'enabled'           => ':feature 有効設定が必須です！',
        'disabled'          => ':feature 無効設定が必須です！',
        'extension'         => 'Extensão :extension のインストールとロードが必須です！',
        'directory'         => 'フォルダ :directory の書き込み権限必須です！',
    ],

    'database' => [
        'hostname'          => 'サーバ名',
        'username'          => 'ユーザー名',
        'password'          => 'パスワード',
        'name'              => 'データベース',
    ],

    'settings' => [
        'company_name'      => '会社名',
        'company_email'     => '会社メールアドレス',
        'admin_email'       => '管理者メールアドレス',
        'admin_password'    => '管理者パスワード',
    ],

    'error' => [
        'connection'        => 'エラー: データベースへの接続はできません。接続情報を確認してください。',
    ],

];
