<?php
class Index extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <h1>helo</h1>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
