<h1 class="title">Máy tính cầm tay</h1>

<div class="calculator" ng-controller="CalculatorCtrl">    

    <input type="text" class="calculator-box" placeholder="Type..." readonly>
    <input type="text" class="calculator-result" placeholder="Result..." readonly>

    <div class="box-button">
        <button class="btn clean">Clean</button>
        <button class="btn cal minus">-</button>
        <button class="btn cal plus">+</button>
        <button class="btn delete">Delete</button>
        <button class="btn cal multiply">*</button>
        <button class="btn cal share">/</button>
        <button class="btn cal percent">%</button>
        <button class="btn cal sqrt">√</button>
        <button class="btn cal onex">1/x</button>
        <button class="btn number">1</button>
        <button class="btn number">2</button>
        <button class="btn number">3</button>
        <button class="btn number">4</button>
        <button class="btn number">5</button>
        <button class="btn number">6</button>
        <button class="btn number">7</button>
        <button class="btn number">8</button>
        <button class="btn number">9</button>
        <button class="btn number">0</button>
        <button class="btn dot">.</button>
        <button class="btn equal">=</button>
    </div>
    
</div>

<script>
    //Thực hiện các việc khi trang được load xong
    $(document).ready(function(){
        $('.calculator-box').attr('disabled','true'); //Vô hiệu hóa ô phép tính
        $('.calculator-result').attr('disabled','true'); //Vô hiệu hóa ô kết quả
        $('.calculator-box').attr('disabled','true'); //Vô hiệu hóa ô phép tính
        $('.box-button .btn.multiply').attr('disabled','true'); //Vô hiệu hóa nút nhân
        $('.box-button .btn.share').attr('disabled','true'); //Vô hiệu hóa nút chia
        $('.box-button .btn.dot').attr('disabled','true'); //Vô hiệu hóa nút chấm
    })
    //Thực hiện các hành động khi click vào các nút số
    $('.number').on('click',function(){
        $char = $(this).html();//Lấy số vừa click
        $value_calculation = $('.calculator-box').val(); //Lấy giá trị trong ô phép tính
        $('.calculator-box').val($value_calculation + $char); //Thêm số vừa click vào sau chuỗi trong ô phép tính
        $('.box-button .btn.cal').removeAttr('disabled'); //Gỡ bõ vô hiệu hóa các phép toán
        $('.box-button .btn.equal').removeAttr('disabled'); //Gỡ bõ vô hiệu hóa nút bằng
        $('.box-button .btn.dot').removeAttr('disabled'); //Gỡ bõ vô hiệu hóa nút chấm
    })
    //Thực hiện các hành động khi click vào nút chấm
    $('.dot').on('click',function(){
        $char = $(this).html(); //Lấy dấu chấm
        $value_calculation = $('.calculator-box').val(); //Lấy giá trị trong ô phép tính
        $('.calculator-box').val($value_calculation + $char); //Thêm dấu chấm vào sau chuỗi trong ô phép tính
        $('.box-button .btn.cal').attr('disabled','true'); // Vô hiệu hóa các phép toán
        $('.box-button .btn.dot').attr('disabled','true'); //Vô hiệu hóa nút chấm
    })
    //Thực hiện hành động khi nhấn vào nút Clean
    $('.clean').on('click',function(){
        $('.calculator-box').val(''); //Làm trống ô phép tính
        $('.calculator-result').val(''); //Làm trống ô kết quả
    })
    //Thực hiện hành động khi nhấn vào nút Delete
    $('.delete').on('click',function(){
        $value_calculation = $('.calculator-box').val(); //Lấy giá trị trong ô phép tính
        $('.calculator-box').val($value_calculation.substring(0, $value_calculation.length-1)); //Xóa ký tự cuối cùng trong ô phép tính
    })
    //Thực hiện hành động khi click vào các phép toán
    $('.cal').on('click', function(){
        $char = $(this).html(); //Lấy dấu vừa click
        $value_calculation = $('.calculator-box').val(); //Lấy giá trị trong ô phép tính
        $('.calculator-box').val($value_calculation + $char); // Thêm dấu vừa click vào ô phép tính
        $('.box-button .btn.multiply').attr('disabled','true'); //Vô hiệu hóa nút nhân
        $('.box-button .btn.share').attr('disabled','true'); //Vô hiệu hóa nút chia
        $('.box-button .btn.dot').removeAttr('disabled'); //Gỡ bỏ vô hiệu hóa nút chấm
    })
    //Thực hiện khi nhấn nút bằng
    $('.equal').on('click',function(){
        try{
            $result = $('.calculator-box').val(); //Lấy giá trị trong ô phép tính
            $('.calculator-result').val(eval($result)); //Hiển thị kết quả trong ô kết quả
        }
        catch{
            $('.calculator-result').val('Error syntax !');
        }
    })
</script>