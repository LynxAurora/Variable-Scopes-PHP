<?php
    $data = [
        [
            "nama" => "Indra",
            "nim" => 2008097801,
            "alamat" => "Semarang",
            "prodi" => "Biologi"
        ],
        [
            "nama" => "Agus",
            "nim" => 2108009405,
            "alamat" => "Tegal",
            "prodi" => "Teknologi Informasi"
        ],
        [
            "nama" => "Almira",
            "nim" => 1903096042,
            "alamat" => "Jepara",
            "prodi" => "Pendidikan Kimia"
        ],
        [
            "nama" => "Meylin",
            "nim" => 2108096076,
            "alamat" => "Solo",
            "prodi" => "Pendidikan Matematika"
        ],
        [
            "nama" => "Rona",
            "nim" => 2003026067,
            "alamat" => "Kudus",
            "prodi" => "Matematika"
        ],
        [
            "nama" => "Lutfi",
            "nim" => 1904056078,
            "alamat" => "Klaten",
            "prodi" => "Kimia"
        ],
        [
            "nama" => "Annita",
            "nim" => 2005036059,
            "alamat" => "Makasar",
            "prodi" => "Pendidikan Biologi"
        ],
        [
            "nama" => "Ady",
            "nim" => 2206027082,
            "alamat" => "Tanggerang",
            "prodi" => "Teknik Lingkungan"
        ]
    ]
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>data mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" class="stylesheet">
    <div class="container">
        <h2 class="text-center">Daftar Mahasiswa</h2>
        <table class="table table-hover table-sm table striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NIM</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                    <?php
                        foreach ($data as $datamahasiswa) : ?>
                <tr>
                    <th><?= $i ?></th>
                    <td><?=$datamahasiswa["nama"]?></td>
                    <td><?=$datamahasiswa["nim"]?></td>
                    <td><a href="detail.php?nama=<?=$datamahasiswa["nama"]?>&nim=<?=$datamahasiswa['nim']?>&alamat=<?=$datamahasiswa['alamat']?>&prodi=<?=$datamahasiswa['prodi']?>" class="badge badge bg-success">detail </a></td>
                </tr>
                <?php $i++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="login.php">Logout</a>
        <!-- end container -->
    </div>

    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
