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

<table class="letter" style="font-size: 12px;">
    <tr>
        <td colspan="3" style="font-size: 16px; text-align: center;">SURAT IZIN</td>
    </tr>    

    <tr>
        <td colspan="3" style="text-align: center;">Nomor: T-800.1.4.1/{{ $number }}/SIMP/{{ $acronim }}/{{ $year }}</td>
    </tr>

    <tr>
        <td colspan="3" style="font-size: 14px; text-align: center;">TENTANG</td>
    </tr>
    
    <tr>
        <td colspan="3" style="font-size: 14px; text-align: center;">IZIN MELANJUTKAN PENDIDIKAN</td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
        <td style="width: 30mm">Dasar</td>
        <td style="width: 3mm">:</td>
        <td style="text-align: justify;">Peraturan Gubernur Banten Nomor 32 Tahun 2020 Tentang Pengembangan Kompetensi Aparatur Sipil Negara melalui Pemberian Tugas Belajar, Izin Belajar, dan Magang/Praktek Kerja di Lingkungan Pemerintah Provinsi Banten.</td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    
    <tr>
        <td colspan="3" style="font-size: 14px; text-align: center;">MEMBERI IZIN</td>
    </tr>

    <tr>
        <td colspan="3">Kepada</td>
    </tr>

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td style="text-align: justify;">{{ $name }}</td>
    </tr>

    <tr>
        <td>NIP</td>
        <td>:</td>
        <td style="text-align: justify;">{{ $biodata_id }}</td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td style="text-align: justify;">{{ $position_name }}</td>
    </tr>

    <tr>
        <td>Pangkat/Gol</td>
        <td>:</td>
        <td style="text-align: justify;">{{ $section_name }}</td>
    </tr>

    <tr>
        <td>Untuk</td>
        <td>:</td>
        <td style="text-align: justify;">Melanjutkan pendidikan jenjang {{ $target_edulevel_name }} pada perguruan tinggi {{ $college_name }} program studi {{ $study_program }} dengan mempertimbangkan      bidang keilmuan yang ditempuh linear dengan kebutuhan Perangkat Daerah sesuai tupoksi, dan dalam pelaksanaan pendidikan tidak mengganggu pekerjaan/tugas dinas sehari-hari.</td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="2">&nbsp;</td>
        <td>
            <table>
                <tr>
                    <td style="width: 100%;">&nbsp;</td>
                    <td style="min-width: 80mm; text-align: center;">
                        Ditetapkan di Serang<br/>
                        Pada Tanggal {{ $recommend_permission_date }}<br/>
                        {{ $recommend_permission_position }}<br/>
                        <br/>
                        <br/>
                        <span>X</span>
                        <br/>
                        <br/>
                        <br/>
                        {{ $recommend_permission_officer }}<br/>
                        {{ $recommend_permission_section }}<br/>
                        NIP. {{ $recommend_permission_nip }}<br/>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>