<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin_model');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['row1'] = $this->admin_model->row1();
		$data['row2'] = $this->admin_model->row2();
		$data['row3'] = $this->admin_model->row3();
		$data['pesanan'] = $this->admin_model->pesanan();
		$data['data'] = $this->db->get('tb_user')->result_array();
		$this->load->view('admin/index', $data);
	}

	public function home()
	{
		$data['title'] = 'Dashboard'; 
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['row1'] = $this->admin_model->row1();
		$data['row2'] = $this->admin_model->row2();
		$data['row3'] = $this->admin_model->row3();
		$data['pesanan'] = $this->admin_model->pesanan();
		$data['data'] = $this->db->get('tb_user')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('templates/footer', $data);
	}

	public function pesanan()
	{
		$data['title'] = 'Data Pesanan';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['row1'] = $this->admin_model->row1();
		$data['pesanan'] = $this->admin_model->pesanan();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/pesanan', $data);
		$this->load->view('templates/footer', $data);
	}

	public function hapus_pesanan($id)
	{
		$where = array('id_pesanan' => $id);
		$this->admin_model->hapus_pesanan($where, 'tb_pesanan');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Pesanan telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/pesanan');

	}

	public function konfirmasi()
	{
		$id = $this->input->post('id_pesanan');
		$status = $this->input->post('status');

		$data = array(
			'status' => '1'
		);

		$where = array(
			'id_pesanan' => $id
		);

		$this->admin_model->konfirmasi($where, $data, 'tb_pesanan');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Pesanan dikonfirmasi",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/pesanan');
		
	}


	public function hotel()
	{
		$data['title'] = 'Data Hotel';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['row1'] = $this->admin_model->row1();
		$data['pesanan'] = $this->admin_model->pesanan();
		$data['hotel'] = $this->admin_model->hotel();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/hotel', $data);
		$this->load->view('templates/footer', $data);
	}

	public function tambah_hotel()
	{
		$this->form_validation->set_rules('nama_hotel', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat_hotel', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('harga1', 'Harga1', 'required|trim');
		$this->form_validation->set_rules('harga2', 'Harga2', 'required|trim');
		$this->form_validation->set_rules('no_hotel', 'No', 'required|trim');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('bintang', 'Bintang', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Data Hotel';
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['hotel'] = $this->admin_model->hotel();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/hotel', $data);
			$this->load->view('templates/footer', $data);
		}else{
				$config['upload_path'] = 'assets/img/hotel/';
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
				'nama_hotel' => htmlspecialchars($this->input->post('nama_hotel', true)),
				'alamat_hotel' => htmlspecialchars($this->input->post('alamat_hotel', true)),
				'image' => $image,
				'image1' => 'image1.jpeg',
				'image2' => 'image2.jpeg',
				'harga1' => htmlspecialchars($this->input->post('harga1', true)),
				'harga2' => htmlspecialchars($this->input->post('harga2', true)),
				'no_hotel' => htmlspecialchars($this->input->post('no_hotel', true)),
				'kategori' => htmlspecialchars($this->input->post('kategori', true)),
				'bintang' => htmlspecialchars($this->input->post('bintang', true)),
				];
				$this->db->insert('tb_hotel', $data);
				$this->session->set_flashdata('pesan', '
					<script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah ditambah",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
					');
				redirect('admin/hotel');
				}
	}

	public function hapus_hotel($id)
	{
		$where = array('id_hotel' => $id);
		$this->admin_model->hapus_pesanan($where, 'tb_hotel');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/hotel');

	}

	public function user()
	{
		$data['title'] = 'Data User';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['row1'] = $this->admin_model->row1();
		$data['pesanan'] = $this->admin_model->pesanan();
		$data['users'] = $this->admin_model->user();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/user', $data);
		$this->load->view('templates/footer', $data);
	}

	public function hapus_user($id)
	{
		$where = array('id_user' => $id);
		$this->admin_model->hapus_pesanan($where, 'tb_user');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/user');
	}

	public function show_user($id)
	{
		$data = $this->admin_model->show_user($id);
		echo json_encode($data);
	}

	public function show_hotel($id)
	{
		$data = $this->admin_model->show_hotel($id);
		echo json_encode($data);
	}

	public function show_pesanan($id)
	{
		$data = $this->admin_model->show_pesanan($id);
		echo json_encode($data);
	}
	public function edit()
	{
		$data['title'] = 'Edit Profiles';
		$data['row1'] = $this->admin_model->row1();
		$data['pesanan'] = $this->admin_model->pesanan();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_user', 'Full Name', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/edit', $data);
			$this->load->view('templates/footer', $data);	
		}else{
			$nama_user = $this->input->post('nama_user');
			$email = $this->input->post('email');

			$upload_image = $_FILES['image']['nama_user'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/user/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/user' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}else{
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('nama_user', $nama_user);
			$this->db->where('email', $email);
			$this->db->update('tb_user');

			$this->session->set_flashdata('pesan', '<script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data sudah diedit",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>');
			redirect('admin/user');
		}
	}

	public function print()
	{
		$data['title'] = 'Data Pesanan';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['row1'] = $this->admin_model->row1();
		$data['pesanan'] = $this->admin_model->pesanan();
		
		$this->load->view('admin/print', $data);
	}

	public function print1()
	{
		$kode_booking = $this->uri->segment(3);
		$data['selesai'] = $this->admin_model->print($kode_booking);
		$this->load->view('admin/print1', $data);
	}


}
