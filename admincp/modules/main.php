<section id="main-content">
    <section class="wrapper">
        <h2>Chào mừng bạn đến với ADMIN</h2>
    </section>
    <div class="main">
 <?php
    if(isset($_GET['action']) && $_GET['query']){
      $tam = $_GET['action'];
      $query = $_GET['query'];
    }else{
       $tam = '';
       $query = '';
    }
    if($tam=='quanlydanhmucsanpham' && $query=='them'){
        include("modules/quanlydanhmucsp/them.php");
        include("modules/quanlydanhmucsp/lietke.php");
    }elseif ($tam=='quanlydanhmucsanpham' && $query=='sua'){
        include("modules/quanlydanhmucsp/sua.php");

    }elseif ($tam=='quanlysp' && $query=='them'){
        include("modules/quanlysp/them.php");
        include("modules/quanlysp/lietke.php");
    }elseif($tam=='quanlysp' && $query=='sua'){
        include("modules/quanlysp/sua.php");

    }elseif($tam=='quanlydonhang' && $query=='lietke'){
        include("modules/quanlydonhang/lietke.php");
    }elseif($tam=='donhang' && $query=='xemdonhang'){
        include("modules/quanlydonhang/xemdonhang.php");

    }elseif($tam=='quanlytintuc' && $query=='them'){
        include("modules/quanlytintuc/them.php");
        include("modules/quanlytintuc/lietke.php");
    }elseif($tam=='quanlytintuc' && $query=='sua'){
        include("modules/quanlytintuc/sua.php");
        
    }else{  
        include("modules/dashboard.php");
    }
 ?>
</div>
</section>