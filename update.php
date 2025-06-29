<?php include './layouts/header.php' ?>

<?php
$cin = $_GET['cin'];
$student = [];
$exist = false;
for ($i = 0; $i < count($_SESSION['students']); $i++) {
    if ($_SESSION['students'][$i]['cin'] == $_GET['cin']) {
        $student = $_SESSION['students'][$i];
        $exist = true;
        break;
    }
}
    if (!$exist) {
        print("<div class='card mt-5'>
                <div class='card-body bg-danger'>
                    <nd>Student not found</h4>
                </div>
            </div>"
        );
    } else {
       ?>
       <section class="container mt-5 ">
    <div class="row">
        <div class="card col-8">
            <form action="./details.php" method="post">
                <div class="card-header">
                    <h3> Insert student</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example1" name="firstname" class="form-control" <?php print("value='" . $student['firstname'] . "'") ?> />
                                <label class="form-label" for="form8Example1">Firstname</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example2" name="lastname" class="form-control" <?php print("value='" . $student['lastname'] . "'") ?> />
                                <label class="form-label" for="form8Example2">Lastname</label>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col">
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example3" name="cin" class="form-control" <?php print("value='" . $student['cin'] . "'") ?> />
                                <label class="form-label" for="form8Example3">Cin</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form8Example4" name="level" class="form-control" <?php print("value='" . $student['level'] . "'") ?> />
                                <label class="form-label" for="form8Example4">Level</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="date" id="form8Example5" name="birthdate" class="form-control" <?php print("value='" . $student['birthdate'] . "'") ?> />
                                <label class="form-label" for="form8Example5">Birthdate</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success"> Submit </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
    }

?>


<?php include './layouts/footer.php' ?>