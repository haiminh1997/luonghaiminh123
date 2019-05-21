<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
    if(isset($_POST['weight']) && isset($_POST['height'])){
        $weight = (int) $_POST['weight'];
        $height = (int) $_POST['height'];

        $bmi = $weight/ ($height * $height);
        echo "Chỉ số BMI :" . $bmi;

    }
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Tính chỉ số BMI</h1>
            <form name="BMI" action="" method="POST">
                <div class="form-group">
                    <label >Chiều cao(cm)</label>
                    <input type="text" class="form-control" name="height" placeholder="Height" value="">

                </div>
                <div class="form-group">
                    <label >Cân nặng</label>
                    <input type="password" class="form-control" name="weight" placeholder="Password">
                </div>

                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>