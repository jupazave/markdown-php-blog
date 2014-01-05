<?php 

if (!function_exists('scan_dir')) {
  function scan_dir($dir) {
    $acepted = array('md');

    $files = array();    
    foreach (scandir($dir) as $file) {
      $ext = pathinfo($dir.$file, PATHINFO_EXTENSION);

      if (in_array($ext, $acepted)){
        $files[$file] = filemtime($dir . '/' . $file);  
      }
      
      

    }

    arsort($files);

    $files = array_keys($files);

    $fileList = array();

    if (count($files) > 10) {
      $limit = 10;
    }else{
      $limit = count($files);
    }
    

    for ($i=0; $i < $limit; $i++) {
      
      $date = date ("d/m/o", filemtime($dir. $files[$i]));
      $name = str_replace(".md", "", $files[$i]);

      $fileList[$i] = new MyFile($name, $date);
    }



    return ($fileList) ? $fileList : false;
  }
 } ?>