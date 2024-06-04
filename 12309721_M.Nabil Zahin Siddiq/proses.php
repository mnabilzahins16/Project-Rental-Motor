<?php
    class Bikes {
        protected $pajak, 
                $diskon;
        private $NakedBike, 
                $SportBike, 
                $RetroBike, 
                $TouringBike;
        public $jumlah, 
                $jenis, 
                $member = ['Edward', 'Geo', 'Nabil', 'Rayhan'],
                $name;

        function __construct() {
            $this->pajak = 10000;
        }

        public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
            $this->NakedBike = $tipe1;
            $this->SportBike = $tipe2;
            $this->RetroBike = $tipe3;
            $this->TouringBike = $tipe4;
        }

        public function getHarga() {
            $data['NakedBike'] = $this->NakedBike;
            $data['SportBike'] = $this->SportBike;
            $data['RetroBike'] = $this->RetroBike;
            $data['TouringBike'] = $this->TouringBike;
            return $data;
        }
    }


    class Beli extends Bikes {
        public function cetakPembelian() {
            $dataHarga = $this->getHarga();
            $hargaBeli = $this->time * $dataHarga[$this->jenis];
            $hargaRental = $hargaBeli + $this->pajak;
            if ($this->name == 'Edward' || $this->name == 'Geo' || $this->name == 'Nabil' || $this->name == 'Rayhan') {
                $status = "Member ";
                $hargaRental1 = $hargaRental;
                $hargaDiskon = $hargaRental1 * 5/100;
                $hargaRental = $hargaRental1 - $hargaDiskon;
                $diskon = "mendapatkan diskon sebesar 5%";
            } else {
                $status = "Non-Member ";
                $diskon = "tidak mendapat diskon";
            }

            echo "<center>";
            echo "------------------------------------------------------------------ <br>";
            echo $this->name . " ber-status  sebagai " . $status . $diskon . "<br>";
            echo "Jenis Motor yang di rental adalah " . $this->jenis . " selama " . $this->time . " hari <br>";
            echo "Harga rental per-harinya : " . number_format($dataHarga[$this->jenis], 0, ',', '.') . "<br><br>";
            echo "Besar yang harus dibayar adalah " . number_format($hargaRental, 0, ',', '.') . "<br>";
            echo "------------------------------------------------------------------ <br>";
            echo "</center>";
        }
    }
?>