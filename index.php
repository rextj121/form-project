<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- links -->
    <link rel="stylesheet" href="./includes/bootstrap/css/bootstrap.min.css">
</head>
<body>


    <div class="container col-md-6"> 
        <form action="process.php" method="post">
            <div class="form-group">
                    <input name="name"  type="text" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <input name="email"  type="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <input name="tel"  type="text" class="form-control" placeholder="Enter tel">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="password" placeholder="Enter Password">
            </div> 
            <div>
                <button name="submit" class="btn btn-primary" type="submit">Submit</button>                            
            </div>

        </form>
    </div> 
 
</body>
</html>