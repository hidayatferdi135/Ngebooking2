<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('Ciqrcode');
		$this->load->model('hotel_model');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('konsumen/index', $data);
	}

	public function search()
	{
			$keyword = $this->input->post('keyword');
			$data['tb_hotel'] = $this->hotel_model->cari_Hotel($keyword);
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('konsumen/hotel', $data);
	}

	public function tipe()
	{
		if ($this->session->userdata('email')) {
			$id_hotel = $this->uri->segment(3);
			$data['tipe'] = $this->hotel_model->tipe($id_hotel);
			$this->load->view('konsumen/tipe', $data);
		}else{
			redirect('auth/index');
		}
	}

	public function pesan()
	{
		if ($this->session->userdata('email')) {
			$this->form_validation->set_rules('check_in', 'In', 'required|trim');
			$this->form_validation->set_rules('durasi', 'Durasi', 'required|trim');
			$this->form_validation->set_rules('id_hotel', 'Id', 'required|trim');
			$this->form_validation->set_rules('nama_hotel', 'Hotel', 'required|trim');
			$this->form_validation->set_rules('bintang', 'Bintang', 'trim|required');
			$this->form_validation->set_rules('alamat_hotel', 'Alamat', 'required|trim');
			$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
			$this->form_validation->set_rules('image', 'Image', 'required|trim');
			$this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');
			if ($this->form_validation->run() == false) {
				$data['tb_hotel'] = $this->db->get('tb_hotel')->result_array();
				$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

				$this->load->view('konsumen/booking', $data);
			}else{
				$data = [
					'check_in' => htmlspecialchars($this->input->post('check_in', true)),
					'durasi' => htmlspecialchars($this->input->post('durasi', true)),
					'id_hotel' => htmlspecialchars($this->input->post('id_hotel', true)),
					'nama_hotel' => htmlspecialchars($this->input->post('nama_hotel', true)),
					'bintang' => htmlspecialchars($this->input->post('bintang', true)),
					'alamat_hotel' => htmlspecialchars($this->input->post('alamat_hotel', true)),
					'harga' => htmlspecialchars($this->input->post('harga', true)),
					'image' => htmlspecialchars($this->input->post('image', true)),
					'tipe' => htmlspecialchars($this->input->post('tipe', true)),
				];
				$this->load->view('konsumen/booking', $data);
			}
		}else{
			
			redirect('konsumen/before_login');
		}
	}


	public function booking()
	{
		if ($this->session->userdata('email')) {
			$this->form_validation->set_rules('kode_booking', 'Kode', 'required|trim');
			$this->form_validation->set_rules('nama_user', 'Nama', 'required|trim');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
			$this->form_validation->set_rules('no_hp', 'No', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim');
			$this->form_validation->set_rules('id_hotel', 'Id', 'trim|required');
			$this->form_validation->set_rules('check_in', 'Check', 'required|trim');
			$this->form_validation->set_rules('durasi', 'Durasi', 'required|trim');
			$this->form_validation->set_rules('total', 'Total', 'required|trim');
			$this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');
			if ($this->form_validation->run() == false) {
				$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

				$this->load->view('konsumen/bayar', $data);
			}else{
				$data = [
					'kode_booking' => htmlspecialchars($this->input->post('kode_booking', true)),
					'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
					'alamat' => htmlspecialchars($this->input->post('alamat', true)),
					'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
					'email' => htmlspecialchars($this->input->post('email', true)),
					'id_hotel' => htmlspecialchars($this->input->post('id_hotel', true)),
					'check_in' => htmlspecialchars($this->input->post('check_in', true)),
					'durasi' => htmlspecialchars($this->input->post('durasi', true)),
					'total' => htmlspecialchars($this->input->post('total', true)),
					'tipe' => htmlspecialchars($this->input->post('tipe', true)),
					'status' => '2'

				];
				$this->db->insert('tb_pesanan', $data);
				redirect('konsumen/bayar/'.$data['kode_booking'], $data);
			}
		}else{
			
			redirect('auth/index');
		}
	}


	public function bayar()
	{
		if ($this->session->userdata('email')) {
			$kode_booking = $this->uri->segment(3);
			$data['bayar'] = $this->hotel_model->bayar($kode_booking);
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('konsumen/bayar', $data);
		}else{
			
			redirect('auth/index');
		}
	}

	public function konfirmasi1()
	{
		$id_pesanan = $this->input->post('id_pesanan');
		$kode_booking = $this->input->post('kode_booking');
		$nomor = $this->input->post('nomor');
		$status = $this->input->post('status');

		$data = array(
			'nomor' => $nomor,
			'bukti' => 'not-found.png',
			'kode_booking' => $kode_booking,
			'status' => $status
		);

		$where = array(
			'id_pesanan' => $id_pesanan
		);

		$this->hotel_model->konfirmasi($where, $data, 'tb_pesanan');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Pesanan akan segera dikonfirmasi",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('konsumen/selesai/'.$data['kode_booking'], $data);
	}

	public function konfirmasi()
	{
		$id_pesanan = $this->input->post('id_pesanan');
		$kode_booking = $this->input->post('kode_booking');
		$nomor = $this->input->post('nomor');
		$config['upload_path'] = 'assets/img/bukti/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '3000';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('bukti')) {
					echo $this->upload->display_errors();
				}
				$file = $this->upload->data();
				$bukti = $file['file_name'];

		$data = array(
			'nomor' => $nomor,
			'bukti' => $bukti,
			'kode_booking' => $kode_booking
		);

		$where = array(
			'id_pesanan' => $id_pesanan
		);

		$this->hotel_model->konfirmasi($where, $data, 'tb_pesanan');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Pesanan akan segera dikonfirmasi",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('konsumen/selesai/'.$data['kode_booking'], $data);
	}

	public function selesai()
	{
		$kode_booking = $this->uri->segment(3);
		$data['selesai'] = $this->hotel_model->selesai($kode_booking);
		$this->load->view('konsumen/selesai', $data);
	}
	public function selesai1($kode='')
	{
		$kode_booking = $this->uri->segment(3);
		$data['selesai'] = $this->hotel_model->selesai($kode_booking);
		$this->load->view('konsumen/selesai1', $data);
		QRcode::png(
			$kode,
			$outfile = false,
			$level = QR_ECLEVEL_H,
			$size = 10,
			$margin = 1
		);
	}
	public function QRcode($kode='')
	{
		// qr dengan format png
		QRcode::png(
			$kode,
			$outfile = false,
			$level = QR_ECLEVEL_H,
			$size = 5,
			$margin = 1
		);
	}
	public function print()
	{
		$kode_booking = $this->uri->segment(3);
		$data['selesai'] = $this->hotel_model->selesai($kode_booking);
		$this->load->view('konsumen/print', $data);
	}

	public function before_login()
	{
		$this->session->unset_userdata('check_in');
		$this->session->unset_userdata('durasi');
		$this->session->unset_userdata('jumlah');
		$this->session->unset_userdata('id_hotel');
		$this->session->unset_userdata('nama_hotel');
		$this->session->unset_userdata('bintang');
		$this->session->unset_userdata('alamat_hotel');
		$this->session->unset_userdata('harga');
		$this->session->unset_userdata('image');
		redirect('auth/index');
	}

}
