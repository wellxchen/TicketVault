<!DOCTYPE html>
<html lang="en">
  <head>

    <title>TicketVault</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/jquery.scrollgress.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/dropdown.js"></script>
   

   <!-- Bootstrap core CSS -->
    <noscript>

    <link rel="stylesheet" href="css/skel.css" />
    <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-wide.css" />

    <!-- Custom styles for this template -->
    <link href="#" rel="stylesheet">
        </noscript>
</head>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

 <?php
		include('php/Base.php');
		sub_banner();
	?>

<section id="main" class="container">
        <header>
          <h2>Search Your Stuff</h2>
        </header>
        




        <form name="search" method="get" action="searchresult.php">
          <table width="700" border="1" cellpadding="20" >
            <tr>
            <td>

                <div class="row">

                <input type="hidden" name="dff_view" value="grid">
                
                <div class="col-md-6">

                <input type="text" placeholder="Search your stuff here" name="keyword" size="60" maxlength="50"> 
                </div>

                                <div class="col-md-2">

                <select class="form-control" name="item" size="1">
                <option value="1">Sports
                <option value="2">Gaming
                <option value="3">Picnic
                <option value="4">Meeting
                <option value="5">Trip
                </select>
        </div>
                        <div class="col-md-2">

                <input type="submit" value="Find">
              </div>
                </div>
            </td>
            </tr>
          </table>

          
        </form>

  
  
      
        
      </section>







</body>
