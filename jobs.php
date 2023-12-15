<?php include "header.php" ?>
<div class="content">
<table class="table">
    <thead>
        <tr>
			<th scope="col">S_NO</th>
            <th scope="col">CANDIDATE NAME</th>
            <th scope="col">POSITION</th>
            <th scope="col">YEAR PASSOUT</th>
        </tr>
    </thead>
	<tbody>
    <?php
    $sql="Select name,apply,year from candidates";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0)
    {
      while($rows=$result->fetch_assoc())
      {
        echo
        '
          <tr>
          <th scope="row">'.++$i.'</th>
          <td>'.$rows['name'].'</td>
          <td>'.$rows['apply'].'</td>
          <td>'.$rows['year'].'</td>
          </tr>';
      }
    }
    else
    {
      echo"";
    }
    ?>
    </tbody>
</table>
</div>