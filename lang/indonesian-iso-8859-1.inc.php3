<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
$month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y jam %H:%M';

$strAPrimaryKey = 'Primary key telah ditambah pada %s';
$strAccessDenied = 'Akses ditolak';
$strAction = 'Aksi';
$strAddDeleteColumn = 'Tambah/Hapus kolom';
$strAddDeleteRow = 'Tambah/Hapus baris';
$strAddNewField = 'Tambah field baru';
$strAddPriv = 'Tambah hak (privilege) baru';
$strAddPrivMessage = 'Hak (privilege) baru telah ditambah.';
$strAddSearchConditions = 'Tambah kriteria pencarian (Argumen untuk WHERE-Statement):';
$strAddToIndex = 'Tambah ke indeks &nbsp;%s&nbsp;kolom';
$strAddUser = 'Tambah pengguna baru';
$strAddUserMessage = 'Pengguna baru telah ditambah.';
$strAffectedRows = 'Baris yang terlibat:';
$strAfter = 'Sisipkan setelah %s';
$strAfterInsertBack = 'Kembali';
$strAfterInsertNewInsert = 'Sisipkan baris yang baru';
$strAll = 'Semua';
$strAllTableSameWidth = 'Tampilkan semua tabel dengan kelebaran yang sama?';
$strAlterOrderBy = 'Urutkan tabel berdasarkan';
$strAnIndex = 'Indeks telah ditambah pada %s';
$strAnalyzeTable = 'Analisa tabel';
$strAnd = 'dan';
$strAny = 'Setiap';
$strAnyColumn = 'Setiap kolom';
$strAnyDatabase = 'Setiap database';
$strAnyHost = 'Setiap host';
$strAnyTable = 'Setiap tabel';
$strAnyUser = 'Setiap penguna';
$strAscending = 'Urutan menaik';
$strAtBeginningOfTable = 'pada awal tabel';
$strAtEndOfTable = 'pada akhir tabel';
$strAttr = 'Atribut';

$strBack = 'Kembali';
$strBeginCut = 'Mulai potong (CUT)';
$strBeginRaw = 'MULAI mentah (RAW)';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - jangan di-edit';
$strBookmarkDeleted = 'Bookmark telah dihapus.';
$strBookmarkLabel = 'Judul';
$strBookmarkQuery = 'Bookmark query SQL ';
$strBookmarkThis = 'Bookmark SQL-query ini';
$strBookmarkView = 'Hanya melihat';
$strBrowse = 'Browse';
$strBzip = '"Dikompress dengan BZip"';

$strCantLoadMySQL = 'Gagal loading extensi MySQL,<br />mohon periksa kembali konfigurasi PHP.';
$strCantLoadRecodeIconv = 'Gagal loading iconv atau perubahan kode extension untuk konversi charset diperlukan. Silakan konfigurasikan php untuk mengunakan extensions yang diperlukan atau matikan fasilitas charset conversion di phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Gagal ubah nama Indeks ke PRIMARY!';
$strCantUseRecodeIconv = 'Gagal mengunakan iconv, libiconv atau fungsi recode_string apabila extension masih dalam keadaan di-load. Periksa kembali konfigurasi php.';
$strCardinality = 'Huruf besar atau kecil';
$strCarriage = 'Di baris baru: \\r';
$strChange = 'Ubah';
$strChangeDisplay = 'Pilih Field untuk ditampilkan';
$strChangePassword = 'Ubah Kata Sandi';
$strCharsetOfFile = 'Kumpulan karakter (Character set) dari file:';
$strCheckAll = 'Tanda semua';
$strCheckDbPriv = 'Periksa Hak Akses dari Database';
$strCheckTable = 'Periksa tabel';
$strChoosePage = 'Silakan pilih halaman untuk diubah';
$strColComFeat = 'Tampilkan komentar kolom';
$strColumn = 'Kolom';
$strColumnNames = 'Nama kolom';
$strComments = 'Komentar';
$strCompleteInserts = 'Penyisipan lengkap';
$strConfigFileError = 'phpMyAdmin gagal membaca file konfigurasi!<br />Hal ini diakibatkan oleh parse error atau file tidak ditemukan.<br />Silakan buka file konfigurasi secara langsung dengan gunakan link dibawah. Mohon perhatikan php error message(s) yang akan tertampil. Serinkali sebuah quote atau semicolon tertinggal.<br />Jika sebuah halaman kosong yang muncul berarti tidak ada masalah.';
$strConfigureTableCoord = 'Silakan konfigurasikan koordinasi bagi tabel %s';
$strConfirm = 'Anda yakin ingin melakukannya?';
$strCookiesRequired = 'Cookies harus diaktifkan mulai dari sini.';
$strCopyTable = 'Salin tabel ke (database<b>.</b>nama tabel):';
$strCopyTableOK = 'Tabel %s telah disalin ke %s.';
$strCreate = 'Buat';
$strCreateIndex = 'Buat indeks pada kolom &nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Buat indeks baru';
$strCreateNewDatabase = 'Buat database baru';
$strCreateNewTable = 'Buat tabel baru pada database %s';
$strCreatePage = 'Buat halaman baru';
$strCreatePdfFeat = 'Pembuatan PDF';
$strCriteria = 'Kriteria';

