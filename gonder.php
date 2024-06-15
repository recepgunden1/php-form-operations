<?php 

    if(!$_POST)
    {
        echo "Yanlış sayfa !!!!!!!!!!!!!!";
    }
    else
    {
        $isim_soyisim = $_POST["isim-soyisim"];
        $e_posta = $_POST["e-posta"];
        $konu = $_POST["konu"];
        $mesaj = $_POST["mesaj"];
        $ip = $_SERVER["REMOTE_ADDR"];
        if(!$isim_soyisim){
            echo "Lütfen isim soyisim giriniz";
        }
        else{
            if(!$e_posta){
                echo "Lütfen e-posta giriniz";
            }else{
                if(!$konu){
                    echo "Lütfen konu giriniz";
                }else{
                    if(!$mesaj){
                        echo "Lütfen mesaj giriniz";
                    }else{
                        echo("<b>İsim Soyisim:</b>".$isim_soyisim."<br>");
                        echo("<b>E-Posta:</b>".$e_posta."<br>");
                        echo("<b>Konu:</b>".$konu."<br>");
                        echo("<b>Mesaj:</b>".$mesaj."<br>");
                        echo("<b>IP:</b>".$ip."<br>");
                    }
                }
            }
        }
    }

?>