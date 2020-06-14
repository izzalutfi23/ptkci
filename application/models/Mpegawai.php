<?php

class Mpegawai extends CI_Model {

    public function getpegawai($id=null, $par=null){
        if($par['cari']!=null){
            $this->db->like('nama', $par['cari']);
        }
        else if($id!=null){
            $query=$this->db->where('nik', $id);
        }
        $query=$this->db->get('pegawai', $par['perpage'], $par['start']);
        return $query;
    }

    public function getpegawaistatus($par=null){
        if($par['cari']!=null){
            $this->db->like('nama', $par['cari']);
        }
        else if($par['status']=="CPNS"){
            $query = $this->db->where('status_kepegawaian', $par['status']);
        }
        else if($par['status']=="PNS"){
            $query = $this->db->where('status_kepegawaian !=', 'CPNS');
            $query = $this->db->like('status_kepegawaian', $par['status']);
        }
        else{
            $query = $this->db->like('status_kepegawaian', $par['status']);
        }
        $query=$this->db->get('pegawai', $par['perpage'], $par['start']);
        return $query;
    }

    public function getpns($param){
        $query = $this->db->where('status_kepegawaian !=', 'CPNS');
        $query = $this->db->like('status_kepegawaian', $param);
        $query=$this->db->get('pegawai');
        return $query;
    }

    public function getgty($param){
        $query = $this->db->like('status_kepegawaian', $param);
        $query=$this->db->get('pegawai');
        return $query;
    }

    public function gethonor($param){
        $query = $this->db->like('status_kepegawaian', $param);
        $query=$this->db->get('pegawai');
        return $query;
    }

    public function getcpns($param){
        $query = $this->db->where('status_kepegawaian', $param);
        $query=$this->db->get('pegawai');
        return $query;
    }

    public function getinfopeg(){
        $query = $this->db->order_by('tgl_lahir', 'asc');
        $query = $this->db->get('pegawai', 30, 0);
        return $query;
    }

    public function inputpeg($data){
        $param = array(
            'nama' => $data['nama'],
            'gelar' => $data['gelar'],
            'nik' => $data['nik'],
            'nuptk' => $data['nuptk'],
            'nip' => $data['nip'],
            'j_kel' => $data['j_kel'],
            'tmp_lahir' => $data['tmp_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'status_tgs' => $data['status_tgs'],
            'jenjang' => $data['jenjang'],
            'tempat_tgs' => $data['tempat_tgs'],
            'npsn' => $data['npsn'],
            'kecamatan' => $data['kecamatan'],
            'kabupaten' => $data['kabupaten'],
            'no_hp' => $data['no_hp'],
            'sk_cpns' => $data['sk_cpns'],
            'tgl_cpns' => $data['tgl_cpns'],
            'sk_pengangkatan' => $data['sk_pengangkatan'],
            'tmt_pengangkatan' => $data['tmt_pengangkatan'],
            'jenis_ptk' => $data['jenis_ptk'],
            'pendidikan' => $data['pendidikan'],
            'b_studipend' => $data['b_studipend'],
            'b_studisertifikasi' => $data['b_studisertifikasi'],
            'status_kepegawaian' => $data['status_kepegawaian'],
            'golongan' => $data['golongan'],
            'tmt_gol' => $data['tmt_gol'],
            'masa_kerjatahun' => $data['masa_kerjatahun'],
            'masa_kerjabulan' => $data['masa_kerjabulan'],
            'mapel_ajar' => $data['mapel_ajar'],
            'jam_ajarminggu' => $data['jam_ajarminggu'],
            'kepsek' => $data['kepsek']
        );

        $this->db->insert('pegawai', $param);
    }

    public function editpeg($data){
        $param = array(
            'nama' => $data['nama'],
            'gelar' => $data['gelar'],
            'nuptk' => $data['nuptk'],
            'nip' => $data['nip'],
            'j_kel' => $data['j_kel'],
            'tmp_lahir' => $data['tmp_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'status_tgs' => $data['status_tgs'],
            'jenjang' => $data['jenjang'],
            'tempat_tgs' => $data['tempat_tgs'],
            'npsn' => $data['npsn'],
            'kecamatan' => $data['kecamatan'],
            'kabupaten' => $data['kabupaten'],
            'no_hp' => $data['no_hp'],
            'sk_cpns' => $data['sk_cpns'],
            'tgl_cpns' => $data['tgl_cpns'],
            'sk_pengangkatan' => $data['sk_pengangkatan'],
            'tmt_pengangkatan' => $data['tmt_pengangkatan'],
            'jenis_ptk' => $data['jenis_ptk'],
            'pendidikan' => $data['pendidikan'],
            'b_studipend' => $data['b_studipend'],
            'b_studisertifikasi' => $data['b_studisertifikasi'],
            'status_kepegawaian' => $data['status_kepegawaian'],
            'golongan' => $data['golongan'],
            'tmt_gol' => $data['tmt_gol'],
            'masa_kerjatahun' => $data['masa_kerjatahun'],
            'masa_kerjabulan' => $data['masa_kerjabulan'],
            'mapel_ajar' => $data['mapel_ajar'],
            'jam_ajarminggu' => $data['jam_ajarminggu'],
            'kepsek' => $data['kepsek']
        );

        $this->db->update('pegawai', $param, ['nik' => $data['nik']]);
    }

    public function deletepeg($nik){
        $this->db->where('nik', $nik);
		$this->db->delete('pegawai');
    }

}
