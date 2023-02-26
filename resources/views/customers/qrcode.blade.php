<!DOCTYPE html>
<html>
<head>
	<title>Center Content</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
	</style>
</head>
<body>
	<div>
		<p style="text-align: center;">Scan this QR for proceed.</p>
        <div class="card">
            {!! QrCode::size(300)->generate($code) !!}
        </div>
        <br>
        <br>
        <p style="text-align: center;"><a href="/my-fuel-requests">Go Back</a></p>
	</div>
</body>
</html>

