<?php 
include('models/helper.php');
include('models/Parsedown.class.php');
include('models/theme.class.php');


$post = $_GET['p'];
$post = str_replace("-", " ", $post);

$data = array();


if (!($fichero = file_get_contents('posts/' . $post . '/post.md', true))) {
  header( 'Location: /' ) ;
}

$data['content'] = $result = Parsedown::instance()->parse($fichero);

$doc = new DOMDocument();

$doc->loadHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8">'.$result);
$title = $doc->getElementsByTagName('h1');
if($title->length != 1) {
  $data['title'] = "Blog Post";
}else{
  $data['title'] = $title->item(0)->textContent; 
}

$data['folder'] = $post;

$view = new Template("post_template",$data);
$view->render();


 ?>