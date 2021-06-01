<?php
class bla {
    private $nama;
    private $domisili;
    private $umur;
    private $jk;


    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function setDomisili($domisili)
    {
        $this->domisili = $domisili;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function setJk($jk)
    {
        $this->jk = $jk;
    }

    public function getNama()
    {
        return $this->nama;
    }
    public function getDomisili()
    {
        return $this->domisili;
    }
    public function getUmur()
    {
        return $this->umur;
    }
    public function getJk()
    {
        return $this->jk;
    }

        
    }

?>