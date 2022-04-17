<?php
    include("../connect/db_connect.php");

    function emptyInputSignup($TNAME, $TOTAL_BLOCKS , $TOTAL_SEATS){

        if( empty($TNAME) || empty($TOTAL_BLOCKS) || empty($TOTAL_SEATS) ){
            return true;
        }
        else return false;

    }

    function createTrain($TNAME, $TOTAL_BLOCKS , $TOTAL_SEATS){
        include("../connect/db_connect.php");
        $sql="INSERT INTO TRAINS (TNAME, TOTAL_BLOCKS, TOTAL_SEATS) VALUES ('$TNAME', '$TOTAL_BLOCKS', '$TOTAL_SEATS')";
        $stid = oci_parse($conn, $sql);
        $r = oci_execute($stid);
        if (!$r) {
        $m = oci_error($stid); 
        trigger_error('Could not execute statement: '. $m['message'] . "  ". $dob, E_USER_ERROR);
                header("location:user_register.php?error=stmtfailed");
        exit();
    }

?>