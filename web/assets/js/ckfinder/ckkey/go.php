<?
if(isset($_REQUEST['host'])){
    $ed=trim($_REQUEST['host']);
    define('CKFINDER_CHARS', '123456789ABCDEFGHJKLMNPQRSTUVWXYZ');
    $bs=explode(' ','1 2 3 4 5 6 7 8 9 A B C D E F G H J K L M N P Q R S T U V W X Y ­Z');
    mt_srand(time()+(double)microtime()*1000000);
    $ak0_1=explode(' ','2 7 C H N T Y');
    $k0_1=$ak0_1[mt_rand(0,count($ak0_1)-1)];
    $pos = 35;
    while($pos>(strlen(CKFINDER_CHARS)-1)){
        $k11_0=$bs[mt_rand(0,count($bs)-1)];
        $k8_2=$bs[mt_rand(0,count($bs)-1)];
        $pos = (strpos( CKFINDER_CHARS, $k11_0 )+strpos( CKFINDER_CHARS, $k8_2 ))*9%(strlen(CKFINDER_CHARS)-1);
    }
    $k12_3=$bs[$pos];
    $pos = 35;
    while($pos>(strlen(CKFINDER_CHARS)-1)){
        $k1_8=$bs[mt_rand(0,count($bs)-1)];
        $pos=(strpos( CKFINDER_CHARS, $k1_8 )+strlen($ed))*9%(2<<4);
    }
    $k3_6=$bs[$pos];       
    $ak0_1=explode(' ','6 7 8 E F G N P Q W X ­Y');
    $k25_7=$ak0_1[mt_rand(0,count($ak0_1)-1)];
    $key=$k0_1.$k1_8.'0'.$k3_6.'0000'.$k8_2.'00'.$k11_0.$k12_3.'000000000000'.$k25_7.'0';        
    echo "$key";
}
?>