<div class="container-fluid">
    <h1 class="mt-4">Danh sách sản phẩm hết hàng</h1>                      
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
                            <th>Hình ảnh</th>
                            <th>Loại sản phẩm</th>
                            <th colspan="2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>                                     
                    <?php 
                        include('../connect.php');
                        $sl= "select * from san_pham where soluong<1";
                        $exec= mysqli_query($connect, $sl);
                        while($row= mysqli_fetch_array($exec)){
                    ?>
                        <tr>
                            <td><?php echo $row['tensp']; ?></td>
                            <td><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></td>
                            <td>
                                <img src="../images/<?php echo $row['img']; ?>"  width="60px" height="80px" alt="">
                                <img src="../images/<?php echo $row['img1']; ?>"  width="60px" height="80px" alt="">
                                <img src="../images/<?php echo $row['img2']; ?>"  width="60px" height="80px" alt="">
                                <img src="../images/<?php echo $row['img3']; ?>"  width="60px" height="80px" alt="">
                            </td>
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
                                <a class="btn btn-success" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"  href="?menu=nhap_hang&masp=<?php echo $row['masp']; ?>">Nhập hàng</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" onclick="return confirm('Bạn có mún xóa không?');" href="?menu=xoa_sp&masp=<?php echo $row['masp']; ?>">Xóa</a>
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