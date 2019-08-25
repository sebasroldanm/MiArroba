<?php
include('GoogChart.class.php');
$chart = new GoogChart();

$data = array( 
		'February 2008' => array (
			'IE7' => 50,
			'IE6' => 30.7,
			'IE5' => 1.7,
			'Firefox' => 36.5,
			'Mozilla' => 1.1,
			'Safari' => 2,
			'Opera' => 1.4,
		),
		'January 2008' => array (
			'IE7' => 22,
			'IE6' => 30.7,
			'IE5' => 1.7,
			'Firefox' => 36.5,
			'Mozilla' => 1.1,
			'Safari' => 2,
			'Opera' => 1.4,
		),
	);

$color = array(
			'#99C754',
			'#54C7C5',
			'#999999',
		);

$chart->setChartAttrs( array(
			'type' => 'bar-vertical',
			'title' => 'Browser market 2008',
			'data' => $data,
			'size' => array( 550, 300 ),
			'color' => $color,
			'labelsXY' => true,
	));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Google Charts API Demo</title>
</head>
<body>
<?php echo $chart; ?>
</body>
</html>