<?php
$name = "渡邉宏太朗";
if ($name = "渡邉宏太朗") {
  echo "私は 渡邉宏太朗 です.\n";
} else {
  echo "私は 渡邉宏太朗 ではありません.\n";
}

$total = 0;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total."\n";

$fluit = array("いちご","りんご","みかん","バナナ","メロン",);
foreach($fluit as $fluit) {
  echo $fluit;
  echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0) {
    echo $i;
    echo "\n";
  }
}