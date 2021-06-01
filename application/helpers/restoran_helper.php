<?php


	function cek_login()
{
 $ci = get_instance();
	 if (!$ci->session->userdata('email')) {
	 $ci->session->set_flashdata('pesan','
                <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                    Akses ditolak. Anda Belum Login <strong>Silahkan Login Dulu!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ');
	 if ($ci->session->userdata('role_id') == 1) {
	 redirect('auth/login');
	 } else {
	 redirect('');
	 }
	 } else {
	 $role_id = $ci->session->userdata('role_id');
	 $id = $ci->session->userdata('id');
	 }
}
function cek_user()
{
	 $ci = get_instance();
	 $role_id = $ci->session->userdata('role_id');
	 if ($role_id != 1) {
	 $ci->session->set_flashdata('pesan', '<div class="alert alertdanger" role="alert">Akses tidak diizinkan </div>');
	 redirect('');
	 }
}

