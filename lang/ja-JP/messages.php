<?php

return [

    'success' => [
        'added'             => ':type 追加しました！',
        'updated'           => ':type 更新しました！',
        'deleted'           => ':type 削除しました！',
        'duplicated'        => ':type 重複です！',
        'imported'          => ':type インポートしました！',
        'enabled'           => ': tipo 有効！',
        'disabled'          => ': tipo 無効！',
    ],

    'error' => [
        'over_payment'      => 'エラー: 支払は追加していません。入力された金額は総額：:amount　より大きい',
        'not_user_company'  => 'エラー: あなたはこの会社を管理する権限ありません！',
        'customer'          => 'エラー: メールアドレス :name がすでに使用されている。',
        'no_file'           => 'エラー: ファイルが選択されていません！',
        'last_category'     => 'エラー: 最後のカテゴリ :type 削除はできません。',
        'invalid_token'     => 'エラー: 入力されたシンボルが無効です！',
        'import_column'     => 'エラー: :message スプレッドシート :sheet. 行番号: :line.',
        'import_sheet'      => 'エラー: スプレッドシートの使用はできません。テンプレートを確認してください。',
    ],

    'warning' => [
        'deleted'           => '警告: あなたは :text があるため、<b>:name</b>の削除権限はありません。',
        'disabled'          => '警告: あなたは :text があるため、<b>:name</b>の無効にする権限はありません。',
        'disable_code'      => '警告: あなたは :text があるため、<b>:name</b>の通貨の無効・変更にする権限はありません。',
    ],

];
