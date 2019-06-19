<h1 class="title">Thông tin sinh viên lớp 16CNTT1A</h1>

<div ng-controller="ProfileCtrl" class="profile">    

    <form method="POST" onsubmit="return validateData()">
        <div>
            <label class="col-xs-12 col-md-3">Tên sinh viên:</label>
            <input class="col-xs-12 col-md-9 name" type="text" name="name"><br>
            <span class="offset-md-3 badge badge-warning d-none name">Dữ liệu không hợp lệ</span>      
        </div>
        <div>
            <label class="col-xs-12 col-md-3">Giới tính:</label>
            <input class="col-xs-12 col-md-9 gender" type="text" name="gender"><br>
            <span class="offset-md-3 badge badge-warning d-none gender">Dữ liệu không hợp lệ</span>  
        </div>
        <div>
            <label class="col-xs-12 col-md-3">Ngày sinh:</label>
            <input class="col-xs-12 col-md-9 birthday" type="date" name="birthday"><br>
            <span class="offset-md-3 badge badge-warning d-none birthday">Dữ liệu không hợp lệ</span>  
        </div>
        <div>
            <label class="col-xs-12 col-md-3">Quê quán:</label>
            <input class="col-xs-12 col-md-9 hometown" type="text" name="hometown"><br>
            <span class="offset-md-3 badge badge-warning d-none hometown">Dữ liệu không hợp lệ</span>  
        </div>
        <div>
            <label class="col-xs-12 col-md-3">Mô tả:</label>
            <input class="col-xs-12 col-md-9 desc" type="text" name="desc"><br>
            <span class="offset-md-3 badge badge-warning d-none desc">Dữ liệu không hợp lệ</span>  
        </div>
        <div class="wrap">
            <button type="reset" class="button">Xóa</button>
            <button type="submit save" class="button" name="save">Thêm</button>
            <div class="clearfix"></div>
        </div>
    </form>

    <?php 
        $mysqli = new mysqli('localhost', 'root', '', 'kiemtra') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM tbthongtin") or die($mysqli->error)
    ?>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Quê quán</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['birthday']; ?></td>
                <td><?php echo $row['hometown']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <script>
        $(document).ready(function(){
            // validate input data
            validateData = () => {
                if($('.name').val() == ''){
                    $('.badge.name').removeClass('d-none')
                    return false;
                }
                if($('.gender').val() == ''){
                    $('.badge.gender').removeClass('d-none')
                    return false;
                }
                if($('.birthday').val() == ''){
                    $('.badge.birthday').removeClass('d-none')
                    return false;
                }
                if($('.hometown').val() == ''){
                    $('.badge.hometown').removeClass('d-none')
                    return false;
                }
                if($('.desc').val() == ''){
                    $('.badge.desc').removeClass('d-none')
                    return false;
                }
            }
        });
    </script>
</div>