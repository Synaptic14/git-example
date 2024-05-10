<?php

$flag = true;

$trueMessages = ['This is true!','Correct!'];



if($flag) {
  foreach($trueMessages as $message) {
    echo $message."<br>";
  }
} else {
  echo "The flag is false!";
}
