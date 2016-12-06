<?php
/**
 * Created by PhpStorm.
 * User: cynarali
 * Date: 2016-12-06
 * Time: 5:06 PM
 */

class UserLogin extends CI_Controller {

    /**
     * /index.php/userlogin/
     */
    public function index()
    {
        $data['greeting'] = 'Please Login';
        $this->load->view('user_login', $data);
    }
}