$strData = 'Data';
$strDataOnly = 'Data saja';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Database %s telah dihapus.';
$strDatabaseWildcard = 'Database (wildcards diizinkan):';
$strDatabases = 'database';
$strDatabasesStats = 'Statistik Database';
$strDefault = 'Default';
$strDelete = 'Hapus';
$strDeleteFailed = 'Penghapusan gagal!';
$strDeleteUserMessage = 'Penguna %s telah dihapus.';
$strDeleted = 'Baris telah dihapus';
$strDeletedRows = 'Baris yang dihapus:';
$strDescending = 'Menurun';
$strDisabled = 'Tidak aktif';
$strDisplay = 'Tampilkan';
$strDisplayFeat = 'Tampilkan ciri-ciri';
$strDisplayOrder = 'Urutan tampilan berdasarkan:';
$strDisplayPDF = 'Tampilkan skema PDF';
$strDoAQuery = 'Cari berdasarkan data contoh ("query by example") (wildcard: "%")';
$strDoYouReally = 'Apakah anda ingin ';
$strDocu = 'Dokumentasi';
$strDrop = 'Hapus Field ini';
$strDropDB = 'Hapus database %s';
$strDropTable = 'Hapus tabel:';
$strDumpXRows = 'Dump %s baris bermula pada baris %s.';
$strDumpingData = 'Dumping data untuk tabel';
$strDynamic = 'dinamis';

$strEdit = 'Ubah';
$strEditPDFPages = 'Ubah halaman PDF';
$strEditPrivileges = 'Ubah hak akses (privilege)';
$strEffective = 'Efektif';
$strEmpty = 'Hapus semua Record';
$strEmptyResultSet = 'MySQL balikkan hasil kosong (a.k. baris yang kosong).';
$strEnabled = 'Aktif';
$strEnd = 'Terakhir';
$strEndCut = 'Akhiri potong (CUT)';
$strEndRaw = 'AKHIRI mentah (RAW)';
$strEnglishPrivileges = ' Catatan: Nama privilege MySQL adalah dalam bahasa Ingris ';
$strError = 'Error';
$strExplain = 'Terangkan SQL';
$strExport = 'Ekspor';
$strExportToXML = 'Ekspor ke format XML';
$strExtendedInserts = 'Penyisipan diperluas';
$strExtra = 'Ekstra';

$strField = 'Field';
$strFieldHasBeenDropped = 'Field %s telah dihapus';
$strFields = 'Field';
$strFieldsEmpty = ' Jumlah field dalam tabel harus ditentukan! ';
$strFieldsEnclosedBy = 'Field ditutup dengan';
$strFieldsEscapedBy = 'Field dikembalikan oleh';
$strFieldsTerminatedBy = 'Fields diputus oleh';
$strFixed = 'telah diperbaiki';
$strFlushTable = 'Tutup tabel ("FLUSH")';
$strFormEmpty = 'Kurang data dalam form !';
$strFormat = 'Format';
$strFullText = 'Teks Penuh';
$strFunction = 'Fungsi';

$strGenBy = 'Diadakan oleh';
$strGenTime = 'Waktu pembuatan';
$strGeneralRelationFeat = 'Ciri-ciri dari General Relation';
$strGo = 'Go';
$strGrants = 'Hak (Grants)';
$strGzip = '"Dikompress dengan GZip"';

