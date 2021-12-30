
   
<?php 
$connect = mysqli_connect('localhost','root','','sbi');

define("SITE_NAME","wms");

    session_start();


function redirect($page){
    
    echo "<script>window.open('$page.php','_self')</script>";

}

function alert($msg){
    echo "<script>alert('$msg')</script>";
}
         


