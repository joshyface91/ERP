<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container-fluid">
            <a class="nav-item nav-link" href="/dashboard">Enterprise Logo</a>

            <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu"><i class="navbar-toggler-icon"></i></a>
            <div class="navbar-collapse collapse" id="navbar-menu">
                <div class="navbar-nav container center">
                    <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" id="dropdown-inventory" data-bs-toggle="dropdown" href="#inventory">Inventory</a>
                            <div class="dropdown-menu">
                                <a href="/inventory-in" class="dropdown-item">Inventory In</a>
                                <a href="/inventory-out" class="dropdown-item">Inventory Out</a>
                            </div>
                    </div>
                        <a class="nav-item nav-link" href="/orders">Work Orders</a>
                    <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdown-transaction" href="#transaction">Transaction Ledger</a>
                            <div class="dropdown-menu">
                                <a href="accounts-paid" class="dropdown-item">Accounts Payable</a>
                                <a href="accounts-received" class="dropdown-item">Accounts Receivable</a>
                            </div>
                    </div>

                </div>
            </div>  
        </div>
            <table>
                <thead class="table">

                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->username}}</td>
                    </tr>
                    <tr>
                        <td><a class="nav-item nav-link" href="logout">Logout</a></td>
                    </tr>
                </tbody>
            </table>
    </nav>
    <!-- Title and Page Data -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Enterprise Dashboard</h4>
                <hr>    
                
            </div>
        </div>
    </div>

    <!-- Slider -->
    <!-- <div class="carousel" id="mainSlide">
        <div class="carousel-inner">
            <img src="./resources/images/slider.jpg" alt="" class="">
        </div>
    </div> -->

    <!-- Page Content -->
    <div class="container-fluid">


    </div>

    <footer class="container-fluid">


    </footer>

</body>