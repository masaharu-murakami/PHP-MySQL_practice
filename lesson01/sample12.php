<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 15): ?>
    <p>※ 営業時間外です</p>
<?php else: ?>
    <p>ようこそ</p>
<?php endif; ?>

<?php
$s = '';
if ($s): // $s !== ''
    echo '$sには文字が入っています';
endif;

$x = 0;
if($x): // $x !== 0
   echo '$xは０ではありません';
endif;

$x = 0;
if (!$x): // $x === 0
   echo '$xは０です';
endif;