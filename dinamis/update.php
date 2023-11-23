
    <link href="dinamis.css" rel="stylesheet">
    



<div class="container">

      
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                      
                        
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <a href="create.php" class="btn btn-facebook">CREATE</a>
                                    <a href="read.php" class="btn btn-facebook">READ</a>
                                    <a href="delete.php" class="btn btn-facebook">DELETE</a>
                                    
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">UPDATE</h1>
                                    </div>
                                    <form action="update.php" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user"
                                                id="" aria-describedby="emailHelp"
                                                placeholder="Ganti Nama" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="alamat" class="form-control form-control-user"
                                                id="" placeholder="Ganti Alamat" >
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="notelp" class="form-control form-control-user"
                                                id="" placeholder="Ganti Nomor Telepon" >
                                        </div>
                                        <button class="btn btn-danger" input type="submit" name="proses" value="update">UPDATE</button>
</form>
                                    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $notelp = $_POST["notelp"];

    $koneksi = mysqli_connect("localhost","root","","crud_example");
    $sql = "UPDATE user SET name='$alamat', usia='$usia', 'notelp=$notelp'WHERE nama=$nama";

    if ($koneksi->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $koneksi->close();
}
?>
                                </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>

    </div>





<style>
.col-lg-6 {
        flex: 0 0 390%;
        max-width: 100%;
    }
.table, th, td {
  border:1px solid black;
}
</style>

