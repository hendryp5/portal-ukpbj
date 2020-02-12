<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pberita extends CI_Model
{
    // PENYEDIA

    // TABEL DB
    private $_table = "tb_beritadaninformasi";

    // MENGAMBIL SEMUA DATA DARI DB
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    // MENGAMBIL DATA PER ID BERITA JUGA INFORMASI
    public function getById($url_berita)
    {
        return $this->db->get_where($this->_table, ["url_berita" => $url_berita])->row();
    }

    // BEGIN AMBIL DATA BERITA
    function viewberita(){
        $berita = 'berita';

        $this->db->where('jenis',$berita);
        $this->db->order_by("created", "desc");
        $this->db->limit(3);
        $viewberitainfo= $this->db->get('tb_beritadaninformasi');
        
        return $viewberitainfo->result_array();
    }

    // BEGIN AMBIL DATA BERITA
    function viewinformasi(){
        $informasi = 'informasi';

        $this->db->where('jenis',$informasi);
        $this->db->order_by("created", "desc");
        $this->db->limit(3);
        $viewinformasi= $this->db->get('tb_beritadaninformasi');
        
        return $viewinformasi->result_array();
    }

    // -------------------------------------- //
    //ambil data berita dari database
    function get_berita_list($limit, $start){
        $berita = 'berita';

        $this->db->where('jenis',$berita);
        $this->db->order_by("created", "desc");
        $query = $this->db->get('tb_beritadaninformasi', $limit, $start);
        return $query;
    }

    //hitung row berita
    function hitungtotalrowberita(){
        $berita = 'berita';

        $query = $this->db->where('jenis', $berita)->get('tb_beritadaninformasi');
        return $query->num_rows();
    }
    // -------------------------------------- //

    // -------------------------------------- //
    //ambil data informasi dari database
    function get_informasi_list($limit, $start){
        $informasi = 'informasi';

        $this->db->where('jenis',$informasi);
        $query = $this->db->get('tb_beritadaninformasi', $limit, $start);
        return $query;
    }

    //hitung row informasi
    function hitungtotalrowinformasi(){
        $informasi = 'informasi';

        $query = $this->db->where('jenis', $informasi)->get('tb_beritadaninformasi');
        return $query->num_rows();
    }
    // -------------------------------------- //
}