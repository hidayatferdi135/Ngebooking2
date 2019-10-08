<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class hotel_model extends CI_Model
{
	
	public function cari_Hotel($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->like('nama_hotel', $keyword);
		$this->db->or_like('alamat_hotel', $keyword);
		$this->db->join('kategori', 'tb_hotel.kategori = kategori.id_kategori');
		return $this->db->get()->result();
	}

	public function tipe($id_hotel='')
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->join('kategori', 'tb_hotel.kategori = kategori.id_kategori');
		$this->db->where('tb_hotel.id_hotel', $id_hotel);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function bayar($kode_booking='')
	{
		$this->db->select('*');
		$this->db->from('tb_pesanan');
		$this->db->join('tb_hotel', 'tb_pesanan.id_hotel = tb_hotel.id_hotel');
		$this->db->where('tb_pesanan.kode_booking', $kode_booking);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function konfirmasi($where, $data, $table)
	{
		return $this->db->update('tb_pesanan', $data, $where);
	}

	public function selesai($kode_booking='')
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->join('tb_pesanan', 'tb_hotel.id_hotel = tb_pesanan.id_hotel');
		$this->db->join('status', 'status.id_status = tb_pesanan.status');
		$this->db->where('tb_pesanan.kode_booking', $kode_booking);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function selesai1($nama_user='')
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->join('tb_pesanan', 'tb_hotel.id_hotel = tb_pesanan.id_hotel');
		$this->db->join('status', 'status.id_status = tb_pesanan.status');
		$this->db->where('tb_pesanan.kode_booking', $nama_user);
		$query = $this->db->get();
		return $query->result_array();
	}
}