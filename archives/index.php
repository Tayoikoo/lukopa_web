<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lukopa Archives</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://www.freeiconspng.com/uploads/letter-l-icon-png-28.png">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
        <style>
            body{
                
            }
            .link_rel {
                text-decoration:none;
            }
        </style>
      </head>
<body>
    <header class="container-fluid fixed">
        <div class="row">
            <div class="col-12 py-1 text-center">
                <span class="display-6">Arsip</span>
            </div>
        </div>
    </header>
    <main>
        <div class="container container-fluid">
            <div class="row g-2">
                <div style="background-color:#333; color:white; border-radius:5px;">
                    <div class="col-md-12 py-6 text-center">
                        <p>Selamat Datang di arsip lukopa</p>
                        <p>website ini menyimpan arsip saya saat di Jurusan Rekayasa Perangkat Lunak</p>
                        <p>masih ada beberapa yang harus diimprove kedepannya :)</p>
                        <p>Arsip: </p>
                        <div class="col-md-12 py-6">
                        <?php
                        $test = array("tryhtml","Pra-LSP","smktest");
                        $link = array("<a class='link_rel' href='HTML test.html'>click here</a>","<a class='link_rel' href='lut_rewrite/index.php'>click here</a>","<a class='link_rel' href='smktest/index.php'>click here</a>");
                        $result = array_combine($test, $link);
                        
                        foreach($result as $list => $value) {
                            echo $list . " : " . $value . "<br>";
                        }
                        ?>
                        <br>
                        <a href="../index.php" class="link_rel">kembali</a>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br>
    <footer class="fixed footer-fluid">
        <div class="row">
          <div class="col-12 py-1 text-center">
            <span>&copy; Tayoikoo - 2023</span>
          </div>
        </div>
      </footer>
</body>
</html>