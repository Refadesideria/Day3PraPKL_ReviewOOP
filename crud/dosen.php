<?php
    class Dosen extends Database
    {
        // menampilkan data dosen ke index.php
        public function index()
        {
            $datadosen = mysqli_query($this->koneksi, "select * from dosen");

            return $datadosen;
        }

        public function create($nipd,$nama)
        {
            mysqli_query($this->koneksi,
                        "insert into dosen values (null,'$nipd','$nama')"
                    );

        }
        // memilih data dosen yang akan diubah
        public function edit($id)
        {
            $datadosen = mysqli_query($this->koneksi, 
                        "select * from dosen  where id='$id'"
                    );

            return $datadosen;
        }
        // merubah data dosen
        public function update($id, $nipd, $nama)
        {
            mysqli_query(
                $this->koneksi,
                "update dosen set nipd='$nipd', nama='$nama'  where id='$id'"
            );
        }

        // menampilkan data dosen berdasarkan id
        public function show($id)
        {
            $datadosen = mysqli_query($this->koneksi, 
                        "select * from dosen where id='$id'"
                    );

            return $datadosen;
        }

         // menghapus data dosen
         public function delete($id)
         {
             mysqli_query($this->koneksi, "delete from dosen where id='$id'"
                     );
 
         }

        
        
    }
?>