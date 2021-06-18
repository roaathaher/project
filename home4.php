 
   <table  border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
           
            </tr>
        </thead>
        <tbody>
        	  <?php 
   $roaa_arr= array(array('id'=>1,'name'=>'roaa','salary'=>400),
                       array('id'=>2,'name'=>'jood','salary'=>800),
                      array('id'=>3,'name'=>'taym','salary'=>800));
  // echo"<pre>";
  // print_r($roaa_arr);






   ?>
            <?php foreach ( $roaa_arr as $exp) { ?>
            <tr>
                <td><?php echo $exp['id']; ?></td>
                <td><?php echo $exp['name']; ?></td>
               
                    <td><?php echo $exp['salary']; ?></td>
           
            </tr>
            <?php }
               ?>
        </tbody>
    </table>
