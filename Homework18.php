<?php
$subjects = [
  "国語" => 46,
  "数学" => 80,
  "英語" => 78,
  "理科" => 45,
  "社会" => 30
];
$sum = 0;
foreach($subjects as $a) {
  $sum += $a;
}

echo $sum . "\n";
$avg = $sum / count($subjects);
echo $avg . "\n";
?>
