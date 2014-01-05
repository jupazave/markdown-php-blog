<?php

function scan_dir($dir) {
  $ignored = array('.', '..', '.svn', '.htaccess');

  $files = array();    
  foreach (scandir($dir) as $file) {
    if (in_array($file, $ignored)) continue;
    
    $files[$file] = filemtime($dir . '/' . $file);

  }

  arsort($files);

  $files = array_keys($files);

  for ($i=0; $i < count($files); $i++) { 
    $files[$i] = str_replace(".md", "", $files[$i]);
  }



  return ($files) ? $files : false;
}


$files = scan_dir('./posts/');


?>
<ul>

<?php foreach ($files as $file) : ?>
  <li>


<a href="post.php?p=<?php echo $file ?>"><?php echo str_replace("-", " ", $file); ?></a></li>

<?php endforeach; ?>
</ul>