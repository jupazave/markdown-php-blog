<?php 

if (!function_exists('scan_dir')) {
  function scan_dir($dir) {
    $ignored = array('md','.','..','index.html');

    $files = array();    
    foreach (scandir($dir) as $file) {
      $ext = pathinfo($dir.$file, PATHINFO_EXTENSION);

      if (!in_array($ext, $ignored) && !in_array($file, $ignored) ){
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
 } 

if (!function_exists('get_base_url')) {
  function get_base_url()
  {
    $base_url= ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
    $base_url .= "://".$_SERVER['HTTP_HOST'];
    $base_url.= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
    return $base_url;
  }
}
 ?>