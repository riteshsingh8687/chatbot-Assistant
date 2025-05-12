<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">


    <title>Table with database</title>
    <style type="text/css">
     
        table{ 
          border-bottom:1px solid;
          border-collapse: collapse;
          width:100%;
          color:#588c7e;
          font-family:arial;
          font: size 25px;
          text-align:center;
        }
        th, td {
            padding: 10px 20px; /* Same padding for both */
            text-align: left;   /* or 'center', 'right' depending on need */
        }
        th{
          background-color: #588c7e;
          color: white;
         }
        
        tr:nth-child(even) {background-color:#f2f2f2}
        
        h1{
          text-align:center;
          background-color:rgb(231, 241, 238);
          color:black;
        }
        .navbar
{
    background-image: linear-gradient(to right,rgb(209, 219, 213),#588c7e);
    padding: 0 !important;
    height:50px;
}
    </style>
</head>
<body>

 <!-- Navbar Start -->
 <section id="nav-bar">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="WHO_logo.svg.png" height="40px" width="150%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../home.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <!-- Navbar End -->

<h1>Contact Record</h1>
      <table>
        <tr>
          <th> Id</th>
          <th> First_Name</th>
          <th> Last_Name</th>
          <th> email </th>
          <th> Phone_Number </th>
          <th> State</th>
          <th> City </th>
          <th> Gender </th>
      </tr>
    <?php
    $conn= mysqli_connect("localhost","root","Ritesh@8687","chatbot"); 
    if($conn-> connect_error) {
      die("connection failed:".$conn-> connect_error);
    }

    $sql = "SELECT id,First_Name, Last_Name, email, Phone_number, State, City, gender from contact";
    $result = $conn->query($sql);

    if ($result-> num_rows > 0){
      while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["id"]. "</td><td>". $row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["email"]."</td><td>".$row["Phone_number"]."</td><td>".$row["State"]."</td><td>".$row["City"]."</td><td>".$row["gender"]."</td></tr>";   
         }
        echo "</table>";
       }
    else {
      echo "0 result";
    }
    $conn-> close();
    ?>
    </table>
</body>
</html>