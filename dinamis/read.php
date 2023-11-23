
    <link href="dinamis.css" rel="stylesheet">
    


<div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                 
                        
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <a href="create.php" class="btn btn-facebook">CREATE</a>
                                    <a href="update.php" class="btn btn-facebook">UPDATE</a>
                                    <a href="delete.php" class="btn btn-facebook">DELETE</a>
                                    
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">READ</h1>
                                    </div>
                                    <?php
include "koneksi.php"; 

$sql = "SELECT * FROM user";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nama</th><th>Usia</th><th>Alamat</th><th>No.Telepon</th></tr>";
    
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nama"] . "</td><td>" . $row["usia"] . "</td><td>" . $row["alamat"] . "</td><td>" . $row["notelp"] . "</td></tr>";
        }
    
        echo "</table>";
} else {
    echo "0 results";
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
  float:center;
}
</style>
