<?php
    // Call file in line
    include 'db.php';
    // Create object / instance
    $db = new Database();
    $con=$db->Connect();
    // Variabel GET URL
    // $name=$_GET['nama'];
    // Process GET query
    $rows=mysqli_query($con,"select * from chatbox ");
    $data=array();
    $no=0;
    foreach($rows as $row)
    {
        $data[]=$row;
        $no=$no+1;
    }

    // Process encription data
    $dataGet=json_encode($data);

    // Process description data
    $mhs=json_decode($dataGet);

    // View with looping use index array
    for ($i = 0; $i < $no; $i++) {
        echo '<b>'.$mhs[$i]->nama.'</b>'.'<br>'; 
        echo $mhs[$i]->text_chat.''; 
        echo "<div style='font-size:7px;'>".$mhs[$i]->tgl."</div>"; 
        
      }


?>