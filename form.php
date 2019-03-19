<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="bg-image"></div>
    <div class="container-fluid as-full">
        <div class="row as-full d-flex justify-content-center">
            <div class="col-md-4 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Welcome</h2>
                        </div>
                        <form method="POST" name="form">

                            <input type="text" name="nama" placeholder="Inputkan Nama" id="nama" class="form-control">
                            <span id="error_nama" class="text-muted">

                            </span>

                            <br>


                            <input type="text" name="nim" id="nim" placeholder="Inputkan NIM" class="form-control">
                            <span id="error_nim" class="text-muted">

                            </span>

                            <br>
                            <input type="button" class="btn btn-primary btn-block" onclick="kirim()" value="Kirim">

                            <?php
                                if(isset($_POST["nama"]) && $_POST["nama"] && $_POST["nim"]){
                                echo "<br>Nama : ".$_POST["nama"];
                                echo "<br>NIM : ".$_POST["nim"];
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>






    <script>
        function kirim() {
            var form = document.getElementsByName("form");
            var nama = document.getElementById("nama").value;
            var nim = document.getElementById("nim").value;
            if (nama != "" && nim != "") {
                form[0].submit();
            } else {
                if (nama == "") {
                    document.getElementById("error_nama").innerHTML = "Nama jangan dikosongkan";
                }
                if (nim == "") {
                    document.getElementById("error_nim").innerHTML = "NIM jangan dikosongkan";
                }
            }
        }
    </script>

</body>

</html>