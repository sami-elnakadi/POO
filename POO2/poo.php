<?php

class Html{
    
    public function linkCss($css){
        echo'<p><link rel="stylesheet" type="text/css" href="'.$css.'.css"></p>';
    }

    public function meta($name,$content){
        echo'<p><meta name="'.$name.'" content="'.$content.'"/></p>';
    }

    public function image($link,$alt){
        echo'<p><img src="'.$link.'" alt="'.$alt.'"></p>';
    }

    public function link($a,$text){
        echo'<p><a href="'.$a.'">'.$text.'</a></p>';
    }

    public function script($js){
        echo'<p><script type="text/javascript" src="'.$js.'"></script></p>';
    }
}

?>