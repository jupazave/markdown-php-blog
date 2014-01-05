<?php 

include('models/Parsedown.php');
include('models/theme.php');


$post = $_GET['p'];
$post = str_replace("-", " ", $post);

$data = array();


if (!($fichero = file_get_contents('posts/' . $post . '.md', true))) {
  echo "die";
}

$data['content'] = $result = Parsedown::instance()->parse($fichero);

$doc = new DOMDocument();

$doc->loadHTML($result);
$title = $doc->getElementsByTagName('h1');
foreach ($title as $tit) {
  $title = $tit->textContent;
}

$data['title'] = $title;

$view = new Template("main_template",$data);
$view->render();


 ?>