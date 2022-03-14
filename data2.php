<?php

require_once('koneksi.php');

$query = mysqli_query($connection, "SELECT * FROM m_karyawan, m_keluarga, m_jabatan");
$EMP = array();

while ($row = mysqli_fetch_array($query)) {
    array_push(
        $EMP,
array(
    "EMP" => array(
        array(
            "NO_BADGE" => "3022111",
            "NAMA" => "Ronny Sarkasih",
            "SALUTATION" => "Bapak",
            "TEMPAT_LAHIR" => "Bandung",
            "DATE_OF_BIRTH" => "1980-01-08",
            "JK" => "Male",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Rendal Produksi NPK 2",
            "KD_JABATAN" => "50002167",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002167",
                "DESC" => "Superintendent",
                "RANK" => "7"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "1",
                    "NO_BADGE" => "3022111",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Siti Nurul",
                    "GENDER" => "Female"
                ),
                array(
                    "FAMILY_ID" => "2",
                    "NO_BADGE" => "3022111",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Dendi Roni",
                    "GENDER" => "Male"
                ),
                array(
                    "FAMILY_ID" => "3",
                    "NO_BADGE" => "3022111",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Rian",
                    "GENDER" => "Male"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022112",
            "NAMA" => "Aditya Gunawan",
            "SALUTATION" => "Bapak",
            "TEMPAT_LAHIR" => "Karawang",
            "DATE_OF_BIRTH" => "1992-01-10",
            "JK" => "Male",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Produksi K1 A",
            "KD_JABATAN" => "50002161",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002161",
                "DESC" => "General Manager",
                "RANK" => "1"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "4",
                    "NO_BADGE" => "3022112",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Fitri Nur",
                    "GENDER" => "Female"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022113",
            "NAMA" => "Aditya Firman",
            "SALUTATION" => "Bapak",
            "TEMPAT_LAHIR" => "Bekasi",
            "DATE_OF_BIRTH" => "1972-02-20",
            "JK" => "Male",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Teknologi Informasi",
            "KD_JABATAN" => "50002166",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002166",
                "DESC" => "Staf Madya II",
                "RANK" => "6"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "5",
                    "NO_BADGE" => "3022113",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Nurul Suci",
                    "GENDER" => "Female"
                ),
                array(
                    "FAMILY_ID" => "6",
                    "NO_BADGE" => "3022113",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Roni Firmansyah",
                    "GENDER" => "Male"
                ),
                array(
                    "FAMILY_ID" => "7",
                    "NO_BADGE" => "3022113",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Jihan Nurul",
                    "GENDER" => "Female"
                ),
                array(
                    "FAMILY_ID" => "8",
                    "NO_BADGE" => "3022113",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Ferdian",
                    "GENDER" => "Male"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022114",
            "NAMA" => "Dendi Nugraha",
            "SALUTATION" => "Bapak",
            "TEMPAT_LAHIR" => "Purwakarta",
            "DATE_OF_BIRTH" => "1989-03-01",
            "JK" => "Male",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Akuntansi",
            "KD_JABATAN" => "50002163",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002163",
                "DESC" => "Staf Utama II",
                "RANK" => "3"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "9",
                    "NO_BADGE" => "3022114",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Ayu Azhari",
                    "GENDER" => "Female"
                ),
                array(
                    "FAMILY_ID" => "10",
                    "NO_BADGE" => "3022114",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Jihan Azhari",
                    "GENDER" => "Female"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022115",
            "NAMA" => "Reksi Firmansyah",
            "SALUTATION" => "Bapak",
            "TEMPAT_LAHIR" => "Purwokerto",
            "DATE_OF_BIRTH" => "1980-08-17",
            "JK" => "Male",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Keuangan",
            "KD_JABATAN" => "50002164",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002164",
                "DESC" => "Manager",
                "RANK" => "4"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "11",
                    "NO_BADGE" => "3022115",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Nita Harlita",
                    "GENDER" => "Female"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022116",
            "NAMA" => "Dinda Ainun",
            "SALUTATION" => "Ibu",
            "TEMPAT_LAHIR" => "Karawang",
            "DATE_OF_BIRTH" => "1984-09-01",
            "JK" => "Female",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Keuangan",
            "KD_JABATAN" => "50002163",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002163",
                "DESC" => "Staf Utama II",
                "RANK" => "3"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "12",
                    "NO_BADGE" => "3022116",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "M. Rizki Putra",
                    "GENDER" => "Male"
                ),
                array(
                    "FAMILY_ID" => "13",
                    "NO_BADGE" => "3022116",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Asep Nur Rizki",
                    "GENDER" => "Male"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022117",
            "NAMA" => "Putri Nurul ",
            "SALUTATION" => "ibu",
            "TEMPAT_LAHIR" => "Karawang",
            "DATE_OF_BIRTH" => "1993-01-02",
            "JK" => "Female",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Keuangan",
            "KD_JABATAN" => "50002171",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002171",
                "DESC" => "Staf Pratama I",
                "RANK" => "12"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "14",
                    "NO_BADGE" => "3022117",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Maman Abdul",
                    "GENDER" => "Male"
                ),
                array(
                    "FAMILY_ID" => "15",
                    "NO_BADGE" => "3022117",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Rizki Nur Maman",
                    "GENDER" => "Male"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022118",
            "NAMA" => "Ferdiansyah",
            "SALUTATION" => "Bapak",
            "TEMPAT_LAHIR" => "Purwakarta",
            "DATE_OF_BIRTH" => "1992-02-01",
            "JK" => "Male",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Akuntansi",
            "KD_JABATAN" => "50002170",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002170",
                "DESC" => "Supervisor",
                "RANK" => "11"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "16",
                    "NO_BADGE" => "3022118",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Fitria Nur Apipah",
                    "GENDER" => "Female"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022119",
            "NAMA" => "Siti Syarifah",
            "SALUTATION" => "Ibu",
            "TEMPAT_LAHIR" => "Karawang",
            "DATE_OF_BIRTH" => "1990-10-02",
            "JK" => "Female",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian K3",
            "KD_JABATAN" => "50002164",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002164",
                "DESC" => "Manager",
                "RANK" => "4"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "17",
                    "NO_BADGE" => "3022119",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Dendi Surendi",
                    "GENDER" => "Male"
                ),
                array(
                    "FAMILY_ID" => "18",
                    "NO_BADGE" => "3022119",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Priska Surendi",
                    "GENDER" => "Female"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022120",
            "NAMA" => "Saipul Jamil",
            "SALUTATION" => "Bapak",
            "TEMPAT_LAHIR" => "Bekasi",
            "DATE_OF_BIRTH" => "1993-11-01",
            "JK" => "Male",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Teknologi Informasi",
            "KD_JABATAN" => "50002164",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002164",
                "DESC" => "Manager",
                "RANK" => "4"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "19",
                    "NO_BADGE" => "3022120",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Ayu Ting Ting",
                    "GENDER" => "Female"
                ),
                array(
                    "FAMILY_ID" => "20",
                    "NO_BADGE" => "3022120",
                    "RELATIVE_ID" => "2",
                    "RELATIVE" => "Anak",
                    "NAMA" => "Nazar",
                    "GENDER" => "Male"
                )
            )
        ),
        array(
            "NO_BADGE" => "3022121",
            "NAMA" => "Aliando Rizki",
            "SALUTATION" => "Bapak",
            "TEMPAT_LAHIR" => "Karawang",
            "DATE_OF_BIRTH" => "1997-09-07",
            "JK" => "Male",
            "STATUS_KAWIN" => "Nikah",
            "UNIT_KERJA" => "Bagian Teknologi Informasi",
            "KD_JABATAN" => "50002171",
            "STATUS" => "aktif",
            "DETAIL_JABATAN" => array(
                "KD_JABATAN" => "50002171",
                "DESC" => "Staf Pratama I",
                "RANK" => "12"
            ),
            "FAMILY" => array(
                array(
                    "FAMILY_ID" => "21",
                    "NO_BADGE" => "3022121",
                    "RELATIVE_ID" => "1",
                    "RELATIVE" => "Pasangan",
                    "NAMA" => "Prily Nur Apriani",
                    "GENDER" => "Female"
                )
            )
                )

echo json_encode(
    array('EMP' => $EMP)
);