<table>
    <tr>
        <td colspan="3">REKOMENDASI MELANJUTKAN PENDIDIKAN</td>
    </tr>    
    <tr>
        <td colspan="3">Nomor : {{ $recommend_letter_number }}</td>
    </tr>
    
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
        <td>a.</td>
        <td>Dasar</td>
        <td>:</td>
        <td>Peraturan Gubernur Banten Nomor 32 Tahun 2020 Tentang Pengembangan Kompetensi Aparatur Sipil Negara melalui Pemberian Tugas Belajar, Izin Belajar, dan Magang/Praktek Kerja di Lingkungan Pemerintah Provinsi Banten.</td>
    </tr>

    <tr>
        <td>b.</td>
        <td>Menimbang</td>
        <td>:</td>
        <td>Surat {{ $recommend_letter_position }} tentang Izin Melanjutkan Pendidikan a.n. {{ $name }} Nomor : {{ $recommend_permission_number }} tanggal : {{ $recommend_permission_date }}</td>
    </tr>

    <tr>
        <td colspan="3">Kepala Badan Kepegawaian Daerah memberikan rekomendasi kepada :</td>
    </tr>

    <tr>
        <td>a.</td>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $name }}</td>
    </tr>

    <tr>
        <td>b.</td>
        <td>NIP</td>
        <td>:</td>
        <td>{{ $biodata_id }}</td>
    </tr>

    <tr>
        <td>c.</td>
        <td>Jabatan</td>
        <td>:</td>
        <td>{{ $position_name }}</td>
    </tr>

    <tr>
        <td>d.</td>
        <td>Pangkat/Gol</td>
        <td>:</td>
        <td>{{ $section_name }}</td>
    </tr>

    <tr>
        <td>e.</td>
        <td>Unit Kerja</td>
        <td>:</td>
        <td>{{ $section_name }}</td>
    </tr>

    <tr>
        <td>f.</td>
        <td>Pendidikan Terakhir</td>
        <td>:</td>
        <td>{{ $section_name }}</td>
    </tr>

    <tr>
        <td colspan="3">
            Untuk melanjutkan pendidikan jenjang {{ $target_edulevel_name }} pada perguruan tinggi {{ $college_name }} program studi {{ $study_program }} dengan tidak menganggu tugas kedinasan.<br/>
            Demikian rekomendasi ini dibuat untuk dipergunakan seperlunya.
        </td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            Serang, {{ $recommend_letter_date }}<br/>
            <!-- S3 -->
            Kepala Badan Kepegawaian Daerah<br/>
            <!-- S1/S2 -->
            a.n. Kepala Badan Kepegawaian Daerah<br/>
            Kepala Bidang Pengembangan ASN<br/>
            <br/>
            <br/>
            <br/>
            {{ $recommend_letter_officer }}<br/>
            {{ $recommend_letter_section }}<br/>
            NIP. {{ $recommend_letter_nip }}<br/>
        </td>
    </tr>
</table>