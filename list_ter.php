<select name="territorio" id="territorio">
            <option value=""> Selecione um território</option>
            <?php 
                $query_territorio = mysqli_query( $conn, "SELECT * FROM territorio ");
                    while ($row = $query_territorio->fetch_assoc())  {
            ?>
            <option value="<?php echo $row['id_territorio'];?>"><?php echo $row['id_territorio'];?></option>
    
            <?php } ?>
</select>