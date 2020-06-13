<?php include 'header.php'?>
<?php include 'includes/select.php'?>
    <div class="container-fluid">
        <div class="col-md-10 mx-auto mt-5">
        <?php include 'includes/message.php'?>
            <table class="table table-bordered ">
                <thead class="bg-warning">
                    <tr>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Sex</th>
                        <th>Contact Number</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($queryResult as $i): ?>
                        <tr>
                            <td><?=$i['email']?></td>     
                            <td><?=$i['fname']?></td>     
                            <td><?=$i['mname']?></td>     
                            <td><?=$i['lname']?></td>     
                            <td><?=$i['sex']?></td>     
                            <td><?=$i['contact']?></td> 
                            <td class="text-center">
                                <a href="player_update.php?id=<?=$i['id']?>" class="btn btn-outline-primary mr-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i> Edit</a>
                                <a href="includes/delete.php?id=<?=$i['id']?>" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                            </td>    
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
<?php include 'footer.php'?>