$strHasBeenAltered = 'telah diubah.';
$strHasBeenCreated = 'telah diciptakan.';
$strHaveToShow = 'Sekurang-kurangnya satu kolom harus dipilih untuk ditampilkan';
$strHome = 'Home';
$strHomepageOfficial = 'Homepage resmi phpMyAdmin';
$strHomepageSourceforge = 'Halaman download phpMyAdmin di Sourceforge';
$strHost = 'Host';
$strHostEmpty = 'Nama Host harus diisi!';

$strIdxFulltext = 'Teks penuh';
$strIfYouWish = 'Jika Anda hanya ingin memuat beberapa kolom dari tabel, gunakan tanda koma sebagai pemisah.';
$strIgnore = 'Abaikan';
$strImportDocSQL = 'Impor file docSQL';
$strInUse = 'sedang digunakan';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s telah dihapus';
$strIndexName = 'Nama indeks&nbsp;:';
$strIndexType = 'Tipe indeks&nbsp;:';
$strIndexes = 'Indeks';
$strInsecureMySQL = 'File konfigurasi Anda diset dengan pengguna Root dan tanpa adanya Kata Sandi sama dengan Default MySQL Privileged Account. Jika MySQL-Server Anda dijalankan dengan sedemikian, server Anda terbuka untuk penyerangan. Disarankan untuk memperbaiki kelemahan keamanan (security hole) ini.';
$strInsert = 'Sisipkan';
$strInsertAsNewRow = 'Sisipkan sebagai baris baru';
$strInsertNewRow = 'Sisipkan baris baru';
$strInsertTextfiles = 'Sisipkan data baru dari textfile ke dalam tabel';
$strInsertedRows = 'Baris yang disisipkan:';
$strInstructions = 'Petunjuk';
$strInvalidName = '"%s" adalah kata khusus dan tidak dapat dipergunakan sebagai nama database,tabel atau field.';

$strKeepPass = 'Kata Sandi jangan dirubah';
$strKeyname = 'Keyname';
$strKill = 'Tutup';

$strLength = 'Ukuran Panjang';
$strLengthSet = 'Ukuran Panjang/Nilai*';
$strLimitNumRows = 'Jumlah baris per halaman';
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Garis';
$strLinesTerminatedBy = 'Garis diputuskan oleh';
$strLinkNotFound = 'Link tidak ditemukan';
$strLinksTo = 'Link ke';
$strLocationTextfile = 'Lokasi dari textfile';
$strLogPassword = 'Kata Sandi:';
$strLogUsername = 'Nama Pengguna:';
$strLogin = 'Login';
$strLogout = 'Logout';

$strMissingBracket = 'Kekurangan tanda kurung';
$strModifications = 'Modifikasi telah disimpan';
$strModify = 'Ubah';
$strModifyIndexTopic = 'Ubah indeks';
$strMoveTable = 'Pindahkan tabel ke (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s telah dipindahkan ke %s.';
$strMySQLCharset = 'Charset MySQL';
$strMySQLReloaded = 'MySQL telah di-reload.';
$strMySQLSaid = 'MySQL menyatakan: ';
$strMySQLServerProcess = 'MySQL %pma_s1% di %pma_s2% sebagai %pma_s3%';
$strMySQLShowProcess = 'Tampilkan Proses';
$strMySQLShowStatus = 'Tampilkan informasi runtime dari MySQL';
$strMySQLShowVars = 'Tampilkan variabel sistem dari MySQL';

