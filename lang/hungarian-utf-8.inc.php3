<?php
/* $Id$ */

// Peter Bakondy <bakondyp@freemail.hu>

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bájt', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('V', 'H', 'K', 'Sze', 'Cs', 'P', 'Szo');
$month = array('Jan', 'Feb', 'Márc', 'Ápr', 'Máj', 'Jún', 'Júl', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');
// Leírás a $datefmt változó definiálásához:
// http://www.php.net/manual/en/function.strftime.php
$datefmt = '%Y. %B %d. %H:%M';

$strAccessDenied = 'Hozzáférés megtagadva';
$strAction = 'Parancs';
$strAddDeleteColumn = 'Mez&#0337 Oszlopokat Hozzáad/Töröl';
$strAddDeleteRow = 'Kritérium Sort Hozzáad/Töröl';
$strAddNewField = 'Új mez&#0337 hozzáadása';
$strAddPriv = 'Új privilégiumot ad';
$strAddPrivMessage = 'Az új privilégiumot hozzáadtam.';
$strAddSearchConditions = 'Keresési feltételek megadása (az "ahol" kikötések):';
$strAddToIndex = 'Adj az indexhez &nbsp;%s&nbsp;oszlopot';
$strAddUser = 'Új felhasználó hozzáadása';
$strAddUserMessage = 'Az új felhasználót felvettem.';
$strAffectedRows = 'Keresett sorok:';
$strAfter = '%s után';
$strAfterInsertBack = 'Vissza az el&#0337z&#0337 oldalra';
$strAfterInsertNewInsert = 'Új sor beszúrása';
$strAll = 'Mind';
$strAllTableSameWidth = 'minden tábla ezzel a szélességgel jelenjen meg?';
$strAlterOrderBy = 'Tábla megváltozása rendezve e szerint:';
$strAnalyzeTable = 'Tábla vizsgálat';
$strAnd = 'És';
$strAnIndex = 'Indexet hozzáadtam: %s';
$strAny = 'Bármely';
$strAnyColumn = 'Bármely oszlop';
$strAnyDatabase = 'Bármely adatbázis';
$strAnyHost = 'Bármely hoszt';
$strAnyTable = 'Bármely tábla';
$strAnyUser = 'Bármely felhasználó';
$strAPrimaryKey = 'Elsodleges kulcsot hozzáadtam: %s';
$strAscending = 'Növekv&#0337';
$strAtBeginningOfTable = 'A tábla elejénél';
$strAtEndOfTable = 'A tábla végénél';
$strAttr = 'Tulajdonságok';

$strBack = 'Vissza';
$strBeginCut = 'Kivágás Kezdete';
$strBeginRaw = 'Feldolgozatlan Kezdete';
$strBinary = 'Bináris';
$strBinaryDoNotEdit = 'Bináris - nem szerkeszthet&#0337';
$strBookmarkDeleted = 'A könyvjelzot töröltem.';
$strBookmarkLabel = 'Felirat';
$strBookmarkQuery = 'Feljegyzett SQL-kérés';
$strBookmarkThis = 'Jegyezd fel az SQL-kérés';
$strBookmarkView = 'Csak megnézhet&#0337';
$strBrowse = 'Tartalom';
$strBzip = '"bzip-pel tömörítve"';

$strCantLoadMySQL = 'nem tudom betölteni a MySQL b&#0337vítményt,<br />ellen&#0337rizd a PHP konfigurációt.';
$strCantLoadRecodeIconv = 'Nem tudom betölteni az iconv vagy recode kiterjesztést a karakterkészlet-átalakításhoz, állítsd be a php-t, hogy engedélyezze ezeket a kiterjesztéseket vagy tiltsd le a karakterkészlet-átalakítást a phpMyAdminban.';
$strCantRenameIdxToPrimary = 'Nem tudom átnevezni az indexet PRIMARY-vá!';
$strCantUseRecodeIconv = 'Nem tudom használni az iconv, libiconv sem a recode_string funkciókat mialatt a kiterjesztés-jelentéseket be kell tölteni. Ellen&#0337rizd a php konfigurációt.';
$strCardinality = 'Számosság';
$strCarriage = 'Kocsivissza: \\r';
$strChange = 'Változtat';
$strChangeDisplay = 'Válassz mez&#0337t a megjelenítéshez';
$strChangePassword = 'Jelszó megváltoztatása';
$strCharsetOfFile = 'A fájl karakterkészlete:';
$strCheckAll = 'Összeset kijelöli';
$strCheckDbPriv = 'Adatbázis Privilégiumok Ellen&#0337rzése';
$strCheckTable = 'Tábla ellen&#0337rzés';
$strChoosePage = 'Válassz oldalt a szerkesztéshez';
$strColComFeat = 'Oszlop megjegyzések megjelenítése';
$strColumn = 'Oszlop';
$strColumnNames = 'Oszlop nevek';
$strComments = 'Megjegyzések';
$strCompleteInserts = 'Mez&#0337neveket is hozzáadja';
$strConfigFileError = 'A phpMyAdmin nem tudja olvasni a konfigurációs fájlt!<br />Lehet, hogy a php szintaktikai hibát talált benne, vagy nem találja a fájlt.<br />Használd az alsó linket a konfigurációs fájl helyreállításához, olvasd el a kapott php hibaüzeneteket. Többnyire egy idéz&#0337jel vagy egy pontosvessz&#0337 hiányzik valahol.<br />Ha üres oldalt kapsz, minden rendben.';
$strConfigureTableCoord = 'Állítsd be a(z) $s tábla koordinátáit';
$strConfirm = 'Biztos, hogy végre akarod hajtani?';
$strCookiesRequired = 'A Cookie-kat most engedélyezned kell.';
$strCopyTable = 'Tábla másolása ide (adatbázis<b>.</b>tábla):';
$strCopyTableOK = '%s táblát ide másoltam: %s.';
$strCreate = 'Létrehoz';
$strCreateIndex = 'Készíts egy indexet a(z)&nbsp;%s&nbsp;. oszlopon';
$strCreateIndexTopic = 'Új index létrehozása';
$strCreateNewDatabase = 'Új adatbázis létrehozása';
$strCreateNewTable = 'Új tábla létrehozása az adatbázisban: %s';
$strCreatePage = 'Új oldal készítése';
$strCreatePdfFeat = 'PDF készítése';
$strCriteria = 'Kritérium';

$strData = 'Adat';
$strDatabase = 'Adatbázis ';
$strDatabaseHasBeenDropped = '%s adatbázist eldobtam.';
$strDatabases = 'adatbázisok';
$strDatabasesStats = 'Adatbázis statisztika';
$strDatabaseWildcard = 'Adatbázis (joker-karakterek elfogadva):';
$strDataOnly = 'Csak adatok';
$strDefault = 'Alapértelmezett';
$strDelete = 'Töröl';
$strDeleted = 'A sort töröltem';
$strDeletedRows = 'Törölt sorok:';
$strDeleteFailed = 'Törlés meghiúsult!';
$strDeleteUserMessage = '%s felhasználót töröltem.';
$strDescending = 'Csökken&#0337';
$strDisabled = 'Tiltott';
$strDisplay = 'Megjelenítés';
$strDisplayFeat = 'Megjelenítés tulajdonságok';
$strDisplayOrder = 'Megjelenítés rendezés:';
$strDisplayPDF = 'PDF séma kijelzése';
$strDoAQuery = 'Csinálj egy "lekérdezést" (helyettesít&#0337 karakter: "%")';
$strDocu = 'Dokumentáció';
$strDoYouReally = 'Biztos ez akarod? ';
$strDrop = 'Eldob';
$strDropDB = 'Adatbázis eldobása %s';
$strDropTable = 'Tábla eldobása';
$strDumpingData = 'Tábla adatok:';
$strDumpXRows = '%s sor kiírása a %s. sorral kezd&#0337dik';
$strDynamic = 'dinamikus';

$strEdit = 'Szerkeszt';
$strEditPDFPages = 'PDF oldalak szerkesztése';
$strEditPrivileges = 'Privilégiumok szerkesztése';
$strEffective = 'Hatályos';
$strEmpty = 'Kiürít';
$strEmptyResultSet = 'A MySQL üreset adott vissza (nincsenek sorok).';
$strEnabled = 'Engedélyezett';
$strEnd = 'Vége';
$strEndCut = 'Kivágás Vége';
$strEndRaw = 'Feldolgozatlan Vége';
$strEnglishPrivileges = ' Megjegyzés: A MySQL privilégium nevek az angolból származnak ';
$strError = 'Hiba';
$strExplain = 'SQL magyarázat';
$strExport = 'Export';
$strExportToXML = 'Export XML-formátumba';
$strExtendedInserts = 'Kiterjesztett beszúrások';
$strExtra = 'Extra';

$strField = 'Mez&#0337';
$strFieldHasBeenDropped = '%s mez&#0337t eldobtam';
$strFields = 'Mez&#0337k száma';
$strFieldsEmpty = ' A mez&#0337 számossága nulla! ';
$strFieldsEnclosedBy = 'Mez&#0337 lezárás';
$strFieldsEscapedBy = 'Mez&#0337 escape karakter';
$strFieldsTerminatedBy = 'Mez&#0337 vége';
$strFixed = 'rögzített';
$strFlushTable = 'Tábla kiírása ("FLUSH")';
$strFormat = 'Formátum';
$strFormEmpty = 'Hiányzó adat a formban !';
$strFullText = 'Teljes Szövegek';
$strFunction = 'Funkció';

$strGenBy = 'Készítette';
$strGeneralRelationFeat = 'Általános relációs jellemz&#0337k';
$strGenTime = 'Létrehozás ideje';
$strGo = 'Végrehajt';
$strGrants = 'Engedélyek';
$strGzip = '"gzip-pel tömörítve"';

$strHasBeenAltered = 'megváltozott.';
$strHasBeenCreated = 'megszületett.';
$strHaveToShow = 'Legalább egy oszlopot választanod kell a megjelenítéshez';
$strHome = 'Kezd&#0337lap';
$strHomepageOfficial = 'Hivatalos phpMyAdmin Honlap';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Letöltés Oldal';
$strHost = 'Hoszt';
$strHostEmpty = 'A hosztnév üres!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Ha csak a tábla néhány oszlopát akarod megjeleníteni, adj meg egy vessz&#0337kkel elválasztott mez&#0337listát.';
$strIgnore = 'Elutasít';
$strIndex = 'Index';
$strIndexes = 'Indexek';
$strIndexHasBeenDropped = '%s indexet eldobtam';
$strIndexName = 'Index név&nbsp;:';
$strIndexType = 'Index tipus&nbsp;:';
$strInsert = 'Beszúr';
$strInsertAsNewRow = 'Beszúrás új sorként';
$strInsertedRows = 'Beszúrt sorok:';
$strInsertNewRow = 'Új sor beszúrása';
$strInsertTextfiles = 'Szövegfájl tartalmának beszúrása a táblába';
$strInstructions = 'Parancs';
$strInUse = 'használatban';
$strInvalidName = '"%s" egy fenntartott szó, nem használhatod adatbázis/tábla/mez&#0337 neveként.';

$strKeepPass = 'Ne változtasd meg a jelszót';
$strKeyname = 'Kulcsnév';
$strKill = 'Leállít';

$strLength = 'Hossz';
$strLengthSet = 'Hossz/Érték*';
$strLimitNumRows = 'Sorok száma oldalanként';
$strLineFeed = 'Soremelés: \\n';
$strLines = 'Sor';
$strLinesTerminatedBy = 'Sorok vége';
$strLinkNotFound = 'Link nem található';
$strLinksTo = 'Linkek:';
$strLocationTextfile = 'A szövegfájl helye';
$strLogin = 'Belépés';
$strLogout = 'Kilépés';
$strLogPassword = 'Jelszó:';
$strLogUsername = 'Felhasználói név:';

$strMissingBracket = 'Hiányzó szögletes zárójel';
$strModifications = 'A változásokat elmentettem';
$strModify = 'Változás';
$strModifyIndexTopic = 'Index változása';
$strMoveTable = 'Tábla áthelyezése ide (adatbázis<b>.</b>tábla):';
$strMoveTableOK = '%s táblát áthelyeztem ide: %s.';
$strMySQLCharset = 'MySQL karakterkészlet';
$strMySQLReloaded = 'MySQL újratöltve.';
$strMySQLSaid = 'MySQL jelzi: ';
$strMySQLServerProcess = 'MySQL %pma_s1%, szerver: %pma_s2%, felhasználó: %pma_s3%';
$strMySQLShowProcess = 'Mutasd meg a folyamatokat';
$strMySQLShowStatus = 'Mutasd meg a MySQL futási információkat';
$strMySQLShowVars = 'Mutasd meg a MySQL rendszer változókat';

$strName = 'Neve';
$strNext = 'Következ&#0337';
$strNo = 'Nem';
$strNoDatabases = 'Nincs adatbázis';
$strNoDescription = 'nincs leírás';
$strNoDropDatabases = '"DROP DATABASE" utasítás le van tiltva.';
$strNoExplain = 'SQL magyarázat átugrása';
$strNoFrames = 'A phpMyAdmin használhatóbb egy <b>frame-kezel&#0337</b> böngész&#0337ben.';
$strNoIndex = 'Nincs index meghatározva!';
$strNoIndexPartsDefined = 'Nincs index darab meghatározva!';
$strNoModification = 'Nincs változás';
$strNone = 'Nincs';
$strNoPassword = 'Nincs jelszó';
$strNoPhp = 'PHP kód nélkül';
$strNoPrivileges = 'Nincs privilégium';
$strNoRights = 'Nincs elég jogod ennek végrehajtására!';
$strNoTablesFound = 'Nincs tábla az adatbázisban.';
$strNotNumber = 'Ez nem egy szám!';
$strNotOK = 'Nincs rendben';
$strNotSet = '<b>%s</b> táblát nem találtam vagy nincs benne: %s';
$strNotValidNumber = ' nem érvényes sorszám!';
$strNoUsersFound = 'Nem találtam felhasználó(ka)t.';
$strNoValidateSQL = 'SQL jóváhagyás átugrása';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s találat <i>%s</i> táblában';
$strNumSearchResultsTotal = '<b>Összes:</b> <i>%s</i> találat';

$strOftenQuotation = 'Gyakran idéz&#0337jel. Opcionálisan a char és varchar mez&#0337k lezárhatók a \"lezárás\"-karakterrel.';
$strOK = 'Rendben';
$strOperations = 'Tevékenységek';
$strOptimizeTable = 'Tábla optimalizálás';
$strOptionalControls = 'Opcionális. Vezérl&#0337k, amelyekkel írhatsz és olvashatsz speciális karaktereket.';
$strOptionally = 'Opcionális';
$strOptions = 'Opciók';
$strOr = 'Vagy';
$strOverhead = 'Felülírás';

$strPageNumber = 'Oldalszám:';
$strPartialText = 'Részleges Szövegek';
$strPassword = 'Jelszó';
$strPasswordEmpty = 'A jelszó mez&#0337 üres!';
$strPasswordNotSame = 'A jelszavak nem azonosak!';
$strPdfDbSchema = '"%s" adatbázis sémája - %s oldal';
$strPdfInvalidPageNum = 'Meghatározatlan PDF oldalszám!';
$strPdfInvalidTblName = '"%s" tábla nem létezik!';
$strPdfNoTables = 'Nincs tábla';
$strPhp = 'PHP kód készítése';
$strPHPVersion = 'PHP Verzió';
$strPmaDocumentation = 'phpMyAdmin dokumentáció';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> értékét a konfigurációs fájlban KELL beállítani!';
$strPos1 = 'Kezdet';
$strPrevious = 'El&#0337z&#0337';
$strPrimary = 'Els&#0337dleges';
$strPrimaryKey = 'Els&#0337dleges kulcs';
$strPrimaryKeyHasBeenDropped = 'Az els&#0337dleges kulcsot eldobtam';
$strPrimaryKeyName = 'Az els&#0337dleges kulcs nevének "PRIMARY"-nak kell lennie!';
$strPrimaryKeyWarning = '("PRIMARY"-nak <b>kell</b> lennie, és <b>csak annak</b> szabad lennie az els&#0337dleges kulcsnak!)';
$strPrintView = 'Nyomtatási nézet';
$strPrivileges = 'Privilégiumok';
$strProperties = 'Tulajdonságok';

$strQBE = 'Lekérdezés';
$strQBEDel = 'Töröl';
$strQBEIns = 'Beszúr';
$strQueryOnDb = 'SQL-kérés <b>%s</b> adatbázison:';

$strRecords = 'Sor';
$strReferentialIntegrity = 'Hivatkozási sértetlenség ellenorzése:';
$strRelationNotWorking = 'A munka kiegészít&#0337 tulajdonságai a vonatkozó táblákra meg lettek szüntetve. Az okokért kattints %side%s.';
$strRelationView = 'Reláció nézet';
$strReloadFailed = 'MySQL újratöltése sikertelen.';
$strReloadMySQL = 'MySQL újratöltése';
$strRememberReload = 'Ne felejtd el újratölteni a szervert.';
$strRenameTable = 'Tábla átnevezése erre';
$strRenameTableOK = '%s táblát átneveztem erre: %s';
$strRepairTable = 'Tábla javítás';
$strReplace = 'Csere';
$strReplaceTable = 'Tábla adatok és fájl cseréje';
$strReset = 'Töröl';
$strReType = 'Újraírás';
$strRevoke = 'Visszavon';
$strRevokeGrant = 'Visszavonást engedélyez';
$strRevokeGrantMessage = 'Visszavontad %s privilégiumait';
$strRevokeMessage = 'Visszavontam a %s privilégiumokat';
$strRevokePriv = 'Privilégiumok visszavonása';
$strRowLength = 'Sorhossz';
$strRows = 'Sorok';
$strRowsFrom = 'sor kezdve ezzel:';
$strRowSize = ' Sorméret ';
$strRowsModeHorizontal = 'vízszintes';
$strRowsModeOptions = '%s módon, a fejlécet %s soronként megismételve';
$strRowsModeVertical = 'függ&#0337leges';
$strRowsStatistic = 'Sor-statisztika';
$strRunning = ': %s';
$strRunQuery = 'Kérés végrehajtása';
$strRunSQLQuery = 'SQL parancs(ok) futtatása a(z) %s adatbázison';

$strSave = 'Ment';
$strScaleFactorSmall = 'A méret elem túl kicsi, hogy megfelel&#0337 legyen a sémához egy oldalon';
$strSearch = 'Keresés';
$strSearchFormTitle = 'Keresés az adatbázisban';
$strSearchInTables = 'Táblá(k)ban:';
$strSearchNeedle = 'Szavak vagy értékek a kereséshez (helyettesít&#0337 karakter: "%"):';
$strSearchOption2 = 'összes szó';
$strSearchOption3 = 'a helyes mondat';
$strSearchOption4 = 'reguláráris kifejezésként';
$strSearchResultsFor = 'Keresési eredmények "<i>%s</i>" %s:';
$strSearchType = 'Keress:';
$strSelect = 'Kiválaszt';
$strSelectADb = 'Válassz egy adatbázist';
$strSelectAll = 'Mindet kijelöli';
$strSelectFields = 'Mez&#0337k kiválasztása (legalább egyet):';
$strSelectNumRows = 'kérésben';
$strSelectTables = 'Táblák kiválasztása';
$strSend = 'Fájlnév megadása';
$strServerChoice = 'Szerver Választás';
$strServerVersion = 'Szerver verzió';
$strSetEnumVal = 'Ha a mez&#0337 tipusa "enum" vagy "set", akkor az értékeket ilyen formában írd be: \'a\',\'b\',\'c\'...<br />Ha backslash-t ("\") vagy aposztrófot ("\'") akarsz ezen értékek között használni, használd a backslash escape karaktert (pl \'\\\\xyz\' vagy \'a\\\'b\').';
$strShow = 'Mutat';
$strShowAll = 'Mutasd mindet';
$strShowColor = 'Mutasd a színeket';
$strShowCols = 'Mutasd az oszlopokat';
$strShowGrid = 'Mutasd a rácsot';
$strShowingRecords = 'Sorok megjelenítése ';
$strShowPHPInfo = 'PHP információ';
$strShowTableDimension = 'Mutasd a táblák méretét';
$strShowTables = 'Mutasd a táblákat';
$strShowThisQuery = ' Mutasd a parancsot itt újra ';
$strSingly = '(egyenként)';
$strSize = 'Méret';
$strSort = 'Sorrendezés';
$strSpaceUsage = 'Helyfoglalás';
$strSplitWordsWithSpace = 'A szavak fel vannak osztva szóköz karakter szerint (" ").';
$strSQL = 'SQL';
$strSQLParserBugMessage = 'Esély van rá, hogy egy hibát találhattál az SQL szintaktikai elemz&#0337ben (parser). Vizsgáld meg gondosan a lekérdezésedet, ellen&#0337rizd, hogy az idéz&#0337jelek jók és jól illeszkednek. Más lehetséges hiba oka lehet, hogy binárisan töltöttél fel egy fájlt az idézett szövegmez&#0337n kívül. Kipróbálhatod a lekérésedet a MySQL parancssoros felületén.  A MySQL szerver hibakimenete alul látható, ha van ott valami, az segíthet felderíteni a hiba okát. Ha még mindig gondjaid vannak, vagy a szintaktiaki elemz&#0337 (parser) hibát jelez, ahol a parancsoros felületen végrehajtódik, redukáld a problémát okozó SQL lekérdezést egy egyszer&#0369 lekérdezéssé, és küldd el egy hibajelzésben (bug report) az alsó Kivágás részben lev&#0337 adatokkal együtt:';
$strSQLParserUserError = 'Úgy látszik az SQL lekérdezésedben van egy hiba. A MySQL szerver hibakimenete alul látható, ha van ott valami, az segíthet felderíteni a hiba okát';
$strSQLQuery = 'SQL-kérés';
$strSQLResult = 'SQL eredmény';
$strSQPBugInvalidIdentifer = 'Érvénytelen azonosító';
$strSQPBugUnclosedQuote = 'Lezáratlan lekérdezés';
$strSQPBugUnknownPunctuation = 'Ismeretlen központozott sztring';
$strStatement = 'Adatok';
$strStrucCSV = 'CSV adat';
$strStrucData = 'Szerkezet és adatok';
$strStrucDrop = '\'Tábla eldobás\' hozzáadása';
$strStrucExcelCSV = 'M$ Excel CSV adat';
$strStrucOnly = 'Csak szerkezet';
$strStructPropose = 'Tábla struktúra ajánlat';
$strStructure = 'Struktúra';
$strSubmit = 'Végrehajt';
$strSuccess = 'Az SQL-kérést sikeresen végrehajtottam';
$strSum = 'Összesen';

$strTable = 'tábla ';
$strTableComments = 'Tábla megjegyzések';
$strTableEmpty = 'A táblanév helye üres!';
$strTableHasBeenDropped = '%s táblát eldobtam';
$strTableHasBeenEmptied = '%s táblát kiürítettem';
$strTableHasBeenFlushed = '%s táblát kiírtam';
$strTableMaintenance = 'Tábla karbantartás';
$strTables = '%s tábla';
$strTableStructure = 'Tábla szerkezet:';
$strTableType = 'Tábla tipusa';
$strTextAreaLength = ' Mivel ez a hossz,<br /> ez a mez&#0337 nem szerkeszthet&#0337 ';
$strTheContent = 'A fájl tartalmát beillesztettem.';
$strTheContents = 'A fájl és a kiválasztott tábla sorainak tartalmát azonos els&#0337dleges vagy egyedi kulccsal cseréli ki.';
$strTheTerminator = 'A mez&#0337k lezárója.';
$strTotal = 'Összesen';
$strType = 'Tipus';

$strUncheckAll = 'Összeset törli';
$strUnique = 'Egyedi';
$strUnselectAll = 'Mindet törli';
$strUpdatePrivMessage = 'Frissítettem a(z) %s privilégiumokat.';
$strUpdateProfile = 'Profil frissítés:';
$strUpdateProfileMessage = 'A profilt frissítettem.';
$strUpdateQuery = 'Kérés frissítés';
$strUsage = 'Méret';
$strUseBackquotes = 'Idéz&#0337jelek használata a tábla- és mez&#0337neveknél';
$strUser = 'Felhasználó';
$strUserEmpty = 'A felhasználói név mez&#0337je üres!';
$strUserName = 'Felhasználói név';
$strUsers = 'Felhasználók';
$strUseTables = 'Táblák használata';

$strValidateSQL = 'SQL jóváhagyás';
$strValue = 'Érték';
$strViewDump = 'Tábla kiírás (vázlat) megnézése';
$strViewDumpDB = 'Adatbázis kiírás (vázlat) megnézése';

$strWelcome = 'Üdvözöl a %s';
$strWithChecked = 'A kijelöltekkel végzend&#0337 m&#0369velet:';
$strWrongUser = 'Rossz felhasználói név/jelszó. Hozzáférés megtagadva.';

$strYes = 'Igen';

$strZip = '"zippel tömörítve"';
// To translate

$strNoQuery = 'Nincs SQL kérés!';  //to translate

$strSearchOption1 = 'at least one of the words';//to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strServer = 'Server %s';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
?>
