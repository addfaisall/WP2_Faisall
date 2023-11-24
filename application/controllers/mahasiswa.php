<?php
class mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-input-mahasiswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules ('nama', 'Nama mahasiswa', 'required|min_length[4]', ['required' => 'Harap Mengisi Nama', 'min_length' => 'Nama Mahasiswa Terlalu Pendek']);
        $this->form_validation->set_rules ('nis', 'NIS mahasiswa', 'required|min_length[8]', ['required' => 'Harap Mengisi NIS', 'min_length' => 'NIS Anda Tidak Ditemukan']);
        $this->form_validation->set_rules ('kelas', 'Kelas mahasiswa', 'required|min_length[0]', ['required' => 'Harap Mengisi Kelas', 'min_length' => 'Kelas Anda Tidak Ditemukan']);
        $this->form_validation->set_rules ('tanggal', 'tanggal lahir', 'required|min_length[0]', ['required' => 'Harap Mengisi Tanggal Lahir', 'min_length' => 'Tanggal Lahir Harus Diisi']);
        $this->form_validation->set_rules ('tempat', 'tempat lahir', 'required|min_length[0]', ['required' => 'Harap Mengisi Tempat Lahir', 'min_length' => 'Tempat Lahir Harus Diisi']);
        $this->form_validation->set_rules ('alamat', 'Alamat mahasiswa', 'required|min_length[0]', ['required' => 'Harap Mengisi Alamat', 'min_length' => 'Alamat Mahasiswa Harus Diisi']);
        $this->form_validation->set_rules ('kelamin', 'Jenis kelamin mahasiswa', 'required|min_length[0]', ['required' => 'Harap Mengisi Jenis Kelamin', 'min_length' => 'Jenis Kelamin Harus Diisi']);
        $this->form_validation->set_rules ('agama', 'Agama mahasiswa', 'required|max_length[12]', ['required' => 'Harap Mengisi Agama', 'max_length' => 'Agama Mahasiswa Harus Diisi']);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-input-mahasiswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kelamin' => $this->input->post('kelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-mahasiswa', $data);
        }
    }
}