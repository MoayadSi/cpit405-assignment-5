<!DOCTYPE html>
<html>
    
<head>
<title>Pinterest</title>
<link rel="icon" href="https://s.pinimg.com/webapp/style/images/logo_trans_144x144-642179a1.png">
<link rel="stylesheet" type="text/css" href="MyCSSAssignment5ver2.css">
</head>

<body>
    
<?php
    require_once('./db_connection.php');
?>

<form method="post" id="addForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <img src="https://i.imgur.com/cuIF3WC.png" alt="Logo">
    <input type="text" placeholder="People are searching for Halloween decorations" size="120">
    <button>Home</Button>
    <button>Following</button>
    <button>Username123</button>
    <button>Messages</button>
    <button>Notification</button>	
    <button> Options</button>
    <button name="showImg"> CLICK HERE TO SHOW IMAGES</button>
</form>

   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['showImg'])) {
          $query = "SELECT pic FROM images";
              $result = mysqli_query($conn, $query);
              
        while($row = mysqli_fetch_array($result)){
        
            echo '<div id="imagesSection">'.'<img src="data:image/jpeg;base64,' . base64_encode( $row['pic'] ).'" />'.'</div>';
                }
            }
        }
    ?>
   
</body>
</html>
