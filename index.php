<?php

if(isset($_POST['submit'])){
    $nama = $_POST['nama_pelajar'];
    $noIC = $_POST['noIC_pelajar'];
    $noMatrik = $_POST['noMatrik_pelajar'];
    $kelas = $_POST['kelas'];
    

    $mysqli = new mysqli('localhost', 'root', '', 'db_pelajar');
    $stmt = $mysqli->prepare("INSERT INTO data_pelajar(nama_pelajar,noIC_pelajar,noMatrik_pelajar,kelas) VALUES(?,?,?,?)");
    $stmt->bind_param('ssss',$nama,$noIC,$noMatrik,$kelas);
    $stmt->execute();
    $msg="<div class='alert alert-success'>Booking Successfull</div>";
    $stmt->close();
    $mysqli->close();
    header("Location: simpan.php");
    die;
}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD</title>

    
  </head>

    <style>
        body{
            background: skyblue;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1,h2{
            color: black;
        }

        .form-group{
            color: black;
  
        }
        table{
            width: 100%;
        }
        th{
            width: 180px;
            color: black;
        }

        #btn{
            background-image: linear-gradient(to right, #1FA2FF 0%, #12D8FA  51%, #1FA2FF  100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          #btn:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
    </style>

  <body>
    <div class="container">
        <h2>INFO PELAJAR</h2>
        <hr>
        <div class="row">
           <div class="col-md-8">
               <?php echo(isset($msg))?$msg:""; ?>
               <form method="post">
                    <table>
                        <tr>
                            <th>Nama</th>
                            <td><input required type="text" class="form-control" name="nama_pelajar"></td>
                        </tr>
                        <tr>
                            <th>No. Kad Pengenalan</th>
                            <td><input required type="text" class="form-control" minlength="12" maxlength="12" name="noIC_pelajar"></td>
                        </tr>
                        <tr>
                            <th>No. Matrik</th>
                            <td><input required type="text" class="form-control" minlength="12" maxlength="12" name="noMatrik_pelajar"></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><input required type="text" class="form-control" name="kelas"></td>
                        </tr>
                        
                        
                    </table>
                    <div class="form-group">
                       <button id="btn"name="submit" type="submit" class="btn btn-primary">Submit</button>
                   </div>
               </form>
           </div>
            
        </div>
    </div>
   
  </body>

</html>