$strName = 'Nama';
$strNbRecords = 'Jumlah baris';
$strNext = 'Berikutnya';
$strNo = 'Tidak';
$strNoDatabases = 'Database tidak ditemukan';
$strNoDescription = 'tanpa keterangan';
$strNoDropDatabases = 'Perintah "DROP DATABASE" dimatikan.';
$strNoExplain = 'Melewati keterangan SQL';
$strNoFrames = 'Lebih mudah jika menggunakan phpMyAdmin dengan browser yang <b>mendukung frame</b>.';
$strNoIndex = 'Indeks tidak ditentukan!';
$strNoIndexPartsDefined = 'Tidak ada bagian indeks yang didefinisikan!';
$strNoModification = 'Tidak ada perubahan';
$strNoPassword = 'Tidak ada Kata Sandi';
$strNoPhp = 'tidak ada kode PHP';
$strNoPrivileges = 'Tidak ada Hak Akses (privilege)';
$strNoQuery = 'Tidak ada query SQL!';
$strNoRights = 'Hak Akses Anda untuk melanjut tidak cukup!';
$strNoTablesFound = 'Tidak ada tabel dalam database.';
$strNoUsersFound = 'Pengguna tidak ditemukan.';
$strNoValidateSQL = 'Melewati pengesahan (validation) SQL';
$strNone = 'tanpa';
$strNotNumber = 'Ini adalah bukan angka!';
$strNotOK = 'tidak oke';
$strNotSet = '<b>%s</b> tabel tidak ditemukan atau tidak diset di %s';
$strNotValidNumber = ' bukan nomor baris yang berlaku!';
$strNull = 'Kosong';
$strNumSearchResultsInTable = '%s Rekord dalam tabel <i>%s</i>';
$strNumSearchResultsTotal = '<b>Jumlah:</b> <i>%s</i> rekord';

$strOK = 'Oke';
$strOftenQuotation = 'Terlalu banyak tanda kutip. PILIHAN berarti hanya field dengan tipe char dan varchar yang ditutup oleh karakter "ditutup oleh" tersebut.';
$strOperations = 'Operasi';
$strOptimizeTable = 'Optimasikan tabel';
$strOptionalControls = 'Pilihan. Mengontrol cara menulis dan membaca karakter khusus.';
$strOptionally = 'PILIHAN';
$strOptions = 'Setingan';
$strOr = 'Atau';
$strOverhead = 'Kelebihan (Overhead)';

$strPHPVersion = 'Versi PHP';
$strPageNumber = 'Halaman no.:';
$strPartialText = 'Teks yang disingkat';
$strPassword = 'Kata Sandi';
$strPasswordEmpty = 'Kata Sandi kosong!';
$strPasswordNotSame = 'Kata Sandi tidak sama!';
$strPdfDbSchema = 'Skema dari database "%s"  - Halaman %s';
$strPdfInvalidPageNum = 'Nomor halaman PDF tidak ditentukan!';
$strPdfInvalidTblName = 'Tabel "%s" tidak ditemukan!';
$strPdfNoTables = 'Tabel tidak ditemukan';
$strPhp = 'Ciptakan kode PHP';
$strPmaDocumentation = 'Dokumentasi phpMyAdmin';
$strPmaUriError = 'Directif <tt>$cfg[\'PmaAbsoluteUri\']</tt> WAJIB diset dalam file konfigurasi!';
$strPos1 = 'Awal';
$strPrevious = 'Sebelumnya';
$strPrimary = 'PRIMARY';
$strPrimaryKey = 'Primary key';
$strPrimaryKeyHasBeenDropped = 'Primary key telah dihapus';
$strPrimaryKeyName = 'Nama primary key mesti... PRIMARY!';
$strPrimaryKeyWarning = '(Tanda nama "PRIMARY" <b>wajib</b> sebagai satu-satunya nama dan <b>hanya</b> sebagai Primary Key saja!)';
$strPrintView = 'Pandangan cetak';
$strPrivileges = 'Hak Akses (Privilege)';
$strProperties = 'Properties';
$strPutColNames = 'Letakkan nama Fields pada baris pertama';

$strQBE = 'Cari berdasarkan data contoh';
$strQBEDel = 'Hapus';
$strQBEIns = 'Sisipkan';
$strQueryOnDb = 'Query SQL dalam database <b>%s</b>:';

