<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TEST</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/Assets/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/Assets/quill/quill.snow.css" rel="stylesheet">
  <link href="/Assets/quill/quill.bubble.css" rel="stylesheet">
  <link href="/Assets/remixicon/remixicon.css" rel="stylesheet">
  <link href="/Assets/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

</head>
<body>
      
    
      <table>
        <thead>
          <tr>
            <td>ID</td>
            <td>Pro Name</td>
            <td>actu price</td>
            <td>sold price</td>
            <td>qty</td>
            <td>rev</td>
          </tr>
        </thead>
        <tbody>
          @foreach($topSellingProducts as $topSellingProduct)
            <tr>
              <th>{{$topSellingProduct->product_id}}</th>
              <th>{{$topSellingProduct->name}}</th>
              <th>{{$topSellingProduct->price}}</th>
              <th>{{$topSellingProduct->sold_price}}</th>
              <th>{{$topSellingProduct->quantity}}</th>
              <th>{{$topSellingProduct->quantity * $topSellingProduct->sold_price}}</th>
            </tr>
          @endforeach
        </tbody>
      </table>
    



          <!-- Vendor JS Files -->
          <script src="Assets/apexcharts/apexcharts.min.js"></script>
          <script src="Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="Assets/chart.js/chart.umd.js"></script>
          <script src="Assets/echarts/echarts.min.js"></script>
          <script src="Assets/quill/quill.min.js"></script>
          <script src="Assets/simple-datatables/simple-datatables.js"></script>
          <script src="Assets/tinymce/tinymce.min.js"></script>
          <script src="Assets/php-email-form/validate.js"></script>

          <!-- Template Main JS File -->
          <script src="/js/main.js"></script>
</body>
</html>