<?php

function betweenDays($startDate, $endDate){
    $startDate = date('Y-m-d', strtotime($startDate));
    $endDate = date('Y-m-d', strtotime($endDate));

    $date = $startDate;
    
    while($date <= $endDate){

    	if ($date==$endDate){
    		echo $date;
    	}
    	else{
    		echo $date.',';
    	}

    	$date = date('Y-m-d', strtotime('+1 day',strtotime($date)));
    }
}

betweenDays('2019-2-01','2019-3-01');