$strReType = 'Ketik ulang';
$strRecords = 'Rekord';
$strReferentialIntegrity = 'Cek integriti referensial:';
$strRelationNotWorking = 'Fasilitas tambahan untuk bekerja dengan tabel yang di-link di nonaktifkan. Untuk mengetahui soal klik %sdisini%s.';
$strRelationView = 'Tampilan relasi';
$strReloadFailed = 'MySQL gagal di-reload.';
$strReloadMySQL = 'Reload MySQL';
$strRememberReload = 'Ingatlah me-reload server.';
$strRenameTable = 'Ubah nama tabel menjadi ';
$strRenameTableOK = 'Nama tabel %s telah diubah menjadi %s';
$strRepairTable = 'Perbaiki tabel';
$strReplace = 'Ganti';
$strReplaceTable = 'Ganti data tabel dengan file';
$strReset = 'Reset';
$strRevoke = 'Cabut';
$strRevokeGrant = 'Cabut hak akses berstatus Grant';
$strRevokeGrantMessage = 'Hak akses berstatus Grant untuk %s telah dicabut';
$strRevokeMessage = 'Hak akses untuk %s telah dicabut';
$strRevokePriv = 'Cabut hak akses (privilege)';
$strRowLength = 'Ukuran panjang baris';
$strRowSize = ' Ukuran baris ';
$strRows = 'Baris';
$strRowsFrom = 'baris dimulai dari rekord #';
$strRowsModeHorizontal = 'horisontal';
$strRowsModeOptions = 'diatur dengan urutan %s dan ulang header setelah %s sel.';
$strRowsModeVertical = 'vertikal';
$strRowsStatistic = 'Statistik Baris';
$strRunQuery = 'Jalankan query SQL';
$strRunSQLQuery = 'Jalankan query SQL pada database %s';
$strRunning = 'dilaksana pada %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Kemungkinan Anda telah temukan sebuah Bug dalam parser SQL. Mohon periksa ulang Query SQL dengan teliti dan perhatikan apakah semua tanda kutip benar dan seimbang. Penyebab kegagalan bisa terjadi bila Anda meng-upload sebuah file binari diluar teks kutipan. Silakan Anda menjalankan Query tersebut dengan mengunakan command line interface. Hasil dari MySQL server error, jika tertampil, akan menolong Anda untuk mengetahui penyebab dari problem. Bila problem tersebut tetap muncul atau Parser dari kami masih juga gagal tetapi command line interface berhasil mohon kurangi input pada SQL query sampai Query yang bermasalah ditemukan. Mohon kirimkan sebuah Bug Report dengan sisipan data dalam bagian Potong (CUT) yang dibawah ini kepada kami:';
$strSQLParserUserError = 'Rupanya ada Error pada Query SQL. Hasil dari MySQL server error dibawa ini, jika tertampil, akan menolong Anda untuk mengetahui penyebab dari problem tersebut.';
$strSQLQuery = 'Query SQL';
$strSQLResult = 'Hasil SQL';
$strSQPBugInvalidIdentifer = 'Identifer tidak valid';
$strSQPBugUnclosedQuote = 'Kutipan tidak ditutup';
$strSQPBugUnknownPunctation = 'Punctation String tidak dikenali';
$strSave = 'Simpan';
$strScaleFactorSmall = 'Faktor skala yang dipilih terlalu kecil untuk dimuat dalam skema satu halaman';
$strSearch = 'Cari';
$strSearchFormTitle = 'Cari dalam database';
$strSearchInTables = 'Cari dalam tabel:';
$strSearchNeedle = 'Kata atau nilai untuk dicari (wildcard: "%"):';
$strSearchOption1 = 'sekurang-kurangnya salah satu kata';
$strSearchOption2 = 'seluruh kata';
$strSearchOption3 = 'kata-kata tepat';
$strSearchOption4 = 'sebagai regular expression';
$strSearchResultsFor = 'Hasil pencarian untuk "<i>%s</i>" %s:';
$strSearchType = 'Cari:';
$strSelect = 'Pilih';
$strSelectADb = 'Silakan pilih database';
$strSelectAll = 'Pilih semua';
$strSelectFields = 'Pilih fields (minimal satu):';
$strSelectNumRows = 'dalam susunan pemeriksaan';
$strSelectTables = 'Pilih tabel';
$strSend = 'Kirim ke';
$strServer = 'Server %s';
$strServerChoice = 'Pilihan Server';
$strServerVersion = 'Versi Server';
$strSetEnumVal = 'Jika tipe field sama dengan "enum" atau "set", silakan masukkan nilai dengan format: \'a\',\'b\',\'c\'...<br />Jika sebuah backslash ("\") atau satu tanda kutip ("\'") diperlukan, tanda tersebut perlu ditutupi dengan tanda backslash (seb. contoh \'\\\\xyz\' atau \'a\\\'b\').';
$strShow = 'Tampilkan';
$strShowAll = 'Tampilkan semua';
$strShowColor = 'Tampilkan warna';
$strShowCols = 'Tampilkan kolom';
$strShowGrid = 'Tampilkan garis';
$strShowPHPInfo = 'Tampilkan informasi tentang PHP';
$strShowTableDimension = 'Tampilkan ukuran dari tabel';
$strShowTables = 'Tampilkan tabel';
$strShowThisQuery = ' Tampilkan ulang query SQL ';
$strShowingRecords = 'Tampilan baris';
$strSingly = '(unik)';
$strSize = 'Ukuran';
$strSort = 'Urutkan';
$strSpaceUsage = 'Penggunaan ruang';
$strSplitWordsWithSpace = 'Kata dipisahkan oleh karakter spasi (" ").';
$strStartingRecord = 'Baris mulai';
$strStatement = 'Pernyataan';
$strStrucCSV = 'Data CSV';
$strStrucData = 'Struktur dan data';
$strStrucDrop = 'Tambah \'Hapus tabel\'';
$strStrucExcelCSV = 'CSV untuk data MS Excel';
$strStrucOnly = 'Struktur saja';
$strStructPropose = 'Ajukan struktur tabel';
$strStructure = 'Struktur';
$strSubmit = 'Kirim';
$strSuccess = 'Perintah SQL telah dilaksanakan dengan sukses';
$strSum = 'Jumlah';

