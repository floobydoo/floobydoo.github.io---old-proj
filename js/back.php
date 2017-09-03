<?php
  $bg = array('drive.gif', 'fresh.gif', 'mondaymorning.jpg', 'sundaymorning.jpg', 'utopia.jpg', 'vape.png'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
