<?php
require 'db.php';
session_start();
$select_data = "SELECT * FROM users";
$select_users =  mysqli_query($db_connection, $select_data);

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
        .icon button {
            width: 60px;
            text-align: center;
            border: none;
        }

        .iconn button {
            color: black;
            width: 60px;
            text-align: center;
            border: none;
        }

        .icon:hover {
            color: red;
        }

        .iconn:hover {
            color: red;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto mt-4 p-4">
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
                            <?php foreach ($select_users as $key => $user) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td>
                                        <button data-id="delete_user.php?id=<?= $user['id'] ?>" class="iconn delete_btn" href=""><i class="iconn fa fa-trash" aria-hidden="true"></i></button>

                                        <button><i class="icon fa-solid fa-pen-to-square"></i></button>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('.delete_btn').click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Once You Delete It You Cannot Recover the Files",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#605b5b',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    link = $(this).attr('data-id');
                    window.location.href = link;

                }
            })
        });
    </script>
    <?php if (isset($_SESSION['deleteMsg'])) { ?>
        <script>
            Swal.fire(
                'Deleted!',
                '<?= $_SESSION['deleteMsg']?>',
                'success'
            )
        </script>
    <?php }
    unset($_SESSION['deleteMsg']); ?>

</body>
</html>