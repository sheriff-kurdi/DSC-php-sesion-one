<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<?php
require "conn.php";

$query = "select * from users;";
$run_query = mysqli_query($conn, $query);

if ($run_query) {
    // echo 'runned';
}
?>

<a href="create.html" class="btn btn-primary"> Create  </a> 

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($run_query as $element) {
        ?>


            <tr>
                <td><?php echo $element['name'] ?></td>
                <td><?php echo $element['pass'] ?></td>
                <td>
                <a href="delete.php?code=<?php echo $element['id']; ?>" class=""> Delete  </a> |
                <a href="updateForm.php?code=<?php echo $element['id']; ?>" class=""> Update  </a>

                </td>


            </tr>

        <?php
        }

        ?>