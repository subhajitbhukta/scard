<?php
    function pay(){
        $url="://pay?pa=Fcbizvdbj6k@freecharge&pn=SUBH93517789&tn=SUBH".rand(1000000,  9999999)."&am=1998&cu=INR&mode=02&purpose=00&tr=".rand(1000000,  9999999);
    return $url;
    }
    $c_url = "phonepe".pay();
    header('location: '.$c_url);
?>

tez://upi/pay?pa=fcbizae8yvr@freecharge&pn=Online%20Shopping&am=762.00&cu=INR&tn=Online%20Shopping
