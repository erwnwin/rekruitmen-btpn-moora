<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('alamat_email')) {
        redirect(base_url('login_page'));
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);
    }
}
