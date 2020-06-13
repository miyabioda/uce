<?php include 'header.php '?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7" id="div_bg">
            </div>
            <div class="col-md-5">
                <div class="col-9 mx-auto mt-5">

                <?php include 'includes/message.php'?>

                    <div class="card mt-5">
                        <img src="http://localhost/uce/static/image/logo.png" id="card_logo" class="mx-auto" class="img-fluid" alt="Responsive image">
                        <div class="card-header card-form">
                            <h3 class="text-center"> Send Us Your Information</h3>
                        </div>
                        <form action="includes/insert.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label >Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" required>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Your First Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Your Middle Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname"placeholder="Your Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Sex</label>
                                    <select class="form-control" id="sex" name="sex">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="number" class="form-control" id="contact" name="contact" placeholder="09xx xxx xxxx" required>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary float-right mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'?> 