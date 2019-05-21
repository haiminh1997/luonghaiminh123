<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$weight = $height = '';
if(isset($_GET['weight']) && isset($_GET['height'])){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    $weight = $_GET['weight'];
    $height = $_GET['height'];

    $bmi = $weight/ ($height * $height);
    echo "Chỉ số BMI :" . $bmi;
    if($bmi < 18.5 ){
        echo "Gầy";
    }
    elseif ((18.5 < $bmi) && ($bmi < 24.9  ) ){
        echo "Bình thường";

    }
    elseif ((25< $bmi) && ($bmi < 29.9) ){
        echo "Hơi béo";
    }
    elseif ((30<$bmi) && ($bmi<34.9)){
        echo "Béo phì cấp độ 1";
    }
    elseif ((35<$bmi) && ($bmi<39.9)){
        echo "Béo phì cấp độ 2";
    }
    elseif (40<$bmi){
        echo "Béo phì cấp độ 3";
    }

}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Tính chỉ số BMI</h1>
            <form name="BMI" action="" method="GET">
                <div class="form-group">
                    <label >Chiều cao(cm)</label>
                    <input type="text" class="form-control" name="height" placeholder="Height?" value="<?php echo $height?>">

                </div>
                <div class="form-group">
                    <label >Cân nặng(kg)</label>
                    <input type="text" class="form-control" name="weight" placeholder="Weight?" value="<?php echo  $weight?>">
                </div>

                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>