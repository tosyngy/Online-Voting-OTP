<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();
require 'otp.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link href="yusufishola.css" rel="stylesheet" type="text/css"/>
        <link href="../yusufishola.css" rel="stylesheet" type="text/css"/>
        <script src="jquery2.1.3.min.js"></script>

        <style type="text/css">

            <!--
            body {
                background-color: #BFF9CB;
            }
            -->
        </style>
    </head>

    <body><table width="1000" border="1" align="center" cellspacing="0">
            <tr>
                <td height="77"><img name="banner" src="image/banner.png" width="1000" height="180" border="0" id="banner" alt="" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
                <td height="178" valign="top">
                    <form id="form1" name="form1" method="post" action="voters_process.php">
                        <table align="center">
                            <?php
                            require ("connectme.php");

// holds the distinct number of positions
                            $gotten = mysql_query("SELECT DISTINCT post FROM contestant") or die(mysql_error());
                            $_SESSION['num'] = mysql_num_rows($gotten);
                            while ($rowss = mysql_fetch_array($gotten)) {
                                $post = $rowss['post'];
                                $posttest = 0;
                                $get1 = mysql_query("SELECT cont_id, photo, name FROM contestant WHERE post = '$post'") or die(mysql_error());
                                while ($row = mysql_fetch_array($get1)) {
                                    $get2 = mysql_query("SELECT postname FROM post WHERE id = '$post'") or die(mysql_error());
                                    while ($row2 = mysql_fetch_array($get2)) {
                                        if ($posttest != $post) {
                                            echo "<tr><td align =center><h1><b>" . $postname = strtoupper($row2['postname']) . "</b></h1></td></tr>";
                                        }
                                        $cont_id = $row['cont_id'];
                                        $photo = $row['photo'];
                                        echo "<tr><td>" . $name = $row['name'] . "</td>";
                                        echo "<td><input type='radio' name='$post' id='radio' value='$cont_id' /></td>";
                                        echo '<td><img src="passport/' . $photo . '.jpg"." width=100 border=1></td></tr>';
                                        $posttest = $post;
                                    }
                                }
                            }
                            ?>
                            <tr style="text-align: center">
                                <td>
                                    <div class="" style="width: 80%; margin: auto;background: #ccc">
                                        <h2>Please Supply the Otp Code Send to your phone</h2> 
                                        <div><input type="text" id="otpp" class="form-group" style="padding: 5px;width: 80%;margin: 5px;border: solid thin activeborder" /></div>
                                        <div><input type="hidden" id="otpconfirm" value="<?php echo $otp; ?>"></div>
                                        <a href="#" class="send">Resend confirm code</a>
                                    </div>
                                </td>
                            </tr>
                            <tr><td align="center"><input name="Submit" type="submit" value="Submit Vote" id="Submit" /></td></tr>
                        </table>
                    </form></td>
            </tr>

            <tr>
                <td><img src="image/bar.jpg" width="1000" height="20" /></td>
            </tr>
        </table>
        <script>
            $(function(){
                
                var otp=$("#otpconfirm").val();
                var otp2;
                $('#form1').submit(function(e){
                    otp2=$("#otpp").val()
                    alert(otp);
                    alert(otp2);
                    if(otp2 !== otp){
                        alert('invalid otp supply')
                        e.preventDefault();   
                    }
                })
                $('.send').click(function(e){
                    $.get('otp.php',{script:1},function(data){
                        $('#otpconfirm').val(data)
                    });
                    e.preventDefault();
                })
            })
        </script>
    </body>
</html>
