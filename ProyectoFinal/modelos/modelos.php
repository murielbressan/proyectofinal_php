<?


function get_carrito_db(){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM carritos";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $carrito[] = $row;
    }
  } else {
    echo "0 results";
  }

  return $carrito;

  mysqli_close($conn);


}
