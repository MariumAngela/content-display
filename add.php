<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mathematics</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add.php">Addition</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="sub.php">Subtraction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="multiply.php">Multiplication</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="div.php">Division</a>
              </li>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-lg-12">
               <table class="table table-borderless">
                    <tr>
                        <td><h3>Number 1</h3></td>
                        <td> <input id="num1" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><h3>Number 2</h3> </td>
                        <td> <input id="num2" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="addbtn()" class="btn btn-primary">ADD</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><p id="result"></p></td>
                    </tr>
               </table>
                </div>

            </div>
        </div>
    <script>
        function addbtn()
        {
           var n1=parseFloat(document.getElementById("num1").value)
           var n2=parseFloat(document.getElementById("num2").value)
           var n3= n1+n2

        document.getElementById("result").innerHTML=n3
        }
    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
</body>
</html>