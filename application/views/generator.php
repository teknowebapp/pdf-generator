<!DOCTYPE html>
<head>
    <title><?= "Periode " . $this->input->get('periode') . " - " . $student->name;?></title>
    <meta charset="utf-8">
    <style>
        #title {
            text-align: center;
        }

        #page {
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
    <div id="page">
        <h3 id="title">Course Periode <?= $this->input->get('periode');?></h3>
        <table>
            <tr>
                <td style="width: 30%;">Student</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?= $student->name;?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Periode</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?= $this->input->get('periode');?></td>
            </tr>
        </table>
        <p class="pt-3">Here is a list of courses periode <?= $this->input->get('periode');?> that you are taking. Keep this letter well as proof of having carried out guardianship.</p>
        <table style="width:100%">
            <thead>
                <tr>
                    <th class="text-center text-nowrap">No</th>
                    <th class="text-center text-nowrap">Code</th>
                    <th class="text-center text-nowrap">Lesson</th>
                    <th class="text-center text-nowrap">Periode</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; foreach ($course as $data): $no++; ?>
                <tr>
                    <td class="text-center"><?= $no;?></td>
                    <td class="text-center"><?= $data->code;?></td>
                    <td class="text-center"><?= $data->lesson;?></td>
                    <td class="text-center"><?= $data->periode;?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>
