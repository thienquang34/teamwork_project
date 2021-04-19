<div class="container-fluid">
    <h1 class="mt-4">Danh sách sản phẩm</h1>
    <div class="card mb-4">  
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Loại sản phẩm</th>
                            <th>Xem chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include('../connect.php');
                            $sl= "select * from san_pham";
                            $exec= mysqli_query($connect, $sl);
                            while($row= mysqli_fetch_array($exec)){
                        ?>
                                <tr>
                                    <td><?php echo $row['tensp']; ?></td>
                                    <td><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></td>
                                    <td><?php echo $row['soluong']; ?></td>
                                    <td>
                                        <?php  
                                            $loaisp= $row['loaisp'];
                                            switch ($loaisp) {
                                                case 'somi':
                                                    echo "Áo sơ mi";
                                                    break;
                                                case 'khoac':
                                                    echo "Áo khoác";
                                                    break;
                                                case 'thun':
                                                    echo "Áo thun";
                                                    break;
                                                case 'jean':
                                                    echo "Quần jean";
                                                    break;
                                                case 'kaki':
                                                    echo "Quần kaki";
                                                    break;
                                                case 'lung':
                                                    echo "Quẩn lửng";
                                                    break;
                                                case 'giay':
                                                    echo "Giày";
                                                    break;                      
                                            }
                                        ?>                                       
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"  href="?menu=chi_tiet&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
                                    </td>   
                                </tr>
                        <?php  
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>