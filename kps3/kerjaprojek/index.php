<?php
date_default_timezone_set("Asia/Jakarta"); 
include 'config.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Use the full timestamp with date and time
    $current_timestamp = date('Y-m-d');

    $sql = "INSERT INTO komentar (name, email, message, timestamp) 
            VALUES ('$name', '$email', '$message','$current_timestamp')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- ... rest of your HTML code ... -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--css-->
    <link rel="stylesheet" href="cssnyabos.css" />

    <title>Artistika Inkernas</title>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" >Artistika Inkernas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link list" aria-current="page" href="#carouselExampleControls" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link list" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link list" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link list" href="#contactus">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link list" href="#feedback">Feedback</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->

    <!--slide-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/produk.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
    </div>
    <!--akhir slide-->

    <!--about us-->
    <div class="aboutus" id="aboutus">
      <section>
        <div class="container p-3 col-11">
          <h1 class="text-center">About Us</h1>
          <p class="text-center" style="font-size: 20px;">
            PT. ARTISTIKA INKERNAS didirikan pada tahun 1972, memproduksi Heavy duty split tiles. Dengan filosofi "kualitas adalah segalanya" yang dijalankan secara konsisten oleh seluruh jajaran Direksi, Staff dan Karyawan, produk Keramik
            Artistika dapat bertahan di pasaran domestik dan internasional. Produk yang dihasilkan adalah keramik lantai dan bentuk-bentuk khusus. Dengan proses produksi secara ekstrusi sehingga menghasilkan keramik split heavy duty yang
            berkualitas tinggi, memiliki kekuatan lentur (bending strength) yang tinggi serta tahan asam dan basa.
          </p>
        </div>
      </section>
      
      <section>
        <div class="container p-3 col-11">
          <h2 class="text-center">Visi</h2>
          <p class="text-center" style="font-size: 20px;">Menjadi Produsen keramik terkemuka di Indonesia</p>
        </div>
      </section>
        
      <section>
        <div class="container p-3 col-11">
          <h2 class="text-center">Misi</h2>
          <div class="text-center" style="font-size: 20px;">
            <p>1. Menghasilkan keramik heavy duty yang berkualitas tinggi</p>
            <p>2. Memberikan pelayanan terbaik bagi pelanggan</p>
          <br>
          <br>
        </div>
      </section>
    </div>
    <!--akhir about us-->

    <!--product-->
    <div class="product" id="product">
      <section class="container">
        <h1 class="text-center">Produk</h1>

        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">Keramik Badan</h3>
                <img src="img/keramikmerahbadan.png" width="400px" class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#badan"><a href="product.html#badan" class="text-white" style="text-decoration: none;">Selengkapnya</a></button>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">Keramik Bentuk</h3>
                <img src="img/keramikmerahbentuk.png" width="400px" class="container">
                <button a type="button" class="btn btn-primary" data-bs-toggle="modal"href="product.html"><a href="product.html#bentuk" class="text-white" style="text-decoration: none;" >Selengkapnya</a></button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <br>

    <!--akhir product-->

    <!--contact us-->
    <div class="contactus" id="contactus">
      <section class="container">
        <h1 class="text-center">Contact Us</h1>

        <div class="d-flex">
          <div>
            <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header">Contact</div>
              <div class="card-body">
                <p class="card-text">Jalan Tipar no.64, Cakung. Jakarta Timur, Jakarta 13910</p>
                <p class="card-text">Telepon. : +62 21 4600 471</p>
                <p class="card-text">WhatsApp: +62 896 2959 4780</p>
                <p class="card-text">Instagram : artistika.inkernas</p>
                <p class="card-text">E-mail : artceram2000@gmail.com</p>
              </div>
            </div>  
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Our Team
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Nina Juanita</li>
                <li class="list-group-item">Irna Ariyani</li>
                <li class="list-group-item">Heru Nurhad</li>
              </ul>
            </div>
          </div>
          <div class="px-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.79559579167!2d106.93616200000001!3d-6.171056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698adfeb888bed%3A0x3c53e761b57487b!2sPT%20Artistika%20Inkernas!5e0!3m2!1sen!2sid!4v1699847153830!5m2!1sen!2sid" width="800" height="464" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <br>
        <br>
      </section>
    </div>      
    
    <!--akhir contact-->
    

    <!--feedback-->
    <div class="feedback" id="feedback">
      <section class="container">
    <h1 class="text-center">Feedback</h1>
    <br>
<div class="d-flex">
    <div class="container col-sm-6">
    <form method="post" action="#feedback">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com" name='email' required>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment" name="message" ></textarea>
</div>
        <button type="submit" class="btn btn-warning" name="submit">Submit</button>
    </form>
</div>

<br>

<div class="border rounded container col-sm-6">
        <?php
            // date_default_timezone_set("Asia/Jakarta");

            $sql = "SELECT * FROM komentar";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // output data of each row
                    $timestamp = strtotime($row['timestamp']);
                    $formatted_timestamp = date('d M Y', $timestamp);
        ?>
                    <div>
                        <h3 id="name"><?php echo $row['name']; ?></h3>
                        <p id="message"><?php echo $row['message']; ?></p>
                        <p>Posted on: <?php echo $formatted_timestamp; ?></p>
                    </div>
        <?php
                }
            }
        ?>
    </div>
<!-- 
<?php

$sql = "SELECT * FROM komentar";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // output data of each row
        $timestamp = strtotime($row['timestamp']);
        $formatted_timestamp = date('d M Y ', $timestamp);

        ?>
        <div>
            <h3 id="name"><?php echo $row['name']; ?></h3>
            <p id="message"><?php echo $row['message']; ?></p>
            <p>Posted on: <?php echo $formatted_timestamp; ?></p>
        </div>
        <?php
    }
}
?>

    -->
  </div>
</div>
  </section>
    </div>

    <!--akhir feedback-->

  <br>










<script>
		//PESAN
		var sensor = ["ajg", "bot", "cuki", "anjing", "jelek", "kemem", "bangsat", "kontol", "peler", "pler", "meki", "memek", "ngentot", "babi", "ayam", "jenglot", "kimak", "xxx", "Anjing", "goblok",  ]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('p#message');


		replaceTextInElements(messageElements);

		//NAMA
		var sensor = ["anjing", "jelek", "kemem", "bangsat", "kontol", "peler", "pler", "memek", "ngentot", "babi", "ayam", "jenglot", "xxx"]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('h3#name');


		replaceTextInElements(messageElements);
	</script>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 3) {
          counter = 1;
        }
      }, 5000);
    </script>

    <script src="script.js" ></script>

  </body>
</html>
