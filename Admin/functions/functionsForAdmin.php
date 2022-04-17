<?php
    include("../connect/db_connect.php");

    function emptyInputSignup($TNAME){

        if( empty($TNAME)){
            return true;
        }
        else return false;

    }

    function createTrain($TNAME){
        include("../connect/db_connect.php");
        $sql="INSERT INTO TRAINS (TNAME) VALUES ('$TNAME')";
        $stid = oci_parse($conn, $sql);
        $r = oci_execute($stid);
        if (!$r) {
        $m = oci_error($stid); 
        trigger_error('Could not execute statement: '. $m['message'] , E_USER_ERROR);
                header("location:create_train.php?error=stmtfailed");
        exit();
    }

    function createBlock($BNAME, $TOTAL_SEATS, $CLASS, $FARE){
        include("../connect/db_connect.php");
        $sql="INSERT INTO  BLOCKS(BNAME, TOTAL_SEATS, CLASS, FARE) VALUES ('$BNAME', '$TOTAL_SEATS', '$CLASS', '$FARE')";
        $stid = oci_parse($conn, $sql);
        $r = oci_execute($stid);
        if (!$r) {
        $m = oci_error($stid); 
        trigger_error('Could not execute statement: '. $m['message'] , E_USER_ERROR);
                header("location:create_block.php?error=stmtfailed");
        exit();
    }

    function createSeat($BID, $TID){
        include("../connect/db_connect.php");
        
        $sql="SELECT TOTAL_SEATS FROM BLOCKS WHERE BID=$BID AND TID=$TID";        
        
        $stid = oci_parse($conn, $sql);
        $r= oci_execute($stid);

        if($row= oci_fetch_assoc($stid)){
            $TOTAL_SEATS=$row['TOTAL_SEATS'];
            
            for($i=1; $i<=$TOTAL_SEATS; $i++){
                
                $sql2="INSERT INTO SEATS (SEAT_NUM, TID, BID) VALUES($i, $TID, $BID )";
                
                $stid2 = oci_parse($conn, $sql2);
                $r2 =oci_execute($stid2);
                
                if (!$r2) {
                    $m = oci_error($stid2); 
                    trigger_error('Could not execute statement: '. $m['message'] , E_USER_ERROR);
                            header("location:create_seat.php?error=stmtfailed");
                    exit();
            }
        }
        
        if (!$r) {
        $m = oci_error($stid); 
        trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
                header("location:create_seat.php?error=stmtfailed");
        exit();
    }

    function createAdmin($email){
        include("../connect/db_connect.php");
        $sql="UPDATE USERS SET ISADMIN=1 WHERE EMAIL='$email'";
        $stid = oci_parse($conn, $sql);
        $r = oci_execute($stid);
        if (!$r) {
        $m = oci_error($stid); 
        trigger_error('Could not execute statement: '. $m['message'] , E_USER_ERROR);
                header("location:create_admin.php?error=stmtfailed");
        exit();
    }

    function createRoute($SOURCE, $DEST, $FARE){
        include("../connect/db_connect.php");
        $sql="INSERT INTO ROUTES (SOURCE, DEST, FARE) VALUES ('$SOURCE', '$DEST', $FARE)";
        $stid = oci_parse($conn, $sql);
        $r = oci_execute($stid);
        if (!$r) {
        $m = oci_error($stid); 
        trigger_error('Could not execute statement: '. $m['message'] , E_USER_ERROR);
                header("location:create_route.php?error=stmtfailed");
        exit();
    }


?>