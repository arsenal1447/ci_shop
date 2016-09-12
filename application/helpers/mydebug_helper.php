<?php
    /**
     * @desc debug函数
     * @param $arr 需要打印的变量
     * @param string $flg
     */
    function pr($arr,$flg=''){
        if(is_array($arr)){
            echo "<pre>";
            print_R($arr);
            echo "</pre>";
        }elseif(is_string($arr)){
            echo "<br>arr==";
            echo $arr;
            echo "</br>";
        }
        if(!$flg){
            die('print end');
        }else{
            echo "<br><hr>";
        }
    }

?>