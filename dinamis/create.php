
    <link href="dinamis.css" rel="stylesheet">
  



<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                     
                        
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <a href="read.php" class="btn btn-facebook">READ</a>
                                    <a href="update.php" class="btn btn-facebook">UPDATE</a>
                                    <a href="delete.php" class="btn btn-facebook">DELETE</a>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">CREATE</h1>
                                    </div>
                                    <form action="" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user"
                                                id="" aria-describedby="emailHelp"
                                                placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="usia" class="form-control form-control-user"
                                                id="" placeholder="Usia">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="alamat" class="form-control form-control-user"
                                                id="" placeholder="Alamat">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="notelp" class="form-control form-control-user"
                                                id="" placeholder="Nomor Telepon">
                                        </div>
                                        <button class="btn btn-danger" input type="submit" name="proses" value="Simpan">CREATE</button>
</form>
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

</style>


    <?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into user set  
nama = '$_POST[nama]',
usia = '$_POST[usia]',
alamat = '$_POST[alamat]',
notelp = '$_POST[notelp]'");



}

?>