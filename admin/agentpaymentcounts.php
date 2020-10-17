<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <?php
        $agentId  = $_SESSION['agent_id'];
        $totalearning = getTotalEarning($agentId);
        ?>
        <a data-toggle="tooltip" title="<?php echo $totalearning; ?> Total Earnings" class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Earnings</div>
            <div><?php echo $totalearning;  ?></div>
            <span class="notification green"><?php echo $totalearning;  ?></span>
        </a>
    </div>
    
</div>


<?php

function getTotalEarning($agentId){
        include('../conn.php'); 
        
        $fetch_profile_count="select sum(amtPaid) from tbl_agent_payments where status = 'Paid' and agent_id='$agentId' ";
    
        $fetch_profile_count_rs=mysqli_query($conn,$fetch_profile_count) or die(mysqli_error($conn));
        
        while($fetch_create_date_row = mysqli_fetch_array($fetch_profile_count_rs))
                  {
                  $totalearning= $fetch_create_date_row[0];
                  }

        mysqli_free_result($fetch_profile_count_rs);
        
        mysqli_close($conn);
        
        return $totalearning;
    }
    

    
?>