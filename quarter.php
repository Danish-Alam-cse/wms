<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    
    
    <div class="container">
    <a href="index.php" class="navbar-brand">WMS</a>
    <ul class="navbar-nav me-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    </ul>
       
</nav>
<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6  mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Check Which Month belongs to which quarter</h5>
                </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>Month in Number</label>
                                <input type="text" class="form-control" name="month" placeholder="Enter Months In Number">
                            </div>
                           
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-success mt-1 form-control" name="send" value="Check Quarter">
                            </div>
        </form>

                </div>
            </div>

</div>
</div>
</div>
        <?php
        if(isset($_POST['send'])):
            $month = $_POST['month'];
          
          
              $quarter = [
                  ['start' => '12-01', 'ends' => '02-28'],
                  ['start' => '03-01', 'ends' => '05-31'],
                  ['start' => '06-01', 'ends' => '08-31'],
                  ['start' => '09-01', 'ends' => '11-31'],
                  ];
          
                  function CheckQuarter($month){
                      
                      
                  if($month==12 || $month==1 || $month==2){
                      alert("Quarter1");
                      
                  }
                  elseif($month==3 || $month==4 || $month==5){
                    alert("Quarter2");
                  }
                  elseif($month==6 || $month==7 || $month==8){
                    alert("Quarter3");
                  }
                  elseif($month==9 || $month==10 || $month==11){
                    alert("Quarter4");
                     
                  }
                  else{
                      alert("Please enter valid month e.g. between 1-12");
                  }
              }
          
              CheckQuarter($month);
          
    endif;
    ?>

    

    
</body>
</html>
<?php
  

?>