<?php
//Hat tips to @dzonerzy
error_reporting(E_ALL);
ini_set('display_errors', '1');

function in($s, $f){
   if (preg_match('/'.$f.'/i',$s)){
      return 1;
   }else{
      return 0;
   }
}

Class StyleEditor{
    public $filepath;
    public $fullpath;
    public $auditor;
    
    function __construct($fp){
        $this->auditor  = new SecurityCheck;
        $this->filepath = $fp;
        $this->fullpath = $this->get_path();
    }
    
    public function exists(){
        if (isset($this->filepath)) {
            return file_exists($this->filepath);
        }
    }
    
    public function fix_path_traversal(){
        return preg_replace("/([.]+\/)/", "", $copy_date);
    }
    
    public function get_safe(){
        return htmlspecialchars($this->filepath);
    }
    
    public function set_file_path($val){
        $this->filepath = $val;
    }
    
    public function set_full_path($val){
        $this->fullpath = $val;
    }
    
    public function get_path(){
        return realpath($this->get_safe());
    }
    
    public function get_content(){
        return htmlspecialchars(file_get_contents($this->get_path()));
    }
    
    public function get(){
        return $this->filepath;
    }
    
    function __wakeup(){
      $badwords = array(
                     "eval",
                     "passthru",
                     "system","
                     shell_exec",
                     "popen",
                     "preg_match",
                     "preg_replace",
                     "dl",
                     "fwrite",
                     "file_put_contents",
                     "exec",
                     "fputs",
                     "`",
                     "require",
                     "include",
                     "include_once",
                     "require_once"
               );
        foreach ($this->auditor->attacks as $attack) {
         foreach ($badwords as $hackattempt){
            if(in($this->auditor->replace, $hackattempt)){
               die("WAF");
            }
         }
         $this->fullpath = @preg_replace("/". $attack , $this->auditor->replace , $this->fullpath);
        }
    }
}


Class SecurityCheck {
    public $attacks = array("([.]+\/)/", "(\\x00)$/");    
    public $replace = './';    
    public function get_attacks()
    {
        return $this->attacks;
    }    
}
?>
