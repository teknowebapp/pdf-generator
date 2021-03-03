<!DOCTYPE html>

<head>
    <title><?php echo "Semester ".$this->input->get('smt')." - ".$detail->mahasiswa;?></title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }
    </style>
</head>

<body>
    <div id="halaman">
        <h3 id="judul">MATA KULIAH SEMESTER <?php echo $this->input->get('smt');?></h3>
        <table>
            <tr>
                <td style="width: 30%;">Nama Mahasiswa</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $detail->mahasiswa;?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Semester</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $this->input->get('smt');?></td>
            </tr>
        </table>
        <p class="pt-3">Berikut daftar mata kuliah Semester <?php echo $this->input->get('smt');?> yang kamu ambil. Simpan surat ini dengan baik sebagai bukti telah melakukan perwalian.</p>
        <table style="width:100%">
            <thead>
                <tr>
                    <th class="text-center text-nowrap">No</th>
                    <th class="text-center text-nowrap">Kode Matkul</th>
                    <th class="text-center text-nowrap">Nama Matkul</th>
                    <th class="text-center text-nowrap">Semester</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 0;
                    foreach ($matkul as $matkul):
                        $no++;
                ?>
                <tr>
                    <td class="text-center"><?php echo $no;?></td>
                    <td class="text-center"><?php echo $matkul->kode_matkul;?></td>
                    <td class="text-center"><?php echo $matkul->nama_matkul;?></td>
                    <td class="text-center"><?php echo $matkul->semester;?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>