$strTable = 'Tabel ';
$strTableComments = 'Komentar tabel';
$strTableEmpty = 'Nama tabel kosong!';
$strTableHasBeenDropped = 'Tabel %s telah dihapus';
$strTableHasBeenEmptied = 'Tabel %s telah dikosongkan';
$strTableHasBeenFlushed = 'Tabel %s telah dibuangkan';
$strTableMaintenance = 'Pemeliharaan tabel';
$strTableStructure = 'Struktur dari tabel';
$strTableType = 'Jenis tabel';
$strTables = 'tabel %s';
$strTextAreaLength = ' Dikarenakan panjangnya,<br /> field ini tidak dapat di-edit ulang. ';
$strTheContent = 'Isi file telah disisipkan.';
$strTheContents = 'Isi file telah digantikan dengan isi tabel yang dipilih dengan primary atau unique key.';
$strTheTerminator = 'Pemisah field.';
$strTotal = 'jumlah';
$strType = 'Jenis';

$strUncheckAll = 'Uncheck semua';
$strUnique = 'Unik';
$strUnselectAll = 'Unselect semua';
$strUpdatePrivMessage = 'Hak Akses (privilege) untuk %s telah di-update.';
$strUpdateProfile = 'Update profil pengguna:';
$strUpdateProfileMessage = 'Profil pengguna telah di-update.';
$strUpdateQuery = 'Update proses pencarian';
$strUsage = 'Penggunaan';
$strUseBackquotes = 'Gunakan backquotes dengan nama tabel dan nama field';
$strUseTables = 'Gunakan tabel';
$strUser = 'Pengguna';
$strUserEmpty = 'Kata pengguna masih kosong!';
$strUserName = 'Nama pengguna';
$strUsers = 'Pengguna-Pengguna';

$strValidateSQL = 'Mengesahkan (validate) SQL';
$strValidatorError = 'Pengesahan SQL tidak dapat disahkan. Mohon periksa kembali ekstension PHP yang diperlukan seperti tercatat dalam %sdocumentation%s.';
$strValue = 'Nilai';
$strViewDump = 'Tampilkan Dump (Skema) dari tabel';
$strViewDumpDB = 'Tampilkan Dump (Skema) dari database';

$strWebServerUploadDirectory = 'direktori upload dari web-server';
$strWebServerUploadDirectoryError = 'Direktori yang telah ditetapkan untuk meng-upload tidak bisa dihubungi';
$strWelcome = 'Selamat Datang di %s';
$strWithChecked = 'Dengan pilihan:';
$strWrongUser = 'Nama Pengguna/Kata Sandi salah. Akses ditolak.';

$strYes = 'Ya';

$strZip = '"Dikompress dengan Zip"';
// To translate

$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
?>
