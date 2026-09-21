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
                        <a class="nav-link" aria-current="true" href="view_member.php">Member List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addmember.php">New Member</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1>New Member</h1>
                <form method="POST" action="controller_member.php" class="w-75 mx-auto text-start">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputName" name="inputName">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="inputPhone" name="inputPhone">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="text" class="form-control" id="inputEmail" name="inputEmail">
                        </div>

                        <div class="col-md-12">
                            <label for="inputNote" class="form-label">Note</label>
                            <input type="text" class="form-control" id="inputNote" name="inputNote" placeholder="Additional information">
                        </div>

                        <div class="col-12 text-center">
                            <button name="button_register" type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>