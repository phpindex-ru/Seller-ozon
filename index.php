<?php 

$array = array(
	array(
		'time' => '1567288800',
        'views' => '10',
        'values' => 'It is a long established fact that a reader will be distracted by the readable content'
	),
	array(
		'time' => '1535752800',
        'views' => '30',
        'values' => 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters'
	),
	array(
		'time' => '1598911200',
        'views' => '20',
        'values' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum'
	)
);
 
function cmp_function_desc($a, $b) {
	return ($a['views'] > $b['views']);
}
 
uasort($array, 'cmp_function_desc');
echo '<pre>';
print_r($array);
echo '</pre>';








function array_multisort_value()
{
	$args = func_get_args();
	$data = array_shift($args);
	foreach ($args as $n => $field) {
		if (is_string($field)) {
			$tmp = array();
			foreach ($data as $key => $row) {
				$tmp[$key] = $row[$field];
			}
			$args[$n] = $tmp;
		}
	}
	$args[] = &$data;
	call_user_func_array('array_multisort', $args);
	return array_pop($args);
}
 
$array = array(
	array(
		'time' => '1567288800',
        'views' => '10',
        'values' => 'It is a long established fact that a reader will be distracted by the readable content'
	),
	array(
		'time' => '1535752800',
        'views' => '30',
        'values' => 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters'
	),
	array(
		'time' => '1598911200',
        'views' => '20',
        'values' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum'
	)
);
 
$array = array_multisort_value($array, 'views', SORT_ASC);
echo '<pre>';
print_r($array);
echo '</pre>';


















echo strtotime("1 September 2018");
echo '<br>';
echo strtotime("1 September 2019");
echo '<br>';
echo strtotime("1 September 2020");



?>