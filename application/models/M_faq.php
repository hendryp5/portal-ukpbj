<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_faq extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }

    //


    // BEGIN VIEW HALAMAN PAGE SAJA
    function viewkategori(){
        // $menunggu = 'A';

        // $this->db->where('approve',$menunggu);
        // $this->db->order_by('id_faqkategori','DESC');
        // $this->db->limit(1);
        $viewkategori= $this->db->get('tb_faqkategori');
        
        return $viewkategori->result_array();
    }

    function viewketeranganlpse(){
        $lpse = '1';

        $this->db->where('id_faqkategori',$lpse);
        $this->db->order_by('id_faqketerangan','DESC');
        // $this->db->limit(1);
        $viewketerangan= $this->db->get('tb_faqketerangan');
        
        return $viewketerangan->result_array();
    }

    function viewketeranganspse(){
        $spse = '2';

        $this->db->where('id_faqkategori',$spse);
        $this->db->order_by('id_faqketerangan','DESC');
        // $this->db->limit(1);
        $viewketerangan= $this->db->get('tb_faqketerangan');
        
        return $viewketerangan->result_array();
    }

    function viewketeranganapendo(){
        $apendo = '3';

        $this->db->where('id_faqkategori',$apendo);
        $this->db->order_by('id_faqketerangan','DESC');
        // $this->db->limit(1);
        $viewketeranganapendo= $this->db->get('tb_faqketerangan');
        
        return $viewketeranganapendo->result_array();
    }

    function viewketerangansikap(){
        $sikap = '4';

        $this->db->where('id_faqkategori',$sikap);
        $this->db->order_by('id_faqketerangan','DESC');
        // $this->db->limit(1);
        $viewketerangansikap= $this->db->get('tb_faqketerangan');
        
        return $viewketerangansikap->result_array();
    }

    function viewketeranganadp(){
        $adp = '5';

        $this->db->where('id_faqkategori',$adp);
        $this->db->order_by('id_faqketerangan','DESC');
        // $this->db->limit(1);
        $viewketeranganadp= $this->db->get('tb_faqketerangan');
        
        return $viewketeranganadp->result_array();
    }

    function viewketerangansirup(){
        $sirup = '6';

        $this->db->where('id_faqkategori',$sirup);
        $this->db->order_by('id_faqketerangan','DESC');
        // $this->db->limit(1);
        $viewketerangansirup= $this->db->get('tb_faqketerangan');
        
        return $viewketerangansirup->result_array();
    }
    // END VIEW HALAMAN PAGE SAJA

    // -----------------------------
    // | BEGIN HELPDESK KELOLA FAQ |
    // -----------------------------
    // ** BEGIN KETERANGAN FAQ **
    function show_faqketerangan(){
		$hasil=$this->db->query("SELECT * FROM tb_faqketerangan");
		return $hasil;
	}

	function simpan_faqketerangan($id_faqketerangan,$id_faqkategori,$judul,$keterangan,$pembuat,$created,$updated){
		$hasil=$this->db->query("INSERT INTO tb_faqketerangan (id_faqketerangan,id_faqkategori,judul,keterangan,pembuat,created,updated) VALUES ('$id_faqketerangan','$id_faqkategori','$judul','$keterangan','$pembuat','$created','$updated')");
		return $hasil;
	}

	function edit_faqketerangan($id_faqketerangan,$id_faqkategori,$judul,$keterangan,$pembuat,$created,$updated){
		$hasil=$this->db->query("UPDATE tb_faqketerangan SET id_faqkategori='$id_faqkategori',judul='$judul',keterangan='$keterangan',pembuat='$pembuat',created='$created',updated='$updated' WHERE id_faqketerangan='$id_faqketerangan'");
		return $hasil;
    }

    function hapus_faqketerangan($id_faqketerangan){
        $hasil=$this->db->query("DELETE FROM tb_faqketerangan WHERE id_faqketerangan='$id_faqketerangan'");
        return $hasil;
    }
    // ** END KETERANGAN FAQ **
    //
    // ** BEGIN KATEGORI FAQ **
    function show_faqkategori(){
		$hasil=$this->db->query("SELECT * FROM tb_faqkategori");
		return $hasil;
	}

	function simpan_faqkategori($id_faqkategori,$kategori,$pembuat,$created,$updated){
		$hasil=$this->db->query("INSERT INTO tb_faqkategori (id_faqkategori,kategori,pembuat,created,updated) VALUES ('$id_faqkategori','$kategori','$pembuat','$created','$updated')");
		return $hasil;
	}

	function edit_faqkategori($id_faqkategori,$kategori,$pembuat,$created,$updated){
		$hasil=$this->db->query("UPDATE tb_faqkategori SET kategori='$kategori',pembuat='$pembuat',created='$created',updated='$updated' WHERE id_faqkategori='$id_faqkategori'");
		return $hasil;
    }

    function hapus_faqkategori($id_faqkategori){
        $hasil=$this->db->query("DELETE FROM tb_faqkategori WHERE id_faqkategori='$id_faqkategori'");
        return $hasil;
    }
    // ** END KATEGORI FAQ **
    // -----------------------------
    // |  END HELPDESK KELOLA FAQ  |
    // -----------------------------

    //  BEGIN AMBIL DATA KATEGORI
    function getdata_kategori(){
        //$this->db->order_by('id_dataorang','DSC');
        //$databasepengunjung= $this->db->get('tb_dataorang');
        
        //return $databasepengunjung->result_array();    
        $query = $this->db->get('tb_faqkategori');
        return $query;  
    }
    //  END AMBIL DATA KATEGORI
}