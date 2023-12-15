<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LDS</title>

<link rel="icon" href="../../img/icon.png" type="image/x-icon" class="favicon">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />


</head>

<body>
  <header>
    <!-- Intro settings -->
    <style>
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
      }

      @media (max-width: 991px) {
        #intro {
          /* Margin to fix overlapping fixed navbar */
          margin-top: 45px;
        }
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" id="user">
          <img src="../../img/notices/user.png" height="40" alt="" loading="lazy"
               style="margin-top: -3px;"  />
        </a>
        <i class="fas fa-hands fa-2x logoutButton" ></i>

        <i class="fas fa-circle-xmark fa-2x return"></i>
        
        </div>
      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->
  <main class="my-5">
    <div class="container">

      <!--Section: Content-->
      <section class="g-start-2" style="grid-row: 2">
        <div class="row gx-lg-5" style="justify-content:center; margin-top: 25%;">

          <form  style="width: 26rem;" id="formNot" enctype="multipart/form-data">

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" class="form-control" id="title"  name="title"></textarea>
              <label class="form-label" for="title">Titulo</label>
            </div>
            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <textarea class="form-control" id="txt" rows="4" name="txt"></textarea>
              <label class="form-label" for="txt">Message</label>
            </div>

            <label class="form-label" for="customFile">Default file input example</label>
            <input type="file" class="form-control" id="customFile" name="imagen" accept=".jpg"/>


            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4" style="margin-top:10%;">Send</button>
          </form>

        </div>
      </section>


      <!--Section: Content-->


    </div>
  </main>



  <!--Footer-->
  <footer class="bg-light text-lg-start">


    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.umd.min.js"></script>

  <script type="text/javascript" src="../../js/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/addNot.js"></script>
  <script type="text/javascript" src="../../js/user.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>