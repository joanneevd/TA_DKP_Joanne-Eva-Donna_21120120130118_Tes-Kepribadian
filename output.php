<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- my CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Personality Test</title>
  </head>
  <body>       
       
   <!-- jumbotron -->
   <section class="jumbotron text-center bg-dark">
      <img src="img/1.jpg" alt="personality" width="250" />
      <h1 class="display-4">Personality Test</h1>
      <p class="lead">SANGUIN | MELANKOLIS | PLEGMATIS | KOLERIS</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L40,202.7C80,213,160,235,240,229.3C320,224,400,192,480,160C560,128,640,96,720,106.7C800,117,880,171,960,208C1040,245,1120,267,1200,256C1280,245,1360,203,1400,181.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- akhir jumbotron -->
   <?php
    if (isset($_POST['nama']) )
    {
    echo " ";
    }
    else
    {
      header('Location: index.html');}
    ?>
    <!-- card bio -->
    <div class="container" style="padding-bottom: 5rem;">
            <div class="row text-center">
                <div class="col">
                <h2>Biodata</h2> <br>
                Nama :
                <?php echo $nama = $_POST['nama'] ; ?><br>
                Domisili : 
                <?php echo $domisili = $_POST['domisili']; ?><br>
                Umur :
                <?php echo $umur = $_POST['umur']. " Tahun" ; ?><br>
                Jenis Kelamin : 
                <?php echo $umur = $_POST['jk']; ?><br><br>
                </div>
                </div>
                <br>
    <!-- akhir card bio -->
    <!-- card hasil -->
            <div class="row text-center">
                <div class="col">
                </div>
                <div class="row justify-content-center">
                    <div class="col offset-1">
                        <div class="card" style="width: 60rem; width: 100%; min-height: 200px;">
                            <form class="card-body">
                                <div class="card-title"style="padding: 2rem;">
                                <div class="card-text" style="color: #273036; padding-bottom: 2rem; padding-right: 2rem; padding-left: 2rem;">
                                    <?php $jk = $_POST['jk'];
                                        if ($jk == 'pria')
                                        {
                                            $hasil = 'Terima Kasih kepada Mas ' .$nama. ' telah mengisi tes kepribadian. Berikut hasilnya :';
                                            $ala = 'Mas';
                                        }
                                        else 
                                        {
                                            $hasil = 'Terima Kasih kepada Mba ' .$nama. ' telah mengisi tes kepribadian. Berikut hasilnya :';
                                            $ala = 'Mba';
                                        }              
                                        echo $hasil;
                                    ?>

<br><br>
                                    <?php
                                    include("bla.php");
                                    $user = new bla();
                                        $user->setNama ($_POST['nama']);
                                        $user->setDomisili ($_POST['domisili']);
                                        $user->setUmur ($_POST['umur']);
                                        $user->setJk ($_POST['jk']);
                            
                                    echo "Tipe Kepribadian ". $ala. " " . $user->getNama().
                                    ", yang bertempat tinggal di ". $user->getDomisili().
                                    ", dan berumur ". $user->getUmur(). " tahun".
                                    ", dengan jenis kelamin ". $user->getJk().
                                    " adalah:  ". "<br>";
                            
                                ?>
                                <br>
                                <?php 
                                
                                    $radioVal = $_POST["jawaban1"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai1 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai1 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai1 = 20;
                                    }
                                    else {
                                        $nilai1 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban2"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai2 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai2 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai2 = 20;
                                    }
                                    else {
                                        $nilai2 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban3"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai3 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai3 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai3 = 20;
                                    }
                                    else {
                                        $nilai3 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban4"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai4 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai4 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai4 = 20;
                                    }
                                    else {
                                        $nilai4 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban5"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai5 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai5 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai5 = 20;
                                    }
                                    else {
                                        $nilai5 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban6"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai6 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai6 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai6 = 20;
                                    }
                                    else {
                                        $nilai6 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban7"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai7 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai7 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai7 = 20;
                                    }
                                    else {
                                        $nilai7 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban8"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai8 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai8 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai8 = 20;
                                    }
                                    else {
                                        $nilai8 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban9"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai9 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai9 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai9 = 20;
                                    }
                                    else {
                                        $nilai9 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban10"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai10 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai10 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai10 = 20;
                                    }
                                    else {
                                        $nilai10 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban11"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai11 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai11 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai11 = 20;
                                    }
                                    else {
                                        $nilai11 = 10;
                                    }
                            
                                    $radioVal = $_POST["jawaban12"];
                            
                                    if($radioVal == "a")
                                    {
                                        $nilai12 = 40;
                                    }
                                    else if ($radioVal == "b")
                                    {
                                        $nilai12 = 30;
                                    }
                                    else if ($radioVal == "c")
                                    {
                                        $nilai12 = 20;
                                    }
                                    else {
                                        $nilai12 = 10;
                                    }
                            
                            
                                    $total = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10 + $nilai11 + $nilai12;
                            
                                    
                                    if ($total >= 410) {
                                        echo "<h3>KOLERIS</h3>". "<br>";
                                        echo "Orang yang koleris terkenal sangat cerdas, analitis, dan logis, sangat praktis dan langsung, menjadi teman baik atau orang yang ramah.";
                                    }
                                    else if ($total >= 310)
                                        {echo "<h3>SANGUINE</h3>". "<br>";
                                            echo "Orang dengan tipe kepribadian sanguine cenderung hidup, optimis, ringan, dan riang. Tipe ini juga menyukai petualangan dan memiliki toleransi tinggi akan resiko.";
                                    }
                                    else if ($total >= 210)
                                        {echo "<h3>MELANKOLIS</h3>". "<br>";
                                            echo "Tipe melankolis rata-rata mencintai keluarga dan teman-temannya. Melankolis tidak suka mencari hal-hal baru dan petualangan dan bahkan cenderung akan sangat menghindarinya.";
                                    }
                                    else  {
                                        echo "<h3>PLEGMATIS</h3>". "<br>";
                                        echo "Tipe ini biasanya mencari keharmonisan dekat yang membuat orang-orang plegmatis menjadi pasangan yang setia dan orang tua yang penuh kasih.";
                                    }
                                
                                ?>

            </div>
        </div>    
        </div>
    </div>  
    <!-- akhir card hasil -->
    </body>
    </html>
    
    
