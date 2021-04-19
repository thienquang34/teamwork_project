<div class="row">
    <div class="panel-group" id="accordion">
     <?php 
		include('connect.php');
		$sl= "select * from menu_doc";
		$exec= mysqli_query($connect,$sl);
		$i=0;
		while($row= mysqli_fetch_array($exec)){		
	?>
        <div class="panel panel-success" style="margin-left: -16px;">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#collapse<?php echo $num; ?>"><?php echo $row['title'];  ?></a>
                </h4>
            </div>
            <div id="collapse<?php echo $num; ?>" class="panel-collapse">
                <div class="panel-body">
                    <table class="table">
                        <?php 
                            if($row['sub_1']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_1_link'].">".$row['sub_1']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_2']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_2_link'].">".$row['sub_2']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_3']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_3_link'].">".$row['sub_3']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_4']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_4_link'].">".$row['sub_4']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_5']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_5_link'].">".$row['sub_5']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_6']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_6_link'].">".$row['sub_6']."</a>
                                    </td>
                                </tr>";}
                            if($row['sub_7']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_7_link'].">".$row['sub_7']."</a>
                                    </td>
                                </tr>";}
                        ?>
                    </table>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
