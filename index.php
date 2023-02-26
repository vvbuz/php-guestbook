<?php
require 'db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Guestbook</title>
</head>
    <body>
        <main class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 class="display-4 fw-bold mb-3 lh-1">Welcome to the GuestBook</h1>
                    <p class="fs-4">Glad to see you on this page! Please, fill the fields below to make your visit visible for others</p>
                </div>
                <div class="col-6">
                    <img src="src/hero.svg" alt="Guest-book" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto card p-5 position-relative shadow" style="top: -50px;">
                    <form method="POST" class="d-flex" action="guestbook.php">
                        <input class="form-control" type="text" name="name" placeholder="Your name">
                        <button class="btn btn-primary ms-3" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-10 mx-auto">
                    <table class="table">
                        <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $id = mysqli_query($db_connect, 'SELECT id FROM guestbook');
                            $name = mysqli_query($db_connect, 'SELECT name FROM guestbook');
                            $date = mysqli_query($db_connect, 'SELECT createdate FROM guestbook');
                            $id = mysqli_fetch_all($id);
                            $name = mysqli_fetch_all($name);
                            $date = mysqli_fetch_all($date);
                            for ($i = 0; $i < count($id); $i++) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $id[$i][0]; ?></th>
                                    <td><?=$name[$i][0]; ?></td>
                                    <td><?=$date[$i][0]; ?></td>
                                </tr>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <footer class="container-fluid bg-primary py-5 mt-5">
            <div class="container">
                <div class="col-6">
                    <a class="text-white link-white text-decoration-none" href="https://storyset.com/online">Online illustrations by Storyset</a>
                </div>
            </div>
        </footer>
    </body>
</html>
