<?php
// PHP 5
class Template {
    private $args;
    private $file;

    public function __get($name) {
        return $this->args[$name];
    }

    public function __construct($file, $args = array()) {
        $this->file = "./views/".$file.".php";
        $this->args = $args;
    }

    public function render() {
        include $this->file;
    }
}
?>