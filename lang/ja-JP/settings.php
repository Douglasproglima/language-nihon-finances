<?php

return [

    'company' => [
        'name'              => '名前',
        'email'             => 'メールアドレス',
        'phone'             => '電話',
        'address'           => '住所',
        'logo'              => 'ロゴ',
    ],
    'localisation' => [
        'tab'               => '場所',
        'financial_start'   => '会計年度開始',
        'timezone'          => 'タイムーゾン',
        'date' => [
            'format'        => '年月日形式',
            'separator'     => '年月日セパレータ',
            'dash'          => 'ダッシュー (-)',
            'dot'           => 'ドット (.)',
            'comma'         => 'カンマ (,)',
            'slash'         => 'スラッシュ (/)',
            'space'         => 'スペース ( )',
        ],
        'percent' => [
            'title'         => '位置 (%)',
            'before'        => '数字前',
            'after'         => '数字後',
        ],
    ],
    'invoice' => [
        'tab'               => '請求書',
        'prefix'            => '数字形式',
        'digit'             => '桁数',
        'next'              => '次の番号',
        'logo'              => 'ロゴ',
        'custom'            => 'カスタム',
        'item_name'         => 'アイテム名',
        'item'              => 'アイテム',
        'product'           => '商品',
        'service'           => 'サービス',
        'price_name'        => '価格名',
        'price'             => '価格',
        'rate'              => '税金',
        'quantity_name'     => '数量名',
        'quantity'          => '数量',
    ],
    'default' => [
        'tab'               => '標準',
        'account'           => '標準口座',
        'currency'          => '標準通貨',
        'tax'               => '標準税金',
        'payment'           => '標準支払方法',
        'language'          => '標準言語',
    ],
    'email' => [
        'protocol'          => 'プロトコル',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP ホスト',
            'port'          => 'SMTP ポート',
            'username'      => 'SMTP ユーザー',
            'password'      => 'SMTP パスワード',
            'encryption'    => 'SMTP 暗号',
            'none'          => 'None',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail Path',
        'log'               => 'Log Emails',
    ],
    'scheduling' => [
        'tab'               => '予約',
        'send_invoice'      => '請求書の通知を送る',
        'invoice_days'      => '期限日後送信する',
        'send_bill'         => '通知を送信',
        'bill_days'         => '期限切れ前送信',
        'cron_command'      => 'クーロンコマンド',
        'schedule_time'     => 'クーロン開始',
        'send_item_reminder'=> '通知を送信',
        'item_stocks'       => 'アイテムに在庫があるとき通知を送信',
    ],
    'appearance' => [
        'tab'               => '見た目',
        'theme'             => 'テーマ',
        'light'             => '明るい',
        'dark'              => '暗い',
        'list_limit'        => 'ページ当たりの件数',
        'use_gravatar'      => 'グラバターを使用する',
    ],
    'system' => [
        'tab'               => 'システム',
        'session' => [
            'lifetime'      => 'セッションの終了時間（分）',
            'handler'       => 'セッションハンドラー',
            'file'          => 'ファイル',
            'database'      => 'データベース',
        ],
        'file_size'         => '最大ファイルサイズ(MB)',
        'file_types'        => '使用できるファイルタイプ',
    ],

];
