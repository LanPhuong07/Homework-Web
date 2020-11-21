<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="content">
		<h1>Toán trắc nghiệm</h1>
	</div>
    <?php
    //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
        //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
            //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                    //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                        //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                            //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                    //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                        //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                            //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                                //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                                    //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                                        //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                                            //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                                                //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                                                    //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                                                        //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
                                                                            //code chưa hoàn thành như fix cả buổi tối không được nên em từ bỏ ạ
	    $Arr = array(
            '1+1=' => array( 
                '1',
                'true' => '2',
                '3'
            ),
            '1+2=' => array( 
                '2',
                'true' => '3',
                '4'
            ),
            '1+3=' => array( 
                'true' => '4',
                '5',
                '6'
            ),
            '1+4=' => array( 
                '3',
                '4',
                'true' => '5'
            ),
            '1+5=' => array( 
                'true' => '6',
                '7',
                '8'
            ),            
        );
        foreach($Arr as $item) {
            echo "<p>Quest</p>";
            echo "<ul>";
            foreach($item as $value) {
                echo "<li><label><input type="radio" name= "question" value="1">".$value."</label></li>"; 
            }
            echo "</ul>";
        }
    ?>
    <form action="question.php" method="POST" name="mainForm">
	    <input type="submit" value="Kiểm tra" name="submit"></input>
    </form>
</body>
</html>
