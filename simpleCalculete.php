<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculetor</title>
</head>
<body>
    <h3> 
    <?php
    
    if(isset($_POST['sum'])){
        if(!empty($_POST['numberFirst']) && !empty($_POST['numberSecond'])){
            $num1= $_POST['numberFirst'];
            $num2= $_POST['numberSecond'];

            $sumResult=$num1+$num2;

            echo $sumResult;

        }
    }


    if(isset($_POST['sub'])){
        if(!empty($_POST['numberFirst']) && !empty($_POST['numberSecond'])){
            $num1= $_POST['numberFirst'];
            $num2= $_POST['numberSecond'];

            $sumResult=$num1-$num2;

            echo $sumResult;

        }
    }

  if(isset($_POST['mul'])){
        if(!empty($_POST['numberFirst']) && !empty($_POST['numberSecond'])){
            $num1= $_POST['numberFirst'];
            $num2= $_POST['numberSecond'];

            $sumResult=$num1*$num2;

            echo $sumResult;

        }
    }
  if(isset($_POST['div'])){
        if(!empty($_POST['numberFirst']) && !empty($_POST['numberSecond'])){
            $num1= $_POST['numberFirst'];
            $num2= $_POST['numberSecond'];

            $sumResult=$num1/$num2;


            echo $sumResult;

        }
    }
      if(isset($_POST['rem'])){
        if(!empty($_POST['numberFirst']) && !empty($_POST['numberSecond'])){
            $num1= $_POST['numberFirst'];
            $num2= $_POST['numberSecond'];

            $sumResult=$num1%$num2;


            echo $sumResult;

        }
    }
?>
    
    </h3>
    <form action="" method="POST"> 

    <input type="text" name="numberFirst" value="" />
    <input type="text" name="numberSecond" value="" /><br/>
    <input type="submit" name="sum" value="+" />
    <input type="submit" name="sub" value="-" />
    <input type="submit" name="mul" value="*" />
    <input type="submit" name="div" value="/" />
    <input type="submit" name="rem" value="%" />
    <input type="submit" name="div" value="C" />

    </form>
</body>
</html>