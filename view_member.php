<?php require("controller_member.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Membership</title>
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="view_member.php">Member List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addmember.php">New Member</a>
                    </li>
                </ul>
            </div>
            <div class="container p-3">
                <h1>Membership</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Note</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 0;
                        $allmembers = getAllMembers(); //memanggil fungsi getAllMembers dari controller_member.php
                        foreach ($allmembers as $index => $member) {
                            $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?= $counter; ?></th>
                                <td><?= $member->name; ?></td>
                                <td><?= $member->phone; ?></td>
                                <td><?= $member->email; ?></td>
                                <td><?= $member->note; ?></td>
                                <td>
                                    <a href="view_updatemember.php?updateID=<?= $index; ?>">
                                        <button class="btn btn-warning">Update</button>
                                    </a>
                                    
                                    <a href="controller_member.php?deleteID=<?= $index; ?>">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
</body>

</html>