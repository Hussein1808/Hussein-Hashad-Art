<?php
class Index extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
