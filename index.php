<!DOCTYPE html>

<?php

                $connect = mysqli_connect('localhost','grader','allowme','hlps5') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

                session_start();

                if(isset($_SESSION['userid'])) {
                        echo $_SESSION['userid'];?> Hello!
                        <br/>
        <?php
                }
                else {
        ?>              <button onclick="location.href='./login.php'">Log In</button>
                        <br />
        <?php   }
        ?>



<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
</style>
<body>
<?php
                $connect = mysqli_connect('localhost','grader','allowme','hlps5') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

        ?>
        <h2 align=center>Open Board</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">Number</td>
        <td width = "500" align = "center">Title</td>
        <td width = "100" align = "center">Writer</td>
        <td width = "200" align = "center">Date</td>
        <td width = "50" align = "center">Hit</td>
        </tr>
        </thead>

        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                <td width = "50" align = "center"><?php echo $total?></td>
                <td width = "500" align = "center">
                <a href = "view.php?number=<?php echo $rows['number']?>">
                <?php echo $rows['title']?></td>
                  <td width = "100" align = "center"><?php echo $rows['id']?></td>
                <td width = "200" align = "center"><?php echo $rows['date']?></td>
                <td width = "50" align = "center"><?php echo $rows['hit']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>

        <div class = text>
        <font style="cursor: hand"onClick="location.href='./write.php'">Write</font>
        </div>






</body>
</html>
