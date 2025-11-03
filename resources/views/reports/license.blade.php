<table>
    <tr>
        <td colspan="3">SURAT IZIN</td>
    </tr>    
    <tr>
        <td colspan="3">Nomor: {{ $recommend_permission_number }}</td>
    </tr>
    <tr>
        <td colspan="3">TENTANG</td>
    </tr>
    <tr>
        <td colspan="3">IZIN MELANJUTKAN PENDIDIKAN</td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
        <td>Dasar</td>
        <td>:</td>
        <td>Peraturan Gubernur Banten Nomor 32 Tahun 2020 Tentang Pengembangan Kompetensi Aparatur Sipil Negara melalui Pemberian Tugas Belajar, Izin Belajar, dan Magang/Praktek Kerja di Lingkungan Pemerintah Provinsi Banten.</td>
    </tr>

    <tr>
        <td colspan="3">MEMBERI IZIN</td>
    </tr>

    <tr>
        <td colspan="3">Kepada</td>
    </tr>

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $name }}</td>
    </tr>

    <tr>
        <td>NIP</td>
        <td>:</td>
        <td>{{ $biodata_id }}</td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>{{ $position_name }}</td>
    </tr>

    <tr>
        <td>Pangkat/Gol</td>
        <td>:</td>
        <td>{{ $section_name }}</td>
    </tr>

    <tr>
        <td>Untuk</td>
        <td>:</td>
        <td>Melanjutkan pendidikan jenjang {{ $target_edulevel_name }} pada perguruan tinggi {{ $college_name }} program studi {{ $study_program }} dengan mempertimbangkan      bidang keilmuan yang ditempuh linear dengan kebutuhan Perangkat Daerah sesuai tupoksi, dan dalam pelaksanaan pendidikan tidak mengganggu pekerjaan/tugas dinas sehari-hari.</td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            Ditetapkan di Serang<br/>
            Pada Tanggal {{ $recommend_permission_date }}<br/>
            {{ $recommend_permission_position }}<br/>
            <br/>
            <br/>
            <br/>
            {{ $recommend_permission_officer }}<br/>
            {{ $recommend_permission_section }}<br/>
            NIP. {{ $recommend_permission_nip }}<br/>
        </td>
    </tr>
</table>