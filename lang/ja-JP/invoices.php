<?php

return [

    'invoice_number'        => '請求書番号',
    'invoice_date'          => '発行日',
    'total_price'           => '総額',
    'due_date'              => '期限日',
    'order_number'          => 'ばんごう',
    'bill_to'               => '支払先',

    'quantity'              => '数量',
    'price'                 => '価格',
    'sub_total'             => '小計',
    'discount'              => '割引',
    'tax_total'             => '税金額',
    'total'                 => '合計',

    'item_name'             => '品',

    'show_discount'         => ':discount% 割引',
    'add_discount'          => '割引追加',
    'discount_desc'         => '割引額',

    'payment_due'           => '支払期限超過',
    'paid'                  => '支払済み',
    'histories'             => '履歴',
    'payments'              => '支払',
    'add_payment'           => '新規支払',
    'mark_paid'             => '支払済みに変更',
    'mark_sent'             => '送信済みに変更',
    'download_pdf'          => 'PDFダウンロード',
    'send_mail'             => 'メール送信',
    'all_invoices'          => 'すべての請求書を見るには、ログインをしてください',
    'create_invoice'        => '請求書作成',
    'send_invoice'          => '請求書送信',
    'get_paid'              => '支払',

    'status' => [
        'draft'             => '下書き',
        'sent'              => '送信',
        'viewed'            => '確認済み',
        'approved'          => '承認済み',
        'partial'           => '一部',
        'paid'              => '支払済み',
    ],

    'messages' => [
        'email_sent'        => 'メールが送信されました！',
        'marked_sent'       => '選択された請求書は送信されました！',
        'email_required'    => 'お客様のメールアドレスを記入してください',
        'draft'             => 'これは、請求書の<b>下書き</b>です。送信の際、チャートに反映されます。',

        'status' => [
            'created'       => '作成日　:date',
            'send' => [
                'draft'     => '未送信',
                'sent'      => ':date　に送信',
            ],
            'paid' => [
                'await'     => '支払待ち',
            ],
        ],
    ],

    'notification' => [
        'message'           => 'あなたは、このメールを受信しているのは、期限中の請求書 :amount 点があります。',
        'button'            => '今支払う',
    ],

];
