<?php

return [

    'bill_number'           => '請求書番号',
    'bill_date'             => '発行日',
    'total_price'           => '総額',
    'due_date'              => '期限日',
    'order_number'          => '番号',
    'bill_from'             => '宛先',

    'quantity'              => '数量',
    'price'                 => '価格',
    'sub_total'             => '小計',
    'discount'              => '割引',
    'tax_total'             => '税金',
    'total'                 => '合計',

    'item_name'             => '品物名',

    'show_discount'         => ':discount% 割引',
    'add_discount'          => '割引追加',
    'discount_desc'         => '割引小計',

    'payment_due'           => '支払',
    'amount_due'            => '支払合計',
    'paid'                  => '支払済み',
    'histories'             => '履歴',
    'payments'              => '支払',
    'add_payment'           => '支払追加',
    'mark_received'         => '受注済み',
    'download_pdf'          => 'PDFファイルダウンロード',
    'send_mail'             => 'メールへ送信',
    'create_bill'           => '請求書作成',
    'receive_bill'          => '請求書受注',
    'make_payment'          => '支払作成',

    'status' => [
        'draft'             => '下書き',
        'received'          => '受領済み',
        'partial'           => '一部',
        'paid'              => '支払済み',
    ],

    'messages' => [
        'received'          => '請求書が問題なく届きました',
        'draft'             => 'これは<b>下書き</b>請求書、受領済みのなったらチャートへ反映されます。',

        'status' => [
            'created'       => ':date　作成',
            'receive' => [
                'draft'     => '未送信',
                'received'  => '受領日 :date',
            ],
            'paid' => [
                'await'     => '支払待ち',
            ],
        ],
    ],

];
