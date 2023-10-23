 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ALL Information</title>
</head>

<body>

    <div class="w-50 m-auto ">
        <h2 class="text-center">Information list</h2>
        <a href="index.php" class="btn btn-primary mr-auto" >ADD info</a>
        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>


                </tr>

            </thead>
            <tbody>
                <?php
                include_once 'insert.php';

                $allinfo = new InformationInsert();
                if (isset($_GET['delId'])) {
                    $did = base64_decode($_GET['delId']);
                    $delstudent=$allinfo->deleteInfo($did);
                }
                 
                $data = $allinfo->allData();
                if ($data) {
                    while ($row = mysqli_fetch_assoc($data)) {
                ?>
                        <tr>
                            <th scope="row"><?= $row['id'] ?></th>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['address'] ?></td>
                            <td>
                                <a href="?delId=<?=base64_encode($row['id']) ?>" class="btn btn-danger">Delete</a>
                                <a href="edit.php?id=<?=base64_encode($row['id']) ?>" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                <?php


                    }
                }

                ?>
            </tbody>
        </table>
    </div>







</body>

</html>