<?php
function format_date($timestamp){
$time_ago=strtotime($timestamp);
$current_time=time();
$time_difference=$current_time - $time_ago;
$seconds=$time_difference;
$minutes=round($seconds /60);
$hours=round($seconds / 3600 );
$days=round($seconds / 86400 );
$weeks=round($seconds / 604800 );
$months=round($seconds / 2629440 );
$years=round($seconds / 31553280 );

if($seconds <= 60){
	return "Just now";
}else if ($minutes <= 60) {

	if($minutes==1){
		return "A minute ago";
	}else{
	return '$minutes  minutes ago';}
}else if($hours<=24){
if($hours==1){
	return "An hour ago";
}else{
	return "$hours hours ago";
}
}else if ($days<=7) { 
	if($days==1){
		return "Yesterday";
	}else{
		return "$days days ago";
	}
}else if ($weeks<=4.3) {
if($weeks==1)
{
	return "one week ago";
}else{
	return "$weeks weeks ago";
}}else if ($months<=12) {
if($months==1){
	return "amonth ago";
}else{
return "$months months ago";
}
}else{
	if($years==1){
		return "one year ago";
	}else{
		return "$years years ago";
	}
}

}
date_default_timezone_set('America/New_York');
echo '<h3>',format_date('2017-04-13 08:08:00'),'</h3>';

?>