<?php
    function ganti_kata($str,$strreplaceby,$strreplace){
        $str_array=explode($strreplace,$str);
        $newstr=implode($strreplaceby,$str_array);
        return $newstr;
    }
    echo ganti_kata("Kelampak","o","a")."<br>";
    ?>