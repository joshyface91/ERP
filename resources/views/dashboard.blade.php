<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container-fluid">
            <a class="nav-item nav-link" href="#">Enterprise Logo</a>

            <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu"><i class="navbar-toggler-icon"></i></a>
            <div class="navbar-collapse collapse" id="navbar-menu">
                <div class="navbar-nav container center">
                    <a class="nav-item nav-link" href="#inventory">Inventory</a>
                    <a class="nav-item nav-link" href="#orders">Work Orders</a>
                    <a class="nav-item nav-link" href="#transaction">Transaction Ledger</a>
                </div>
            </div>  
        </div>
            <table>
                <thead class="table">

                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->username}}</td>
                        <td><a href="logout">Logout</a></td>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>