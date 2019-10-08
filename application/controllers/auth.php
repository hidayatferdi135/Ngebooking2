<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('konsumen/booking');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('auth/login');
		}else{
			$this->_login();
		}
	}

	public function index1()
	{
		if ($this->session->userdata('email')) {
			redirect('konsumen/index');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('admin/index');
		}else{
			$this->_login();
		}
	}

	public function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
		if ($user) {
				if (md5($user['password'])) {
					$data = [
						'email' => $user['email'],
						'level_user' => $user['level_user']
					];
					$this->session->set_userdata($data);
					if ($user['level_user'] == 1) {
						redirect('admin/home');
					}else{
						redirect('konsumen/search');
					}
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				  kata sandi salah!!
				</div>');
			redirect('auth/index');
				}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				  email belum terdaftar!!
				</div>');
			redirect('auth/index');
		}
	}

	public function registration()
	{		
		$this->form_validation->set_rules('nama_user', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email','required|trim|valid_email|is_unique[tb_user.email]',[
			'is_unique' => 'email sudah terdaftar!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
			'matches' => 'password tidak sama',
			'min_length' => 'password terlalu pendek'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registration Page';
			$this->load->view('auth/registration');
		}else{

				$data = [
				'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'level_user' => 2
				];
			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
				  Selamat Akun Telah Terdaftar, Silahkan Login!!
				</div>');
			redirect('auth/index');
			}
	}

	public function registration1()
	{		
		$this->form_validation->set_rules('nama_user', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email','required|trim|valid_email|is_unique[tb_user.email]',[
			'is_unique' => 'email sudah terdaftar!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
			'matches' => 'password tidak sama',
			'min_length' => 'password terlalu pendek'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registration Page';
			$this->load->view('auth/registration1', $data);
		}else{
				$config['upload_path'] = './assets/img/user/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '3000';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					echo $this->upload->display_errors();
				}
				$file = $this->upload->data();
				$image = $file['file_name'];

				$data = [
				'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => $image,
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'level_user' => 1,
				];
				$this->db->insert('tb_user', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
				  Selamat Akun Telah Terdaftar, Silahkan Login!!
				</div>');
			redirect('admin/user');
			}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level_user');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				  Selamat Akun Telah Logout!!
				</div>');
			redirect('auth/index');
	}

}
