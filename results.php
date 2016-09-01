
 
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="row">
      <div class="large-12 columns">
          <h1><a href="index.php">Welcome to Foundation</a></h1>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="callout">
         
          <div class="row">
            <div class="large-4 medium-4 columns">
             <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "videos";

$_SQL = mysqli_connect("$servername", "$username", "$password", "$database") or die($_SQL->error);
$clean = $_SQL->real_escape_string($_GET['search']);

$hello = $_SQL->query("SELECT * FROM items WHERE Titel = '$clean'") or die($_SQL->error);
$helloNum = $hello->num_rows;

if($helloNum >= 1){
    while($i = $hello->fetch_assoc()){
        echo'<a href="'.$i['Url'].'">'.$i['Titel'].' '. $i['Lengte'].' </><br>';
        echo "<a href='index.php'>Go Back</a>";
    }
}
else{
    echo "no results found<br>";
    echo "<a href='index.php'>Go Back</a>";
}
?>
          </div>
        </div>
      </div>
    </div>
      </div>
    </body>
</html>