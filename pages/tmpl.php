<?php
mb_language('ja');
mb_internal_encoding('UTF-8');

$mailTo = "ryotun_1130@yahoo.co.jp";
$subject = mb_encode_mimeheader("てすと");
$from = "From:".$outputdata["mailNo"];

//送信メッセージ
$message = <<< EOD
以下の内容がフォームより送信されました。
────────────────────────────────────
[氏名]
{$outputdata["Name"]}

[メールアドレス]
{$outputdata["mailNo"]}

[メッセージ]
{$outputdata["message"]}
────────────────────────────────────
EOD;

$message = mb_convert_encoding($message , "ISO-2022-JP", "auto");
?>
