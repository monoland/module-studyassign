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
        <td colspan="4" style="text-align: center;">REKOMENDASI MELANJUTKAN PENDIDIKAN</td>
    </tr>    
    <tr>
        <td colspan="4" style="text-align: center;">Nomor: T-800.1.4.1/{{ $number }}/SRMP/{{ $acronim }}/{{ $year }}</td>
    </tr>
    
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td style="width: 4mm">a.</td>
        <td style="width: 40mm">Dasar</td>
        <td style="width: 4mm">:</td>
        <td style="text-align: justify">Peraturan Gubernur Banten Nomor 32 Tahun 2020 Tentang Pengembangan Kompetensi Aparatur Sipil Negara melalui Pemberian Tugas Belajar, Izin Belajar, dan Magang/Praktek Kerja di Lingkungan Pemerintah Provinsi Banten.</td>
    </tr>

    <tr>
        <td>b.</td>
        <td>Menimbang</td>
        <td>:</td>
        <td style="text-align: justify">Surat {{ $recommend_letter_position }} tentang Izin Melanjutkan Pendidikan a.n. {{ $name }} Nomor : {{ $recommend_permission_number }} tanggal : {{ $recommend_permission_date }}</td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="4">Kepala Badan Kepegawaian Daerah memberikan rekomendasi kepada :</td>
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
        <td>{{ $workunit_name }}</td>
    </tr>

    <tr>
        <td>f.</td>
        <td>Pendidikan Terakhir</td>
        <td>:</td>
        <td>{{ $edulevel_name }}</td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="4"  style="text-align: justify">
            Untuk melanjutkan pendidikan jenjang {{ $target_edulevel_name }} pada perguruan tinggi {{ $college_name }} program studi {{ $study_program }} dengan tidak menganggu tugas kedinasan.<br/>
            Demikian rekomendasi ini dibuat untuk dipergunakan seperlunya.
        </td>
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
        </td>
    </tr>
</table>