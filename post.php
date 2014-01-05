<?php 
include('models/helper.php');
include('models/Parsedown.class.php');
include('models/theme.class.php');


$post = $_GET['p'];
$post = str_replace("-", " ", $post);

$data = array();


if (!($fichero = file_get_contents('posts/' . $post . '.md', true))) {
  echo "die";
}

$data['content'] = $result = Parsedown::instance()->parse($fichero);

$doc = new DOMDocument();

$doc->loadHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8">'.$result);
$title = $doc->getElementsByTagName('h1');
if($title->length != 1) {
  //die();
}

$data['title'] = $title->item(0)->textContent;

//Aun no se de donde sacarlos
$data['js'] = array(); 
$data['css'] = array();

$view = new Template("main_template",$data);
$view->render();


 ?>