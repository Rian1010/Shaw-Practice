<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/slate/bootstrap.min.css" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Welcome to Lesson 10</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="admin.html">Admin Panel</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input class="form-control" type="text" id="name" name="name" />
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="text" id="price" name="price" />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" id="description" name="description" />
            </div>
            <button class="btn btn-success" type="submit">Add Product</button>
        </form>
    </div>
</body>

</html>