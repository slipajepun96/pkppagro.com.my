<?php 
    
    $fn = "counthitdaily.txt"; 
    $fp = fopen($fn, "a+"); 
    $fs = filesize($fn); 
    $tdy = date("d/m/y"); 
    if ($fs==0) 
    { 
        $co = 1; 
        fwrite($fp, $tdy."-".$co); 
    }else{ 
        $info = fread($fp, $fs); 
        $cdata = explode("-", $info); 
        ftruncate($fp, 0); 
        if($tdy==$cdata[0]) 
        { 
            $co = $cdata[1]+1; 
            fwrite($fp, $tdy."-".$co); 
        }else{ 
            $co = 1; 
            fwrite($fp, $tdy."-".$co); 
        } 
    } 
    fclose($fp); 
    echo "Pelawat Hari Ini : $co"; 
   
?>