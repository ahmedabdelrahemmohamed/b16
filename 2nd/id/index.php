<?php
// $_POST
// $_GET
// $_REQUEST
#app

// aya
// Aya Saaed , 11111 , 011111 , Cairo Egypt , Female

// ahmed
// Ahmed Elsayed , 22222 , 022222 , Alex Egypt , Male

// john
//john Yossef , 33333 , 033333 , Cairo Egypt , Male

###################################################
// design
// revieve Id From User
// handle message

if($_POST){
    // print_r($_POST);die;
    if($_POST['id'] == 11111){
        $message = "<div class='alert alert-success'> 
        <ul>
            <li> Name : Aya Saaed </li>
            <li> Id : 11111 </li>
            <li> Phone : 011111 </li>
            <li> Address : Cairo ,Egypt </li>
            <li> Gender : Female </li>
        </ul> 
        </div>";
    }elseif($_POST['id'] == 22222){
        $message = "<div class='alert alert-success'> 
        <ul>
            <li> Name : Ahmed Elsayed </li>
            <li> Id : 22222 </li>
            <li> Phone : 012222 </li>
            <li> Address : Alex ,Egypt </li>
            <li> Gender : Male </li>
        </ul> 
        </div>";
    }elseif($_POST['id']== 33333){
        $message = "<div class='alert alert-success'> 
        <ul>
            <li> Name : john Yossef </li>
            <li> Id : 33333 </li>
            <li> Phone : 033333 </li>
            <li> Address : Cairo ,Egypt </li>
            <li> Gender : Male </li>
        </ul> 
        </div>";
    }else{
        http_response_code(404);
        $message = "<div class='alert alert-danger text-center'> 
            Not Found
        </div>";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                  Enter Your ID
              </div>
              <div class="col-4 offset-4 mt-5">
                    <form action="" method="post">
                        <div class="form-group">
                          <input type="number" name="id" id="ID" class="form-control" placeholder="Enter Your ID" aria-describedby="helpId">
                          <!-- <input type="number" name="phone" id="ID" class="form-control" placeholder="Enter You Phone" aria-describedby="helpId"> -->
                        </div>
                        <?php  if(isset($message)){
                            echo $message;
                        } ?>
                        <div class="form-group">
                           <button class="btn btn-outline-primary"> My Data </button>
                        </div>
                    </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>