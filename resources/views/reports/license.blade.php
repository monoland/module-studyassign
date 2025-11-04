@include('studyassign::reports.css')

<table width="100%" style="border-collapse: collapse;">
  <tr>
    <td width="100" style="text-align: center;">
      <img src="{{ $logo }}" alt="Logo Banten" width="90">
    </td>
    <td style="text-align: center; line-height: 1.3;">
      <div style="font-weight: bold; font-size: 16px;">PEMERINTAH PROVINSI BANTEN</div>
      <div style="font-weight: bold; font-size: 18px;">{{ str($workunit_name)->upper()->toString() }}</div>
      <div style="font-size: 12px; font-weight: normal;">{!! $workunit_address !!}</div>
    </td>
  </tr>
</table>

<!-- Garis ganda di bawah kop surat -->
<hr style="border: 2px solid black; margin: 0;">
<hr style="border: 0.5px solid black; margin-top: 1px; margin-bottom: 10px;">

<table class="letter">
    <tr>
        <td colspan="4" style="text-align: center;">SURAT IZIN BELAJAR</td>
    </tr>    
    <tr>
        <td colspan="4" style="text-align: center;">Nomor: T-800.1.4.1/{{ $number }}/SIB/{{ $acronim }}/{{ $year }}</td>
    </tr>
    
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td style="width: 25mm;">Menimbang</td>
        <td style="width: 4mm;">:</td>
        <td style="width: 5mm;">a.</td>
        <td style="text-align: justify">bahwa dalam rangka meningkatkan Kompetensi Pegawai Negeri Sipil di lingkungan Pemerintah Provinsi Banten dan untuk menunjang kinerja perlu didukung dengan peningkatan jenjang pendidikan Pegawai Negeri Sipil yang bersangkutan;</td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>b.</td>
        <td style="text-align: justify">bahwa berdasarkan pertimbangan sebagaimana dimaksud pada huruf a perlu diterbitkan Surat Izin Belajar.</td>
    </tr>

    <tr>
        <td>Mengingat</td>
        <td>:</td>
        <td colspan="2" style="text-align: justify">Peraturan Gubernur Banten Nomor 32 Tahun 2020 Tentang Pengembangan Kompetensi Aparatur Sipil Negara melalui Pemberian Tugas Belajar, Izin Belajar, dan Magang/Praktek Kerja di Lingkungan Pemerintah Provinsi Banten.</td>
    </tr>

    <tr>
        <td>Memperhatikan</td>
        <td>:</td>
        <td colspan="2" style="text-align: justify">Surat {{ $recommend_letter_position }} Nomor : {{ $recommend_letter_number }} Tanggal {{ $recommend_letter_date }}, dengan ini Kepala Badan Kepegawaian Daerah Provinsi Banten.</td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="4" style="text-align: center;">MENGIZINKAN</td>
    </tr>

    <tr>
        <td colspan="4">Kepada:</td>
    </tr>

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td colspan="2">{{ $name }}</td>
    </tr>

    <tr>
        <td>NIP</td>
        <td>:</td>
        <td colspan="2">{{ $biodata_id }}</td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td colspan="2">{{ $position_name }}</td>
    </tr>

    <tr>
        <td>Pangkat/Gol</td>
        <td>:</td>
        <td colspan="2">{{ $section_name }}</td>
    </tr>

    <tr>
        <td>Unit Kerja</td>
        <td>:</td>
        <td colspan="2">{{ $workunit_name }}</td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="4">
            Untuk melanjutkan pendidikan jenjang {{ $target_edulevel_name }} pada perguruan tinggi {{ $college_name }} dengan ketentuan sebagai berikut:<br/>
            <ol>
                <li>Izin belajar ini diberikan untuk perkuliahan yang dilaksanakan di luar jam kerja;</li>
                <li>Tidak mengganggu tugas-tugas kedinasan dan tidak akan menuntut penyesuaian ijazah;</li>
                <li>Biaya pendidikan ditanggung sepenuhnya oleh yang bersangkutan;</li>
                <li>Menyampaikan laporan perkembangan studi tiap semester yang disahkan Perguruan Tinggi;</li>
                <li>Izin belajar ini dinyatakan tidak berlaku apabila :
                    <ol type="a">
                        <li>Dalam proses belajar mengajar yang ditempuh oleh yang bersangkutan ternyata melanggar ketentuan standar dan norma akademik berdasarkan peraturan perundang-undangan yang berlaku;</li>
                        <li>Dikemudian hari terbukti perolehan ijazah tanda kelulusannya melanggar ketentuan peraturan perundang-undangan yang berlaku.</li>
                    </ol>
                </li>
                <li>Pelanggaran dalam cara memperoleh dan kepemilikan ijazah secara tidak sah akan dikenai sanksi menurut perundang-undangan yang berlaku.</li>
            </ol>
        </td>
    </tr>

    <tr>
        <td colspan="4">Demikian surat izin belajar ini dibuat agar dipergunakan sebagaimana mestinya.</td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;</td>
        <td>
            <table>
                <tr>
                    <td style="width: 100%;">&nbsp;</td>
                    <td style="min-width: 90mm; text-align: center;">
                        Serang, {{ $recommend_letter_date }}<br/>
                        <!-- S3 -->
                        Kepala Badan Kepegawaian Daerah<br/>
                        <!-- S1/S2 -->
                        Kepala Badan Kepegawaian Daerah<br/>
                        <br/>
                        <br/>
                        <br/>
                        {{ $recommend_letter_officer }}<br/>
                        {{ $recommend_letter_section }}<br/>
                        NIP. {{ $recommend_letter_nip }}<br/>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="4" style="font-size: 14px;">
            Tembusan:<br/>
            <ol>
                <li>Gubernur Banten;</li>
                <li>Wakil Gubernur Banten;</li>
                <li>Sekretaris Daerah Provinsi Banten;</li>
                <li>{{ $recommend_permission_position }}</li>
                <li>Rektor {{ $college_name }}</li>
            </ol>
        </td>
    </tr>
</table>