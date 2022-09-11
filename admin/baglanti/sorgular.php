<?php include 'baglanti.php';
include '../fonksiyon.php';
ob_start();
session_start();

if (isset($_POST['settingsedit'])) {


$setkaydet=$db->prepare("UPDATE settings SET
 set_title=:set_title,
 set_author=:set_author,
 set_description=:set_description,
 set_keyword=:set_keyword,
 set_adres=:set_adres,
 set_tel=:set_tel,
 set_faks=:set_faks,
 set_map=:set_map,
 set_fb=:set_fb,
 set_youtube=:set_youtube,
 set_ig=:set_ig,
 set_tw=:set_tw,
 set_pinterest=:set_pinterest  WHERE set_id=1");


$update = $setkaydet->execute(array(
'set_title' => $_POST['set_title'],
'set_author' => $_POST['set_author'],
'set_description' => $_POST['set_description'],
'set_keyword' => $_POST['set_keyword'],
'set_adres' => $_POST['set_adres'],
'set_tel' => $_POST['set_tel'],
'set_faks' => $_POST['set_faks'],
'set_map' => $_POST['set_map'],
'set_fb' => $_POST['set_fb'],
'set_youtube' => $_POST['set_youtube'],
'set_ig' => $_POST['set_ig'],
'set_tw' => $_POST['set_tw'],
'set_pinterest' => $_POST['set_pinterest']
));

if($update) {
	header("Location:../settings.php?status=ok");
} else {
	header("Location:../settings.php?status=no");
}

}


if (isset($_POST['adminsubmit'])) {

    $admin_ad=$_POST['admin_ad'];
    $admin_pass=($_POST['admin_pass']);

    $adminsorgula=$db->prepare("SELECT * FROM adminler where admin_ad=:ad and admin_pass=:pass");
    $adminsorgula->execute(array(
    'ad' => $admin_ad,
    'pass' => $admin_pass
    ));
    echo $count=$adminsorgula->rowCount();
    
    if ($count==1) {

        $_SESSION['admin_ad']=$admin_ad;
        header("Location:../main.php");
        exit;
    }else {
        header("Location:../index.php?durum=no");
        exit;
    }
     
}



if ($_GET['admindelete']=="ok") {

    $delete=$db->prepare("DELETE from adminler WHERE admin_id=:id");
    $kontrol=$delete->execute(array('id' => $_GET['admin_id']));


    if ($kontrol) {


        Header("Location:../adminbilgi.php?delete=ok");


    } else {

        Header("Location:../adminbilgi.php?delete=no");

    }

}


if (isset($_POST['adminedit'])) {

    $admin_id=$_POST['admin_id'];

    $setkaydet=$db->prepare("UPDATE adminler SET admin_ad=:admin_ad, admin_pass=:admin_pass WHERE admin_id={$_POST['admin_id']}");

    $update=$setkaydet->execute(array(
        
        'admin_ad' => $_POST['admin_ad'], 'admin_pass' => $_POST['admin_pass']
        ));


    if ($update) {

        Header("Location:../adminedit.php?admin_id=$admin_id&status=ok");

    } else {

        Header("Location:../adminedit.php?admin_id=$admin_id&status=no");
    }

}




if ($_GET['menudelete']=="ok") {

    $delete=$db->prepare("DELETE from menu where menu_id=:id");
    $kontrol=$delete->execute(array(
        'id' => $_GET['menu_id']
        ));


    if ($kontrol) {header("location:../menu.php?delete=ok");} 
    else {header("location:../menu.php?delete=no");}

}



if (isset($_POST['menuedit'])) {

    $menu_id=$_POST['menu_id'];

    $menu_seourl=seo($_POST['menu_ad']);

    
    $setkaydet=$db->prepare("UPDATE menu SET
        menu_ad=:menu_ad,
        menu_detay=:menu_detay,
        menu_url=:menu_url,
        menu_sira=:menu_sira,
        menu_seourl=:menu_seourl,
        menu_durum=:menu_durum
        WHERE menu_id={$_POST['menu_id']}");

    $update=$setkaydet->execute(array(
        'menu_ad' => $_POST['menu_ad'],
        'menu_detay' => $_POST['menu_detay'],
        'menu_url' => $_POST['menu_url'],
        'menu_sira' => $_POST['menu_sira'],
        'menu_seourl' => $menu_seourl,
        'menu_durum' => $_POST['menu_durum']
        ));


    if ($update) {

        Header("Location:../menuedit.php?menu_id=$menu_id&status=ok");

    } else {

        Header("Location:../menuedit.php?menu_id=$menu_id&status=no");
    }

}



if (isset($_POST['sliderkaydet'])) {


    $uploads_dir = '../../img/slider';
    @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
    @$name = $_FILES['slider_resimyol']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);  
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
    $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
    


    $kaydet=$db->prepare("INSERT INTO slider SET
        slider_ad=:slider_ad,
        slider_sira=:slider_sira,
        slider_link=:slider_link,
        slider_resimyol=:slider_resimyol
        ");
    $insert=$kaydet->execute(array(
        'slider_ad' => $_POST['slider_ad'],
        'slider_sira' => $_POST['slider_sira'],
        'slider_link' => $_POST['slider_link'],
        'slider_resimyol' => $refimgyol
        ));

    if ($insert) {

        Header("Location:../slider.php?durum=ok");

    } else {

        Header("Location:../slider.php?durum=no");
    }




}



if (isset($_POST['slideredit'])) {

    
    if($_FILES['slider_resimyol']["size"] > 0)  { 


        $uploads_dir = '../../img/slider';
        @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
        @$name = $_FILES['slider_resimyol']["name"];
        $benzersizsayi1=rand(20000,32000);
        $benzersizsayi2=rand(20000,32000);
        $benzersizsayi3=rand(20000,32000);
        $benzersizsayi4=rand(20000,32000);
        $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
        $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

        $edit=$db->prepare("UPDATE slider SET
            slider_ad=:ad,
            slider_link=:link,
            slider_sira=:sira,
            slider_durum=:durum,
            slider_resimyol=:resimyol   
            WHERE slider_id={$_POST['slider_id']}");
        $update=$edit->execute(array(
            'ad' => $_POST['slider_ad'],
            'link' => $_POST['slider_link'],
            'sira' => $_POST['slider_sira'],
            'durum' => $_POST['slider_durum'],
            'resimyol' => $refimgyol,
            ));
        

        $slider_id=$_POST['slider_id'];

        if ($update) {

            $resimsilunlink=$_POST['slider_resimyol'];
            unlink("../../$resimsilunlink");

            Header("Location:../slideredit.php?slider_id=$slider_id&status=ok");

        } else {

            Header("Location:../slideredit.php?status=no");
        }



    } else {

        $duzenle=$db->prepare("UPDATE slider SET
            slider_ad=:ad,
            slider_link=:link,
            slider_sira=:sira,
            slider_durum=:durum     
            WHERE slider_id={$_POST['slider_id']}");
        $update=$duzenle->execute(array(
            'ad' => $_POST['slider_ad'],
            'link' => $_POST['slider_link'],
            'sira' => $_POST['slider_sira'],
            'durum' => $_POST['slider_durum']
            ));

        $slider_id=$_POST['slider_id'];

        if ($update) {

            Header("Location:../slideredit.php?slider_id=$slider_id&status=ok");


        } else {

            Header("Location:../slideredit.php?status=no");
        }
    }

}



if ($_GET['sliderdelete']=="ok") {
    
    $delete=$db->prepare("DELETE from slider where slider_id=:slider_id");
    $kontrol=$delete->execute(array(
        'slider_id' => $_GET['slider_id']
        ));

    if ($kontrol) {

        $resimsilunlink=$_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../slider.php?durum=silindi");

    } else {

        Header("Location:../slider.php?durum=hata");
    }

}
?>