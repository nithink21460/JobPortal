<?php include "header.php" ?>
        <!-- Page content -->
        <div class="content">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" 
                aria-expanded="false" aria-controls="collapseExample">
                    Post Job
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="Company Name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="" name="cname" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="exampleInputPosition" name="pos" required>
                        </div>
                        <div class="mb-3">
                            <label for="JobDesc" class="form-label">Job Description</label>
                            <textarea id="" name="" cols="30" rows="5" class="form-control" name="Jdesc" required></textarea> 
                        </div>
                        <div class="mb-3">
                            <label for="Skills" class="form-label">Skills Required</label>
                            <input type="text" class="form-control" id="skills" name="skills" required>
                        </div>
                        <div class="mb-3">
                            <label for="CTC" class="form-label">CTC</label>
                            <input type="text" class="form-control" id="CTC" name="CTC" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="job">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S_NO</th>
                        <th scope="col">COMPANY NAME</th>
                        <th scope="col">POSITION</th>
                        <th scope="col">SKILLS REQUIRED</th>
                        <th scope="col">CTC</th>
                        <th scope="col">Job Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $sql="SELECT cname,position,skills,CTC,Jdesc FROM jobs ";
                    $result=mysqli_query($conn,$sql);
                    $i=0;
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            echo "
                            <tr>
                                <td>".++$i."</td>
                                <td>".$row['cname']."</td>
                                <td>".$row['position']."</td>
                                <td>".$row['skills']."</td>
                                <td>".$row['CTC']."</td>
                                <td>".$row['Jdesc']."</td>
                            </tr>";  
                        }
                    }
                    else
                    {
                        echo "";
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>