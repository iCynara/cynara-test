<?php
/**
 * Created by PhpStorm.
 * User: cynarali
 * Date: 2016-12-09
 * Time: 2:30 PM
 */

class LittleAlgorithm extends CI_Controller {

    function fibonacci($n=10)
    {
        $fib = [1,2];
        for($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i-1] + $fib[$i-2];
        }
        return $fib;
    }

    /**
     * http://cynara.local/LittleAlgorithm/displayFib?fibTimes=15
     */
    function displayFib()
    {
        $n = isset($_GET['fibTimes'])?$_GET['fibTimes']:5;
        $fib = $this->fibonacci($n);
        $data['fib'] = implode(',', $fib);

        $this->load->view('little_algorithm', $data);
    }
}