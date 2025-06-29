<?php
session_start();
?>
<?php include './layouts/header.php' ?>
<div class="container mt-5">
    <?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $cin = $_POST['cin'];
    $birthdate = $_POST['birthdate'];
    $level = $_POST['level'];
    $exist = false;

    if (!isset($_SESSION['students']))
        $_SESSION['students'] = []; // if users dosnt exist in session, create emty array users

    for ($i = 0; $i < count($_SESSION['students']); $i++) {
        if ($_SESSION['students'][$i]['cin'] === $cin) {
            // Update existing student
            $_SESSION['students'][$i] = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'cin' => $cin,
                'birthdate' => $birthdate,
                'level' => $level
            ];
            $exist = true;
            break;
        }
    }
    // If student does not exist, add new one
    if ($exist == false) {
        $_SESSION['students'][] = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'cin' => $cin,
            'birthdate' => $birthdate,
            'level' => $level
        ];
    }
    ?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5>Firstname</h5>
                    <p><?php printf($_POST['firstname']) ?></p>
                </div>
                <div class="col-6">
                    <h5>Lastname</h5>
                    <p><?php printf($_POST['lastname']) ?></p>
                </div>
                <div class="col-6">
                    <h5>Birthdate</h5>
                    <p><?php printf($_POST['birthdate']) ?></p>
                </div>
                <div class="col-6">
                    <h5>CIN</h5>
                    <p><?php printf($_POST['cin']) ?></p>
                </div>
                <div class="col-6">
                    <h5>Level</h5>
                    <p><?php printf($_POST['level']) ?></p>
                </div>
            </div>
            <div class="card-footer">
                <a href="./list.php" class="btn btn-primary">Submit</a>
            </div>
        </div>
    </div>
</div>

<?php include './layouts/footer.php' ?>