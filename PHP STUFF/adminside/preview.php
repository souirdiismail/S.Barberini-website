<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="stefanobarberinidb";
$GLOBALS['conn'] = new mysqli($servername, $username, $password,$dbname);
$conn = $GLOBALS['conn'];
	$sql = "select * from ".$_POST["table"]." where id=".$_POST["ID"];
	$result = $conn->query($sql);
while ($row = mysqli_fetch_row($result))
{?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"></head>

<body>

    <div  style="background: url(\'Assets/msg-header.png\') no-repeat center;
    background-size: cover; padding:10px 0">
        <div style="width:600px;max-width:100%;margin:0 auto" align="left">
            <div  style="padding-right:2.5%;padding-left:2.5%;margin:0 auto">
                <img  src="Assets/Club 24Hl.png" width="300" height="" title="Club24HL"
                 style="vertical-align:middle;width:120px;height:auto;max-width:100%">
            </div>
        </div>
    </div>
    <u></u>
    <div >
        <div style="width:600px;max-width:100%;margin:0 auto" align="left">
            <div  style="margin:0 auto;padding:24px 2.5%">
                <h2 style="font-size:31px;line-height:1.1; color:#00c5a7; font-family:Lato,Helvetica,Arial,sans-serif;letter-spacing:-0.6px;margin:0 0 25px">
                    Grazie per esserti iscritto al Club 24Hl!
                </h2>
                <h2 style="font-size:31px;line-height:1.1; color:#00c5a7; font-family:Lato,Helvetica,Arial,sans-serif;letter-spacing:-0.6px;margin:0 0 25px">
                    <?php echo $row[1]; ?>
                </h2>

                <p style="font-family:Lato,&quot;Lucida Grande&quot;,&quot;Lucida Sans Unicode&quot;,Tahoma,sans-serif!important;line-height:1.4;font-size:17px">
                    Corso numero 3
                </p>
                <p style="font-family:Lato,&quot;Lucida Grande&quot;,&quot;Lucida Sans Unicode&quot;,Tahoma,sans-serif!important;line-height:1.4;font-size:17px">SE SBAGLI LA COLAZIONE SEI FRITTO :</p>
                <a href="<?php echo $row[3]; ?>"><span><img src="<?php echo $row[4]; ?>" alt=""></span></a>
                <p style="font-family:Lato,&quot;Lucida Grande&quot;,&quot;Lucida Sans Unicode&quot;,Tahoma,sans-serif!important;line-height:1.4;font-size:17px">
                    <a href="https://www.youtube.com/channel/UCtqqPWCnNwsFIBlJfqkUIxg"
                        style="text-decoration:none;color:#fff;font-size:15px;line-height:18px;font-weight:bold;background-color:#00c5a7;border-radius:4px;display:inline-block;padding:12px"
                        target="_blank" >
                        Visite Our Channel</a>
                </p>
            </div>
            <hr>
            <p style="font-size:15px;line-height:1.1; font-weight: 600; color:#00c5a7; font-family:Lato,Helvetica,Arial,sans-serif;letter-spacing:-0.6px;margin:0 0 25px; text-align: center;">
                <a style="text-decoration: none; color:#00c5a7!important; " href="https://www.instagram.com/stebarberini">Instagrame</a>   <a style="text-decoration: none; color:#00c5a7!important; padding-left: 25px;" href="https://www.facebook.com/w24fitclub/">Facebbok</a>
            </p>

        </div>
    </div> 
</body>
<?php }
echo $_POST["ID"]."   ".$_POST["table"];
?>
</html>