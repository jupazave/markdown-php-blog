<?php
include('models/helper.php');
include('models/theme.class.php');
include('models/MyFile.class.php');

$files = scan_dir('./posts/');

$content =  "\t<ul>\n";

foreach ($files as $file) {

  $content .=  "\t\t<li>\n\t\t\t".$file->date." <a href=\"post.php?p=".str_replace(" ", "-", $file->name)."\">".$file->name."</a>\n\t\t</li>\n";
}

$content .=  "\t</ul>";

$data['title'] = "Mi Blogh";
$data['content'] = $content;

$view = new Template("main_template",$data);
$view->render();

?>