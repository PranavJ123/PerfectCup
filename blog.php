<?php
session_start();
if(isset($_SESSION['login'])){
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup -Blog</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">Model Town | Yamunanagar, 135001 | 123.456.7890</div>

    <!-- Navigation -->
   <?php require_once 'nav.php';?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <h2 class="text-center">Welcome   <?php echo $fname; echo " "; echo $lname;?> </h2>
                  <pre>                                                                   <a class="btn btn-success" href="logout.php">Logout</a></pre>
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>JULY 9,2021</small>
                    </h2>
                    <p>Start your morning off with this great receipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Ingredients</button>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Receipe</button>

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>JULY 10,2021</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Ingredients</button>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Receipe</button>

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>ICED CARAMEL LATTE 
                        <br>
                        <small>JULY 11,2021</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with white cream,this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">Ingredients</button>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">Receipe</button>

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->


    <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ingredients -Coconut Oil Coffee</h4>
      </div>
      <div class="modal-body">
        <p>Coffee: Use your favorite coffee. This recipe will work well with freshley brewed or instant.
          <br>
Coconut oil: Use virgin coconut oil if you can as this is less processed. Regular will work though if you can’t find this.
<br>
Seasonings: These seasonings are all optional, but they are a great way to add more flavor. I like to use coconut milk, cinnamon and cayenne and finish it off with coconut cream.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Receipe -Coconut Oil Coffee</h4>
      </div>
      <div class="modal-body">
        <p>First, you start by brewing your coffee as you normally do. Then I like using a blender because it helps the stiff coconut oil to melt more quickly and smoothly with the hot coffee in the blender. Pour the coffee into the blender and add the coconut oil. Blend it up until you notice that the coffee reaches a lighter brown color and it’s basically done!.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ingredients -Irish Coffee</h4>
      </div>
      <div class="modal-body">
        <p>1) 1 cup freshly brewed hot coffee
          <br>

2) 1 tablespoon brown sugar
<br>
3) 1 jigger Irish whiskey (1 1/2 ounces or 3 tablespoons)
<br>
4) Heavy cream, slightly whipped</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Receipe -Irish Coffee</h4>
      </div>
      <div class="modal-body">
        <p>Fill footed mug or a mug with hot water to preheat it, then empty. Pour piping hot coffee into warmed glass until it is about 3/4 full. Add the brown sugar and stir until completely dissolved. Blend in Irish whiskey. Top with a collar of the whipped heavy cream by pouring gently over back of spoon. Serve hot.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ingredients -Iced Caramel Latte</h4>
      </div>
      <div class="modal-body">
        <p>1) 2 cups strongly brewed coffee (cold)<br>
2) 1/4 cup milk or half-and-half<br>
3) 2 tablespoons caramel syrup<br>
4) 1 cup ice</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Receipe -Iced Caramel Latte</h4>
      </div>
      <div class="modal-body">
        <p>Pour the coffee into a glass over ice.  Make sure it is room temperature or colder, this helps avoid the ice melting immediately.  My coffee was still a bit warm when I went to make this for I popped it in the freezer for about 10-12 minutes, checking it fairly regularly to make sure that it had not frozen.Pour caramel syrup into the coffee.Add cream to the iced coffee.  I used half and half but any creamer or milk will work.

</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
}else{
  header("location:login.php");
}
?>
