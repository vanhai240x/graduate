<h1 class="title">Chơi thử sổ xố tự chọn</h1>

<div ng-controller="LotteryCtrl" class="lottery" onload="checkCookie()">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Giải thưởng</th>
        <th>Kết quả</th>
        <th>Khả năng trúng</th>
        <th>Giá trị giải thưởng (VNĐ)</th>
        <th>Tỷ lệ trả thưởng kế hoạch</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Giải Đặc Biệt</td>
        <td>Trúng 6 số</td>
        <td>1 / 8.145.060,00</td>
        <td>(Tối thiểu 12 tỷ và tích lũy)</td>
        <td>41.31%</td>
      </tr>
      <tr>
        <td>Giải Nhất</td>
        <td>Trúng 5 số</td>
        <td>1 / 34.087,95</td>
        <td>10.000.000</td>
        <td>2.87%</td>
      </tr>
      <tr>
        <td>Giải Nhì</td>
        <td>Trúng 4 số</td>
        <td>1 / 732,80</td>
        <td>300.000</td>
        <td>4.09%</td>
      </tr>
      <tr>
        <td>Giải Ba</td>
        <td>Trúng 3 số</td>
        <td>1 / 44,56</td>
        <td>30.000</td>
        <td>6.73%</td>
      </tr>
    </tbody>
  </table>

  <!-- Step 1: Slect Number -->
  <h3>Bước 1: Chọn số</h3>
  <div class="select_num">
    <i class="fas fa-exclamation-triangle warning-1"></i>
    <select id="num-1">
      <option value="w" selected="selected">01</option>
      <option value="e">02</option>
      <option value="r">03</option>
      <option value="">04</option>
      <option value="">05</option>
      <option value="">06</option>
      <option value="">07</option>
      <option value="">08</option>
      <option value="">09</option>
      <option value="">10</option>
      <option value="">11</option>
      <option value="">12</option>
      <option value="">13</option>
      <option value="">14</option>
      <option value="">15</option>
      <option value="">16</option>
      <option value="">17</option>
      <option value="">18</option>
      <option value="">19</option>
      <option value="">20</option>
      <option value="">21</option>
      <option value="">22</option>
      <option value="">23</option>
      <option value="">24</option>
      <option value="">25</option>
      <option value="">26</option>
      <option value="">27</option>
      <option value="">28</option>
      <option value="">29</option>
      <option value="">30</option>
      <option value="">31</option>
      <option value="">32</option>
      <option value="">33</option>
      <option value="">34</option>
      <option value="">35</option>
      <option value="">36</option>
      <option value="">37</option>
      <option value="">38</option>
      <option value="">39</option>
      <option value="">40</option>
      <option value="">41</option>
      <option value="">42</option>
      <option value="">43</option>
      <option value="">44</option>
      <option value="">45</option>
    </select>
    <i class="fas fa-exclamation-triangle warning-2"></i>
    <select name="" id="num-2">
      <option value="">01</option>
      <option value="">02</option>
      <option value="">03</option>
      <option value="">04</option>
      <option value="">05</option>
      <option value="">06</option>
      <option value="">07</option>
      <option value="">08</option>
      <option value="">09</option>
      <option value="">10</option>
      <option value="">11</option>
      <option value="">12</option>
      <option value="">13</option>
      <option value="">14</option>
      <option value="">15</option>
      <option value="">16</option>
      <option value="">17</option>
      <option value="">18</option>
      <option value="">19</option>
      <option value="">20</option>
      <option value="">21</option>
      <option value="">22</option>
      <option value="">23</option>
      <option value="">24</option>
      <option value="">25</option>
      <option value="">26</option>
      <option value="">27</option>
      <option value="">28</option>
      <option value="">29</option>
      <option value="">30</option>
      <option value="">31</option>
      <option value="">32</option>
      <option value="">33</option>
      <option value="">34</option>
      <option value="">35</option>
      <option value="">36</option>
      <option value="">37</option>
      <option value="">38</option>
      <option value="">39</option>
      <option value="">40</option>
      <option value="">41</option>
      <option value="">42</option>
      <option value="">43</option>
      <option value="">44</option>
      <option value="">45</option>
    </select>
    <i class="fas fa-exclamation-triangle warning-3"></i>
    <select name="" id="num-3">
      <option value="">01</option>
      <option value="">02</option>
      <option value="">03</option>
      <option value="">04</option>
      <option value="">05</option>
      <option value="">06</option>
      <option value="">07</option>
      <option value="">08</option>
      <option value="">09</option>
      <option value="">10</option>
      <option value="">11</option>
      <option value="">12</option>
      <option value="">13</option>
      <option value="">14</option>
      <option value="">15</option>
      <option value="">16</option>
      <option value="">17</option>
      <option value="">18</option>
      <option value="">19</option>
      <option value="">20</option>
      <option value="">21</option>
      <option value="">22</option>
      <option value="">23</option>
      <option value="">24</option>
      <option value="">25</option>
      <option value="">26</option>
      <option value="">27</option>
      <option value="">28</option>
      <option value="">29</option>
      <option value="">30</option>
      <option value="">31</option>
      <option value="">32</option>
      <option value="">33</option>
      <option value="">34</option>
      <option value="">35</option>
      <option value="">36</option>
      <option value="">37</option>
      <option value="">38</option>
      <option value="">39</option>
      <option value="">40</option>
      <option value="">41</option>
      <option value="">42</option>
      <option value="">43</option>
      <option value="">44</option>
      <option value="">45</option>
    </select>
    <i class="fas fa-exclamation-triangle warning-4"></i>
    <select name="" id="num-4">
      <option value="">01</option>
      <option value="">02</option>
      <option value="">03</option>
      <option value="">04</option>
      <option value="">05</option>
      <option value="">06</option>
      <option value="">07</option>
      <option value="">08</option>
      <option value="">09</option>
      <option value="">10</option>
      <option value="">11</option>
      <option value="">12</option>
      <option value="">13</option>
      <option value="">14</option>
      <option value="">15</option>
      <option value="">16</option>
      <option value="">17</option>
      <option value="">18</option>
      <option value="">19</option>
      <option value="">20</option>
      <option value="">21</option>
      <option value="">22</option>
      <option value="">23</option>
      <option value="">24</option>
      <option value="">25</option>
      <option value="">26</option>
      <option value="">27</option>
      <option value="">28</option>
      <option value="">29</option>
      <option value="">30</option>
      <option value="">31</option>
      <option value="">32</option>
      <option value="">33</option>
      <option value="">34</option>
      <option value="">35</option>
      <option value="">36</option>
      <option value="">37</option>
      <option value="">38</option>
      <option value="">39</option>
      <option value="">40</option>
      <option value="">41</option>
      <option value="">42</option>
      <option value="">43</option>
      <option value="">44</option>
      <option value="">45</option>
    </select>
    <i class="fas fa-exclamation-triangle warning-5"></i>
    <select name="" id="num-5">
      <option value="">01</option>
      <option value="">02</option>
      <option value="">03</option>
      <option value="">04</option>
      <option value="">05</option>
      <option value="">06</option>
      <option value="">07</option>
      <option value="">08</option>
      <option value="">09</option>
      <option value="">10</option>
      <option value="">11</option>
      <option value="">12</option>
      <option value="">13</option>
      <option value="">14</option>
      <option value="">15</option>
      <option value="">16</option>
      <option value="">17</option>
      <option value="">18</option>
      <option value="">19</option>
      <option value="">20</option>
      <option value="">21</option>
      <option value="">22</option>
      <option value="">23</option>
      <option value="">24</option>
      <option value="">25</option>
      <option value="">26</option>
      <option value="">27</option>
      <option value="">28</option>
      <option value="">29</option>
      <option value="">30</option>
      <option value="">31</option>
      <option value="">32</option>
      <option value="">33</option>
      <option value="">34</option>
      <option value="">35</option>
      <option value="">36</option>
      <option value="">37</option>
      <option value="">38</option>
      <option value="">39</option>
      <option value="">40</option>
      <option value="">41</option>
      <option value="">42</option>
      <option value="">43</option>
      <option value="">44</option>
      <option value="">45</option>
    </select>
    <i class="fas fa-exclamation-triangle warning-6"></i>
    <select name="" id="num-6">
      <option value="">01</option>
      <option value="">02</option>
      <option value="">03</option>
      <option value="">04</option>
      <option value="">05</option>
      <option value="">06</option>
      <option value="">07</option>
      <option value="">08</option>
      <option value="">09</option>
      <option value="">10</option>
      <option value="">11</option>
      <option value="">12</option>
      <option value="">13</option>
      <option value="">14</option>
      <option value="">15</option>
      <option value="">16</option>
      <option value="">17</option>
      <option value="">18</option>
      <option value="">19</option>
      <option value="">20</option>
      <option value="">21</option>
      <option value="">22</option>
      <option value="">23</option>
      <option value="">24</option>
      <option value="">25</option>
      <option value="">26</option>
      <option value="">27</option>
      <option value="">28</option>
      <option value="">29</option>
      <option value="">30</option>
      <option value="">31</option>
      <option value="">32</option>
      <option value="">33</option>
      <option value="">34</option>
      <option value="">35</option>
      <option value="">36</option>
      <option value="">37</option>
      <option value="">38</option>
      <option value="">39</option>
      <option value="">40</option>
      <option value="">41</option>
      <option value="">42</option>
      <option value="">43</option>
      <option value="">44</option>
      <option value="">45</option>
    </select>
  </div>

  <!-- Step 2: Random Lucky -->
  <h3>Bước 2: Quay số</h3>
  <button class="btn btn-primary dial" ng-click="dial(); transResultToDB()">Quay Số</button>
  <div class="loading d-none">
    <img src="loading.gif" alt="">
  </div>
  <div class="result d-none">
    <h2>Kết quả quay số: </h2>
    <span class="get_num1">{{getNum1}}</span>
    <span class="get_num2">{{getNum2}}</span>
    <span class="get_num3">{{getNum3}}</span>
    <span class="get_num4">{{getNum4}}</span>
    <span class="get_num5">{{getNum5}}</span>
    <span class="get_num6">{{getNum6}}</span>
  </div>

  <!-- Step 3: Get Result -->
  <h3>Bước 3: Nhận kết quả - nhận thưởng</h3>
  <div class="reward">
    <p>Bạn chọn trúng <span class="quantity">{{countView}}</span> số </p>
    <p>Giá trị giải thưởng là <span class="get_money">{{getMoney}}</span> VNĐ</p>
    <p class="lucky_later">{{luckyLater}}</p>
  </div>


  <script>
    // Transition result after dial lottery into Database
    function transResultToDB(){
      <?php 
        $mysqli = new mysqli('localhost', 'root', '', 'kiemtra') or die(mysqli_error($mysqli));
        $cookies = $_COOKIE["result"];
        if(isset($cookies)) {
          $mysqli->query("INSERT INTO tbvietlot VALUES('', '$cookies')") or die($mysqli->error);
        }  
      ?>
    }
  </script>

</div>