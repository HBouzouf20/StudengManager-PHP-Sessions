<?php
session_start();
?>
<?php include './layouts/header.php' ?>
<div class="container mt-5">
    <?php
    for ($i = 0; $i < count($_SESSION['students']); $i++) {
        if ($_SESSION['students'][$i]['cin'] == $_GET['cin']) {
            $student = $_SESSION['students'][$i];
            echo <<<HTML
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h5>Firstname</h5>
                        <p>{$student['firstname']}</p>
                    </div>
                    <div class="col-6">
                        <h5>Lastname</h5>
                        <p>{$student['lastname']}</p>
                    </div>
                    <div class="col-6">
                        <h5>Birthdate</h5>
                        <p>{$student['birthdate']}</p>
                    </div>
                    <div class="col-6">
                        <h5>CIN</h5>
                        <p>{$student['cin']}</p>
                    </div>
                    <div class="col-6">
                        <h5>Level</h5>
                        <p>{$student['level']}</p>
                    </div>
                </div>
            </div>
            
        </div>
HTML;
            break;
        }
        else{
            echo <<<HTML
        <div class="card">
            <div class="card-body">
                <h3>Student not found</h3>
            </div>
          
        </div>
HTML;
        }
    }
    ?>







</div>

<?php include './layouts/footer.php' ?>