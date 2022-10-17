<?php
system('clear');
$c1 = "\033[1;30m";
$c2 = "\033[1;31m";
$c3 = "\033[1;32m";
$c4 = "\033[1;33m";
$c6 = "\033[1;36m";

echo @color("red","                   
•$c3 noe999x$c1 \nOpen source script, jangan hapus atau edit sembarang code dalam script jika tidak ingin mengalami masalah error saat script dijalankan.");
sleep(2);
echo @color('red',"\n•$c3 Informasi pembelian$c1 \nTembak paket bukan berarti pembelian seharga 0 pulsa,\ntembak paket dalam artian membeli paket kuota dengan harga miring.\n");
sleep(2);
echo @color('red',"•$c3 Catatan $c1\nPembelian paket hanya 1x dalam jangka waktu kadaluarsa paket, jika membeli lebih dari 1x, kuota paket lama akan tergantikan dengan yang baru. \n");
sleep(2);
echo @color("red","•$c3 Keterangan paket $c1\nFont paket berwarna merah artinya paket koid.\n");
sleep(2);
echo @color("red","•$c3 New update v2.1$c1\nini adalah versi terakhir dari pembaruan script, saya tidak akan update lagi sc ini, error? bug? coid? fix sendiri ya, karenan ini adalah code open souce:)\n");
sleep(2);
echo @color("white","Hubungi aku ya jika ada perlu!");
sleep(2);
system('xdg-open https://facebook.com/bagasekaapr');

echo @color("grey","
\t                 .======.
\t                 |      |
\t                 |      |
\t                 |      |
\t        .========'      '========.
\t        |   _    $c6@noe999x$c1    _   |
\t        |  /_;-.__ / _\  _.-;_\  |
\t        |     `-._`'`_/'`.-'     |
\t        '========.`\   /`========'
\t                  | |  / |
\t                  |/-.(  |
\t                  |\_._\ |
\t                  | \ \`;|
\t                  |  > |/|
\t                  | / // |
\t                  | |//  |
\t                  | \(\  |
\t                  |  ``  |
\t                  |      |
\t                  |      |
\t                  |      |
\t                  |      |
\t      \\/\_ _  _\\| \//  |//_   _ \// _
\t  ^ `^`^ ^`` `^ ^` ``^^`  `^^` `^ `^\n");
echo @color('white', "Masukan nomor ");echo @color('yellow', "(ex:089xxxxxxxx) $c1: ");
$nomor = trim(fgets(STDIN));
$login = login($nomor);
echo @color('yellow', $login['message']."\n");
echo @color('white', "Kode OTP : ");
$otp = trim(fgets(STDIN));
$login = otplogin($nomor,$otp);
system('xdg-open https://facebook.com/bagasekaapr');
if (strpos(json_encode($login), '"status":true')) {
	$secret = $login['secretKey'];
	$plan = $login['callPlan'];
    $nomor = $login['msisdn'];
    $profil = profil($nomor,$plan,$secret);
    $balance = $profil['creditBalance'];
    $aktif = $profil['activeUntil'];
    $sisakuota = $profil['sumOfInternet'];
    $poin = $profil['stotalPoin'];
    $c1 = "\033[1;30m";
    $c2 = "\033[1;31m";
    $c3 = "\033[1;32m";
    $c4 = "\033[1;33m";
    $c6 = "\033[1;36m";
    system('clear');

echo @color("white","\n@noe999x");
echo @color("nevy","                   
\t                     ____  ____  ____      
\t   ____  ____  ___  / __ \/ __ \/ __ \_  __
\t  / __ \/ __ \/ _ \/ /_/ / /_/ / /_/ / |/_/
\t / / / / /_/ /  __/\__, /\__, /\__, />  <  
\t/_/ /_/\____/\___//____//____//____/_/|_|  
$c2\t•$c6 Facebook.com/noe999x$c2\n\t•$c6 Github.com/noe999x$c2\n\t•$c6 Youtube.com/c/Anonim404\n");

	echo @color('red', "\n•$c1 SISA PULSA\t: ");
	echo @color('grey', "$c4 $balance\n");
	echo @color('red', "•$c1 MASA AKTIF\t: ");
	echo @color('grey', "$c4 $aktif\n");
    echo @color('red', "•$c1 PAKET AKTIF\t: ");
    echo @color('grey', "$c4 $sisakuota\n");
    echo @color('red', "•$c1 POIN BONSTRI\t: ");
    echo @color('grey', "$c4 $poin Poin\n\n");
    cek:
    echo @color('red', "\n\t•$c3 Regular Package");
    echo @color('red', "
•$c3 1$c1 \tReward 5GB 1hari \t:$c4 Rp 1$c2
•$c3 2$c1 \t25GB 30hari (Diskon) \t:$c4 Rp 25.000$c2
•$c3 3$c1 \t25GB 24jam 20hari \t:$c4 Rp 25.000$c2
•$c3 4$c1 \t25GB 24jam 30hari \t:$c4 Rp 29.000");
    echo @color('red', "\n\t•$c3 New Package on bima+");
    echo @color('red', "
•$c3 5$c1\t(NEW) 4GB 3hari \t:$c4 Rp 5000$c2
•$c3 6$c1\t(NEW) 8GB 3hari \t:$c4 Rp 10.000$c2
•$c3 7$c1\t(NEW) 10GB 30hari \t:$c4 Rp 15.000$c2
•$c3 8$c1\t(NEW) 15GB 30hari \t:$c4 Rp 20.000$c2
•$c3 9$c1\t(NEW) 25GB 20hari \t:$c4 Rp 25.000$c2
•$c3 10$c1\t(NEW) 25GB 20hari \t:$c4 Rp 25.000$c2
•$c3 11$c1\t(NEW) 25GB 30hari \t:$c4 Rp 29.000$c2
•$c3 12$c2\t(NEW) 55GB 30hari \t:$c4 Rp 50.000$c2
•$c3 13$c1\t(NEW) 65GB 30hari \t:$c4 Rp 60.000$c2
•$c3 14$c2\t(NEW) 75GB 30hari \t:$c4 Rp 75.000$c2
•$c3 15$c1\t(NEW) 90GB 30hari \t:$c4 Rp 90.000$c2
•$c3 16$c1\t(NEW) 100GB 30hari \t:$c4 Rp 90.000");
    echo @color('red', "\n\t•$c3 AlwaysOn(AON)");
    echo @color('red', "
•$c3 17$c1\tAON 20GB\t\t: \033[1;33mRp 55.000$c2
•$c3 18$c1\tAON 50GB\t\t: \033[1;33mRp 99.000
    \n\n\n");
    echo @color('grey', "Choose : ");
    $pilih = trim(fgets(STDIN));
    switch ($pilih) {
            case '1':
            $prodid = '25669';
            break;
            case '2':
            $prodid = '22648';
            break;
            case '3' :
            $prodid = '23160';
            break;
            case '4' :
            $prodid = '23164';
            break;
            case '5' :
            $prodid = '25234';
            break;
            case '6' :
            $prodid = '25237';
            break;
            case '7':
            break;
            $prodid = '25245';
            break;
            case '8':
            $prodid = '25459';
            break;
            case '9' :
            $prodid = '25254';
            break;
            case '10' :
            $prodid = '25264';
            break;
            case '11' :
            $prodid = '25267';
            break;
            case '12':
            $prodid = '25469';
            break;
            case '13':
            $prodid = '25690';
            break;
            case '14':
            $prodid = '25473';
            break;
            case '15':
            $prodid = '25476';
            break;
            case '16':
            $prodid = '25693';
            break;
            case '17':
            $prodid = '25340';
            break;
            case '18':
            $prodid = '25341';
            break;
        
        default:
            echo @color('red', "Pilih salah satu\n\n\n");
            goto cek;
            break;
    }
    $cek = cek($prodid);
    $name = $cek['product']['productName'];
    $price = $cek['product']['productPrice'];
    $deskripsi = $cek['product']['productDescription'];
    echo @color('yellow', "Jenis Paket\t: ");
    echo @color('nevy', "$name\n");
    echo @color('yellow', "Harga\t\t: ");
    echo @color('nevy', "$price\n");
    echo @color('yellow', "Deskripsi paket\t: ");
    echo @color('nevy', "$deskripsi\n\n\n");
    echo @color('green', "Lanjutkan pembelian (y/n) : ");
    $aa = trim(fgets(STDIN));
    if(strtolower($aa) !== 'y') {
        goto cek;
    }
    $beli = beli($nomor,$plan,$secret,$prodid);
    if ($beli['status'] == true) {
        echo @color('green', "Pembelian Sukses\n");
    } else {
        echo @color('red', "Oops, sepertinya gagal. \n");
    }


} else {
    echo @color('red', $login['message']."\n");
    
}

function login($nomor){
	$host = "bimaplus.tri.co.id";        
    $data = '{"imei":"Android 93488a982824b403","language":1,"msisdn":"'.$nomor.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/otp-request', $data);
        return $ceknom;
}
function otplogin($nomor,$otp){
	$host = "bimaplus.tri.co.id";        
    $data = '{"deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","msisdn":"'.$nomor.'","otp":"'.$otp.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/login-with-otp', $data);
        return $ceknom;
}
function profil($nomor,$plan,$secret){
    $host = "bimaplus.tri.co.id";        
    $data = '{"callPlan":"'.$plan.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"msisdn":"'.$nomor.'","page":1,"secretKey":"'.$secret.'","subscriberType":"Prepaid"}';
    $ceknom = rekuest($host,"POST",'/api/v1/homescreen/profile', $data);
        return $ceknom;
}

function cek($prodid){
	$host = "my.tri.co.id";        
    $data = '{"imei":"WebSelfcare","language":"","callPlan":"","msisdn":"","secretKey":"","subscriberType":"","productId":"'.$prodid.'"}';
    $ceknom = rekuest($host,"POST",'/apibima/product/product-detail', $data);
        return $ceknom;
}

function beli($nomor,$plan,$secret,$prodid){
    $host = "bimaplus.tri.co.id";        
    $data = '{"addonMenuCategory":"","addonMenuSubCategory":"","balance":"","callPlan":"'.$plan.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"menuCategory":"3","menuCategoryName":"TriProduct","menuIdSource":"","menuSubCategory":"","menuSubCategoryName":"","msisdn":"'.$nomor.'","paymentMethod":"00","productAddOnId":"","productId":"'.$prodid.'","secretKey":"'.$secret.'","servicePlan":"Default","sms":true,"subscriberType":"Prepaid","totalProductPrice":"","utm":"","utmCampaign":"","utmContent":"","utmMedium":"","utmSource":"","utmTerm":"","vendorId":"11"}';
    $ceknom = rekuest($host,"POST",'/api/v1/purchase/purchase-product', $data);
        return $ceknom;
}

function rekuest($host, $method, $url, $data = null){ 
        $headers[] = 'Host: '.$host;
		$headers[] = 'App-Version: 4.2.6';
        $headers[] = 'Content-Type: application/json; charset=UTF-8';
        $headers[] = 'User-Agent: okhttp/4.9.0';
        
        $c = curl_init("https://".$host.$url);  
        switch ($method){
            case "GET":
            curl_setopt($c, CURLOPT_POST, false);
            break;
            case "POST":               
            curl_setopt($c, CURLOPT_POST, true);
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
            case "PUT":               
            curl_setopt($c, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
        }
        
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_HEADER, true);
        curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($c, CURLOPT_TIMEOUT, 20);
        $response = curl_exec($c);
        $httpcode = curl_getinfo($c);
        if (!$httpcode){
            return false;
        }
        else {
            $headers = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
            $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        }
        
        curl_close($c);
        $json = json_decode($body, true);
        return $json;
    }


function color($color = "default" , $text = "")
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
