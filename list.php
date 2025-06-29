<?php include './layouts/header.php' ?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1>Students</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Cin</th>
                        <th scope="col">Level</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($_SESSION['students']); $i++) { ?>
                        <tr>
                            <th scope="row"><?php printf($i + 1) ?></th>
                            <td><?php printf($_SESSION['students'][$i]['firstname']) ?></td>
                            <td><?php printf($_SESSION['students'][$i]['lastname']) ?></td>
                            <td><?php printf($_SESSION['students'][$i]['birthdate']) ?></td>
                            <td><?php printf($_SESSION['students'][$i]['cin']) ?></td>
                            <td><?php printf($_SESSION['students'][$i]['level']) ?></td>
                            <td>
                                <a class="btn btn-success btn-sm btn-rounded" <?php print("href='update.php?cin=".$_SESSION['students'][$i]['cin']."')"); ?>>
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include './layouts/footer.php' ?>