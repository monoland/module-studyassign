# Module Study Assign

```mermaid
flowchart TD
    P1([Pegawai]) --> A1([Atasan])
    A1 --> AD1([Admin])
    AD1 --> KB1([Kabid])
    KB1 --> KBN1([Kaban])
    KBN1 --> P2([Pegawai (Terima Hasil)])

    %% Detail alur singkat
    subgraph Pegawai
        P1 -->|"Input/Edit & Kirim Pengajuan"| A1
    end

    subgraph Atasan
        A1 -->|"Review & E-Sign Ijin"| AD1
    end

    subgraph Admin
        AD1 -->|"Cek Berkas & Kirim Rekomendasi"| KB1
    end

    subgraph Kabid
        KB1 -->|"E-Sign Rekomendasi"| KBN1
    end

    subgraph Kaban
        KBN1 -->|"Final E-Sign & Kirim Dokumen"| P2
    end

    P2 -->([Selesai])
```
