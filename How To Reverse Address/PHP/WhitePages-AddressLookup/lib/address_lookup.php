<?php
/**
 * Library for abstraction of methods to use Whitepages Pro API
 * @require     PHP5
 *
 * @author      Kushal Shah
 * @date        2014-06-01
 */
include 'whitepages_lib.php';
include 'result.php';

if (isset($_POST['submit'])) {
    if (!empty($_POST['street_line_1'])) {
        if (!empty($_POST['city'])) {
            $param = array(
                'street_line_1' => trim($_POST['street_line_1']),
                'city' => trim($_POST['city'])
            );
            $whitepages_obj = new WhitepagesLib();
            $api_response = $whitepages_obj->reverse_address($param);
            try {
                if ($api_response === false) {
                    throw new Exception;
                }
                $result = new Result($api_response);
            } catch(Exception $exception) {
                echo "Error Api response";
            }
        } else {
            $error = 'Please enter city and state or zip.';
        }
    } else {
        $error = 'Please enter your address details.';
    }
}

