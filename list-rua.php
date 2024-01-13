<select name="rua" id="rua">
            <option value=""> Selecione uma Rua</option>
            <?php 
                $query_rua = mysqli_query( $conn, "SELECT * FROM rua");
                    while ($row_rua = $query_rua->fetch_assoc())  {
            ?>
            <option value="<?php echo $row_rua['id_rua'];?>"><?php echo $row_rua['nome_rua'];?></option>
    
            <?php } ?>
</select>