<?php

$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
?>

<p><?php echo $my_name; ?>さんご登録ありがとうございます</p>