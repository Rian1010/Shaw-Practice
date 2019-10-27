<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/slate/bootstrap.min.css" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Welcome to Lesson 10</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admin.php">Admin Panel</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1>Products</h1>
        </div>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "commerce";

        # Create and Check connection
        $conn = new mysqli ($servername, $username, $password, $dbname);

        if($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        }

        $sql = "SELECT name,price,description FROM products";

        $result = $conn->query($sql);
        if($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
                echo
                "<div class='col-md-3 col-sm-6 hero-feature'>
                    <div class='thumbnail'><img src='http://placehold.it/800x500' alt=''>
                        <div class='caption'>
                            <h3>".$row['name'] . "</h3>
                            <p>".$row['price'] . "</p><p>".$row['description']."</p>
                            <p>
                                <a href='#' class='btn btn-success'>Buy Now!</a>
                                <a href='#' class='btn btn-info'>More Info</a>
                            </p>
                        </div>
                    </div>
                </div>";
            }
        }
        else{
            echo "<p>No Products to Show</p>";
        }
        $conn->close();
    ?>

</body>

</html>