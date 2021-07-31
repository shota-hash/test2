<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print $name."さん、ご登録ありがとうございます。";