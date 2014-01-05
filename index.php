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
    $fileList[$i]['date'] = date ("d/m/o", filemtime($dir. $files[$i]));
    $fileList[$i]['title'] = str_replace(".md", "", $files[$i]);
  }



  return ($fileList) ? $fileList : false;
}


$files = scan_dir('./posts/');


?>
<ul>

<?php foreach ($files as $file) : ?>
  <li>

<?php echo $file['date'] ?>
<a href="post.php?p=<?php echo $file['title'] ?>"><?php echo str_replace("-", " ", $file['title']); ?></a></li>

<?php endforeach; ?>
</ul>