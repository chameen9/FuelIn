<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Approved</title>
</head>
<body>
    <h3>{{$details['title']}}</h3>
    <p>Order ID  : {{$details['OrderId']}}</p>
    <p>Fuel Type : {{$details['FuelType']}}</p>
    <p>Liters    : {{$details['Liters']}}</p>
    <p>Expected Filling Time : {{$details['ExpectedFillingTime']}}</p>
    <br>
    <br>
    <br>
    <br>
    <p>This is a system generated email</p>
</body>
</html>