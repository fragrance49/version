<?php

  $text = $_GET['HomePage'];

header("Location: index.php?from=HomePage&QueryPage=".$text);
exit();