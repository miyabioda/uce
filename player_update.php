<?php include 'header.php'?>
<?php include 'includes/update.php'?>
    <div class="container-fluid">
        <div class="col-md-4 mx-auto mt-5">
            <div class="card mt-5 mb-5">
                <img src="http://localhost/uce/static/image/logo.png" id="card_logo" class="mx-auto" class="img-fluid" alt="Responsive image">
                <div class="card-header card-form">
                    <h3 class="text-center"> Update Information</h3>
                </div>
                <?php foreach($queryResult as $i): ?>
                    <form action="player_update.php?id=<?=$i['id']?>" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label >Email address</label>
                                <input type="email" class="form-control" value="<?=$i['email'];?>" id="email" name="email" placeholder="example@email.com">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" value="<?=$i['fname'];?>" id="fname" name="fname" placeholder="Your First Name">
                            </div>
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" value="<?=$i['mname'];?>" id="mname" name="mname" placeholder="Your Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" value="<?=$i['lname'];?>"id="lname" name="lname"placeholder="Your Last Name">
                            </div>
                            <div class="form-group">
                                <label for="">Sex</label>
                                <select class="form-control" id="sex" name="sex" value="<?=$i['sex'];?>">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" value="<?=$i['contact'];?>"id="contact" name="contact" placeholder="09xx xxx xxxx">
                            </div>
                            <button type="submit" class="btn btn-outline-secondary float-right mt-3">Submit</button>
                            <a href="player.php" class="btn btn-outline-primary float-right mt-3 mr-3">Cancel</a>
                        </div>
                    </form>
                <?php endforeach ?>
            </div>
        </div>
    </div>

<?php include 'footer.php'?>