<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/Normalize.css" rel="stylesheet">
    <link href="css/que.css" rel="stylesheet">
    <title><?php echo "Quiz Page" ?></title>
</head>
<body>

    <div class="header">
            <div class="container">
                <div class="ti">Codes</div>
            </div>

    <?php
    if(isset($_POST['username']))
    {
        $username = $_POST['username'];
    }
    ?>

      <div class="bo">

      <form action="result.php" method="post">
      <input type="hidden" name="hiddename" value="'.$username.'">

      <h1>What language is used in the backend?</h1>
      <p><input type="radio" name="backend" value="JavaScript" required>JavaScript</p>
      <p><input type="radio" name="backend" value="PHP">PHP</p>
      <p><input type="radio" name="backend" value="C++">C++</p>


      <h1>What is HTML?</h1>
      <p><input type="radio" name="html" value="Hyper Text" required>HTML stands for Hyper Text Markup Language</p>
      <p><input type="radio" name="html" value="OOP">Object orinted Programming</p>
      <p><input type="radio" name="html" value="CSS">CSS stands for Cascading Style Sheets</p>

      <h1>What is the function of echo in php?</h1>
      <p><input type="radio" name="php" value="Input" required>Input Element</p>
      <p><input type="radio" name="php" value="Another">Another Choice</p>
      <p><input type="radio" name="php" value="Output">Output Element</p>


      <h1>CSS is the standard language for defining</h1>
      <p><input type="radio" name="css" value="Styles" required>Styles for special stuctured document format</p>
      <p><input type="radio" name="css" value="Images">Its application in images doucments</p>
      <p><input type="radio" name="css" value="web pages">Styles on web pages</p>

     <div class="s">
     <input type="submit" name="submit" value="Send" class="log">
     </div>

     </form>
 </div>
</div>


</body>
</html>