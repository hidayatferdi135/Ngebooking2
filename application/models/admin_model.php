<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class admin_model extends CI_Model
{

	public function pesanan()
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->join('tb_pesanan', 'tb_hotel.id_hotel = tb_pesanan.id_hotel');
		$this->db->join('status', 'status.id_status = tb_pesanan.status');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function hotel()
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->join('kategori', 'tb_hotel.kategori = kategori.id_kategori');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function user()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->join('level_user', 'tb_user.level_user = level_user.id_level');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function hapus_pesanan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function hapus_hotel($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function hapus_user($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function show_user($id)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->join('level_user', 'tb_user.level_user = level_user.id_level');
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function show_hotel($id)
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->join('kategori', 'tb_hotel.kategori = kategori.id_kategori');
		$this->db->where('id_hotel', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function show_pesanan($id)
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->join('tb_pesanan', 'tb_hotel.id_hotel = tb_pesanan.id_hotel');
		$this->db->join('status', 'status.id_status = tb_pesanan.status');
		$this->db->where('id_pesanan', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function konfirmasi($where, $data, $table)
	{
		return $this->db->update('tb_pesanan', $data, $where);
	}

	public function row1()
	{   
	    $query = $this->db->get('tb_pesanan');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function row2()
	{   
	    $query = $this->db->get('tb_hotel');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function row3()
	{   
	    $query = $this->db->get('tb_user');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
	public function print($kode_booking='')
	{
		$this->db->select('*');
		$this->db->from('tb_hotel');
		$this->db->join('tb_pesanan', 'tb_hotel.id_hotel = tb_pesanan.id_hotel');
		$this->db->join('status', 'status.id_status = tb_pesanan.status');
		$this->db->where('tb_pesanan.kode_booking', $kode_booking);
		$query = $this->db->get();
		return $query->result_array();
	}
}