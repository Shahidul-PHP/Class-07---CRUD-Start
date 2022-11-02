<?php

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Active users</title>
    <style>
        .icon {
            margin-left: 20px;
        }

        .icon:hover {
            color: red;
            font-size: 19px;
        }

        .iconn:hover {
            color: red;
            font-size: 19px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto mt-4 p-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">User List</h3>
                    </div>
                    <div class="card-body">
                        <table class="text-capitalize table table-striped">
                            <tr>
                                <th>SL </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>shovon</td>
                                <td>admin@gmail.com</td>
                                <td>
                                    <i class="iconn fa fa-trash" aria-hidden="true"></i>
                                    <i class="icon fa-solid fa-pen-to-square"></i>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






























    <!--  Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>