<?php
    class Barang_model extends CI_model {
        public function getAllBarang()
        {
            return $this->db->get('data_barang')->result_array();
        }

        public function tambahDataBarang()
        {
            $data = [
                "nama_barang" => $this->input->post('nama_barang', true),
                "merk" => $this->input->post('merk', true),
                "kategori" => $this->input->post('kategori', true),
                "jumlah" => $this->input->post('jumlah', true)
            ];

            $this->db->insert('data_barang', $data);
        }

        public function hapusDataBarang($id)
        {
            $this->db->where('id_barang', $id);
            $this->db->delete('data_barang');
        }

        public function ubahDataBarang()
        {
            $data = [
                "nama_barang" => $this->input->post('nama_barang', true),
                "merk" => $this->input->post('merk', true),
                "kategori" => $this->input->post('kategori', true),
                "jumlah" => $this->input->post('jumlah', true)
            ];

            $this->db->where('id_barang', $this->input->post('id_barang'));
            $this->db->update('data_barang', $data);
        }
    }
?>