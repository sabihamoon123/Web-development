<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
</head>
<body>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Student Id</th>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Student Mobile</th>
                                <th>Student Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($students as $student){?>
                            <tr>
                                <td><?php echo $student['id'] ;?></td>
                                <td><?php echo $student['name'] ;?></td>
                                <td><?php echo $student['email'] ;?></td>
                                <td><?php echo $student['mobile'] ;?></td>
                                <td><?php echo $student['image'] ;?></td>
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
    <h1>This is heading</h1>

    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>