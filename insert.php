<?php include './layouts/header.php' ?>

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
                        <input type="text" id="form8Example1" name="firstname" class="form-control" />
                        <label class="form-label" for="form8Example1">Firstname</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form8Example2" name="lastname" class="form-control" />
                        <label class="form-label" for="form8Example2">Lastname : </label>
                    </div>
                </div>
            </div>

            <hr />

            <div class="row">
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form8Example3" name="cin" class="form-control" />
                        <label class="form-label" for="form8Example3">Cin</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form8Example4" name="level" class="form-control" />
                        <label class="form-label" for="form8Example4">Level</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline">
                        <input type="date" id="form8Example5"  name="birthdate" class="form-control" />
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
<?php include './layouts/footer.php' ?>