<?php
/* $Id$ */

/* By: uros kositer, agenda d.o.o. <urosh@agenda.si> */

$charset = 'utf-8';
$allow_recoding = TRUE;
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Tor', 'Sre', 'Čet', 'Pet', 'Sob');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ob %I:%M %p';

$strAPrimaryKey = 'Na %s je dodan primarni ključ';
$strAccessDenied = 'Dostop zavrnjen';
$strAction = 'Akcija';
$strAddDeleteColumn = 'Dodaj/Odstrani stolpec \'Polje\'';
$strAddDeleteRow = 'Dodaj/Odstrani vrstico \'Kriterij\'';
$strAddNewField = 'Dodaj novo polje';
$strAddPriv = 'Dodaj nov privilegij';
$strAddPrivMessage = 'Dodali ste nov privilegij.';
$strAddSearchConditions = 'Dodaj iskalne pogoje (telo "where" stavka):';
$strAddToIndex = 'Dodaj indeksu &nbsp;%s&nbsp;stolpec(ce)';
$strAddUser = 'Dodaj novega uporabnika';
$strAddUserMessage = 'Dodali ste novega uporabnika.';
$strAffectedRows = 'Spremenjene vrstice:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Nazaj na prejšnjo stran';
$strAfterInsertNewInsert = 'Vstavi še eno novo vrstico';
$strAll = 'Vse/Vsi';
$strAllTableSameWidth = 'prikažem vse tabele enake širine?';
$strAlterOrderBy = 'Spremeni vrstni red prikaza tabele za';
$strAnIndex = 'Na %s je dodan indeks';
$strAnalyzeTable = 'Analiziraj tabelo';
$strAnd = 'In';
$strAny = 'Katerikoli';
$strAnyColumn = 'Katerikoli stolpec';
$strAnyDatabase = 'Katerakoli podatkovna baza';
$strAnyHost = 'Katerikoli gostitelj';
$strAnyTable = 'Katerakoli tabela';
$strAnyUser = 'Katerikoli uporabnik';
$strAscending = 'Naraščajoče';
$strAtBeginningOfTable = 'Na začetku tabele';
$strAtEndOfTable = 'Na koncu tabele';
$strAttr = 'Atributi';

$strBack = 'Nazaj';
$strBeginCut = 'ZAČETEK IZREZA';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne urejaj';
$strBookmarkDeleted = 'Zaznamek je odstranjen.';
$strBookmarkLabel = 'Nalepka';
$strBookmarkQuery = 'Označena SQL-poizvedba';
$strBookmarkThis = 'Označi to SQL-poizvedbo';
$strBookmarkView = 'Samo pogled';
$strBrowse = 'Prebrskaj';
$strBzip = '"bzipano"';

$strCantLoadMySQL = 'ni mogoče naložiti MySQL ekstenzij,<br /> prosimo, preverite PHP konfiguracijo.';
$strCantLoadRecodeIconv = 'Ni mogoče naložiti iconv ali recode ekstenzij, ki so potrebne za pretvorbe kodnih tabel, konfigurirajte php tako, da bo omogočal uporabo teh ekstenzij ali onemogočite pretvarjanje kodnih tabel v phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Indeksa ni mogoče preimenovati v PRIMARY!';
$strCantUseRecodeIconv = 'Ni mogoče uporabljati iconv, libiconv ali recode_string funkcij, čeprav so ekstenzije normalno naložene. Preverite konfiguracijo php.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Znak za pomik na začetek vrste (Carriage return): \\r';
$strChange = 'Spremeni';
$strChangeDisplay = 'Izberite polje za prikaz';
$strChangePassword = 'Spremeni geslo';
$strCharsetOfFile = 'Nabor znakov datoteke:';
$strCheckAll = 'Označi vse';
$strCheckDbPriv = 'Preveri privilegije podatkovne baze';
$strCheckTable = 'Preveri tabelo';
$strChoosePage = 'Izberite stran za urejanje';
$strColComFeat = 'Prikazovanje komentarjev stolpcev';
$strColumn = 'Stolpec';
$strColumnNames = 'Imena stolpcev';
$strComments = 'Komentarji';
$strCompleteInserts = 'Popolne \'insert\' poizvedbe';
$strConfigFileError = 'phpMyAdmin ni mogel prebrati konfiguracijske datoteke!<br />To se lahko zgodi, če php pri prevajanju konfiguracijske datoteke najde napako ali pa ne najde datoteke.<br />Prosimo, odprite konfiguracijsko datoteko s povezavo, ki je navedena spodaj in preberite dobljeno sporočilo o napaki. V večini primerov gre za manjkajoči narekovaj ali podpičje.<br />Če dobite prazno stran, je vse v redu.';
$strConfigureTableCoord = 'Prosimo, konfigurirajte koordinate za tabelo %s';
$strConfirm = 'Ali res želite to storiti?';
$strCookiesRequired = 'Če želite še dalje uporabljati program, morate omogočiti piškotke.';
$strCopyTable = 'Kopiraj tabelo v (podatkovna_baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je skopirana v %s.';
$strCreate = 'Ustvari';
$strCreateIndex = 'Ustvari indeks na&nbsp;%s&nbsp;stolpcih';
$strCreateIndexTopic = 'Ustvari nov indeks';
$strCreateNewDatabase = 'Ustvari novo podatkovno bazo';
$strCreateNewTable = 'Ustvari novo tabelo v podatkovni bazi %s';
$strCreatePage = 'Ustvari novo stran';
$strCreatePdfFeat = 'Ustvarjanje PDF datotek';
$strCriteria = 'Kriteriji';

$strData = 'Podatki';
$strDataOnly = 'Samo podatki';
$strDatabase = 'Podatkovna baza ';
$strDatabaseHasBeenDropped = 'Podatkovna baza %s je zavržena.';
$strDatabaseWildcard = 'Podatkovna baza (nadomestni znaki dovoljeni):';
$strDatabases = 'podatkovne baze';
$strDatabasesStats = 'Statistika podatkovnih baz';
$strDefault = 'Privzeto';
$strDelete = 'Izbriši';
$strDeleteFailed = 'Brisanje ni uspelo!';
$strDeleteUserMessage = 'Izbrisali ste uporabnika %s.';
$strDeleted = 'Vrstica je izbrisana';
$strDeletedRows = 'Izbrisane vrstice:';
$strDescending = 'Padajoče';
$strDisabled = 'Onemogočeno';
$strDisplay = 'Prikaži';
$strDisplayFeat = 'Prikaži lastnosti';
$strDisplayOrder = 'Vrstni red prikaza:';
$strDisplayPDF = 'Prikaži PDF shemo';
$strDoAQuery = 'Izvedi "query by example" (nadomestni znak: "%")';
$strDoYouReally = 'Ali res želite ';
$strDocu = 'Dokumentacija';
$strDrop = 'Zavrži';
$strDropDB = 'Zavrži podatkovno bazo %s';
$strDropTable = 'Zavrži tabelo';
$strDumpXRows = 'Odloži %s vrstic, začni z zapisom # %s.';
$strDumpingData = 'Odloži podatke za tabelo';
$strDynamic = 'dinamično';

$strEdit = 'Uredi';
$strEditPDFPages = 'Uredi PDF strani';
$strEditPrivileges = 'Uredi privilegije';
$strEffective = 'Učinkovito';
$strEmpty = 'Izprazni';
$strEmptyResultSet = 'MySQL je vrnil kot rezultat prazno množico (npr. nič vrstic).';
$strEnabled = 'Omogočeno';
$strEnd = 'Konec';
$strEndCut = 'KONEC IZREZA';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Opomba: Imena MySQL privilegijev so zapisana v angleščini ';
$strError = 'Napaka';
$strExplain = 'Razloži SQL stavek';
$strExport = 'Izvozi';
$strExportToXML = 'Izvozi v XML obliko';
$strExtendedInserts = 'Razširjene \'insert\' poizvedbe';
$strExtra = 'Dodatno';

$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je zavrženo';
$strFields = 'Polja';
$strFieldsEmpty = ' Števec polj je prazen! ';
$strFieldsEnclosedBy = 'Polja obdana z';
$strFieldsEscapedBy = 'Polja izognjena z';
$strFieldsTerminatedBy = 'Polja zaključena z';
$strFixed = 'fiksno';
$strFlushTable = 'Počisti tabelo ("FLUSH")';
$strFormEmpty = 'V obliki manjka vrednost !';
$strFormat = 'Oblika';
$strFullText = 'Polna besedila';
$strFunction = 'Funkcija';

$strGenBy = 'Ustvaril';
$strGenTime = 'Čas nastanka';
$strGeneralRelationFeat = 'Splošne lastnosti relacij';
$strGo = 'Izvedi';
$strGrants = 'Dovoljenja';
$strGzip = '"gzipano"';

$strHasBeenAltered = 'je bil spremenjen(a).';
$strHasBeenCreated = 'je bil ustvarjen(a).';
$strHaveToShow = 'Za prikaz morate izbrati morate vsaj en stolpec';
$strHome = 'Domov';
$strHomepageOfficial = 'Uradna domača stran phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = 'Gostitelj';
$strHostEmpty = 'Ime gostitelja je prazno!';

$strIdxFulltext = 'Polno besedilo';
$strIfYouWish = 'Če bi radi naložili samo nekatere stolpce tabele, jih navedite v seznamu, kjer jih ločite z vejico.';
$strIgnore = 'Prezri';
$strInUse = 'v uporabi';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s je zavržen';
$strIndexName = 'Ime indeksa&nbsp;:';
$strIndexType = 'Vrsta indeksa&nbsp;:';
$strIndexes = 'Indeksi';
$strInsecureMySQL = 'Konfiguracijska datoteka vsebuje nastavitve (uporabnik root brez gesla), ki odgovarjajo privzetemu privlegiranemu računu MySQLa. MySQL strežnik teče s privzetimi nastavitvami, zato je izpostavljen vdorom. Čimprej odpravite ti dve varnostni luknji.';
$strInsert = 'Vstavi';
$strInsertAsNewRow = 'Vstavi kot novo vrstico';
$strInsertNewRow = 'Vstavi novo vrstico';
$strInsertTextfiles = 'V tabelo vstavi podatke iz datoteke z besedilom';
$strInsertedRows = 'Vstavljene vrstice:';
$strInstructions = 'Navodila';
$strInvalidName = 'beseda "%s" je rezervirana, zato je ne morete uporabiti kot ime podatkovne baze/tabele/polja.';

$strKeepPass = 'Ne spreminjaj gesla';
$strKeyname = 'Ime ključa';
$strKill = 'Ubij proces';

$strLanguage = 'Jezik';
$strLength = 'Dolžina';
$strLengthSet = 'Dolžina/Vrednosti*';
$strLimitNumRows = 'Število vrstic na stran';
$strLineFeed = 'Pomik v novo vrsto (Linefeed): \\n';
$strLines = 'Vrstice';
$strLinesTerminatedBy = 'Vrstice zaključene z';
$strLinkNotFound = 'Povezave ni mogoče najti';
$strLinksTo = 'Povezave z';
$strLocationTextfile = 'Lokacija datoteke z besedilom';
$strLogPassword = 'Geslo:';
$strLogUsername = 'Uporabniško ime:';
$strLogin = 'Prijava';
$strLogout = 'Odjava';

$strMissingBracket = 'Manjkajoč oklepaj';
$strModifications = 'Spremembe so shranjene';
$strModify = 'Spremeni';
$strModifyIndexTopic = 'Spremeni indeks';
$strMoveTable = 'Premakni tabelo v (podatkovna_baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je bila premaknjena v %s.';
$strMySQLCharset = 'MySQL kodna tabela';
$strMySQLReloaded = 'MySQL ponovno naložen.';
$strMySQLSaid = 'MySQL je vrnil: ';
$strMySQLServerProcess = 'MySQL %pma_s1% teče na %pma_s2% kot %pma_s3%';
$strMySQLShowProcess = 'Pokaži procese';
$strMySQLShowStatus = 'Pokaži tekoče informacije o MySQL';
$strMySQLShowVars = 'Pokaži sistemske spremenljivke MySQL';

$strName = 'Ime';
$strNext = 'Naslednji';
$strNo = 'Ne';
$strNoDatabases = 'Brez podatkovnih baz';
$strNoDescription = 'brez opisa';
$strNoDropDatabases = '"DROP DATABASE" poizvedbe so izključene.';
$strNoExplain = 'Preskoči razlago SQL stavka';
$strNoFrames = 'phpMyAdmin je prijaznejši z brskalnikom, ki podpira okvirje.';
$strNoIndex = 'Ni definiranega indeksa!';
$strNoIndexPartsDefined = 'Ni definiranega dela indeksa!';
$strNoModification = 'Brez sprememb';
$strNoPassword = 'Brez gesla';
$strNoPhp = 'Brez kode PHP';
$strNoPrivileges = 'Brez privilegijev';
$strNoQuery = 'Brez SQL poizvedbe!';
$strNoRights = 'Nimate dovolj pravic, da bi bili sedaj tukaj!';
$strNoTablesFound = 'V podatkovni bazi ni mogoče najti tabel.';
$strNoUsersFound = 'Ni mogoče najti uporabnika(ov).';
$strNoValidateSQL = 'Preskoči preverjanje pravilnosti SQL stavka';
$strNone = 'Brez';
$strNotNumber = 'To ni število!';
$strNotOK = 'Ni v redu';
$strNotSet = 'Tabele <b>%s</b> ni mogoče najti ali pa ni v %s';
$strNotValidNumber = ' ni veljavna številka vrstice!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s zadetek(ov) v tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>Skupaj:</b> <i>%s</i> zadetek(ov)';

$strOK = 'V redu';
$strOftenQuotation = 'Pogosti narekovaji. OPCIJSKO pomeni, da so samo polja tipa \'char\' in \'varchar\' obdana s temi znaki.';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiraj tabelo';
$strOptionalControls = 'Opcijsko. Narekuje način pisanja in branja posebnih znakov.';
$strOptionally = 'OPCIJSKO';
$strOptions = 'Možnosti';
$strOr = 'Ali';
$strOverhead = 'Presežek';

$strPHPVersion = 'Različica PHP';
$strPageNumber = 'Številka strani:';
$strPartialText = 'Delna besedila';
$strPassword = 'Geslo';
$strPasswordEmpty = 'Geslo je prazno!';
$strPasswordNotSame = 'Gesli se ne ujemata!';
$strPdfDbSchema = 'Shema podatkovne baze "%s" - Stran %s';
$strPdfInvalidPageNum = 'Nedefinirna številka PDF strani!';
$strPdfInvalidTblName = 'Tabela "%s" ne obstaja!';
$strPdfNoTables = 'Ni tabel';
$strPhp = 'Ustvari PHP kodo';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Ukaz <tt>$cfg[\'PmaAbsoluteUri\']</tt> mora biti definiran v konfiguracijski datoteki!';
$strPos1 = 'Začetek';
$strPrevious = 'Prejšnji';
$strPrimary = 'Primarni';
$strPrimaryKey = 'Primarni ključ';
$strPrimaryKeyHasBeenDropped = 'Primarni ključ je zavržen';
$strPrimaryKeyName = 'Ime primarnega ključa mora biti... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnega ključa!)';
$strPrintView = 'Pogled postavitve tiskanja';
$strPrivileges = 'Privilegiji';
$strProperties = 'Lastnosti';
$strPutColNames = 'Postavi imena polj v prvo vrstico';

$strQBE = 'Poizvedba';
$strQBEDel = 'Briši';
$strQBEIns = 'Vstavi';
$strQueryOnDb = 'SQL-poizvedba na podatkovni bazi <b>%s</b>:';

$strReType = 'Ponovno vnesi';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Preveri referenčno integriteto:';
$strRelationNotWorking = 'Dodatne funkcije za delo s povezanimi tabelami so bile izkjučene. Če želite izvedeti zakaj, kliknite %stukaj%s.';
$strRelationView = 'Pogled relacij';
$strReloadFailed = 'Ponovno nalaganje MySQL ni uspelo.';
$strReloadMySQL = 'Ponovno naloži MySQL';
$strRememberReload = 'Ne pozabite ponovno naložiti strežnika.';
$strRenameTable = 'Preimenuj tabelo v';
$strRenameTableOK = 'Tabela %s je preimenovana v %s';
$strRepairTable = 'Popravi tabelo';
$strReplace = 'Zamenjaj';
$strReplaceTable = 'Podatke v tabeli zamenjaj z datoteko';
$strReset = 'Ponastavi';
$strRevoke = 'Odvzemi';
$strRevokeGrant = 'Odvzemi dovoljenje';
$strRevokeGrantMessage = 'Odvzeli ste dovoljenje (Grant) za %s';
$strRevokeMessage = 'Odvzeli ste privilegije za %s';
$strRevokePriv = 'Odvzemi privilegije';
$strRowLength = 'Dolžina vrstice';
$strRowSize = ' Velikost vrstice ';
$strRows = 'Vrstice';
$strRowsFrom = 'vrstice naprej od zapisa #';
$strRowsModeHorizontal = 'vodoravnem';
$strRowsModeOptions = 'v %s načinu in ponovi glavo po %s celicah';
$strRowsModeVertical = 'navpičnem';
$strRowsStatistic = 'Statistika vrstic';
$strRunQuery = 'Izvedi poizvedbo';
$strRunSQLQuery = 'Izvedi SQL poizvedbo/poizvedbe na podatkovni bazi %s';
$strRunning = 'teče na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Obstaja možnost, da ste v SQL razčlenjevalniku naleteli na hrošča. Temeljito preglejte poizvedbo in preverite, če so citati pravilni in če se ujemajo. Možno je tudi, da prenašate binarno datoteko, ki je izven področja besedila citata. Poizvedbo lahko preizkusite tudi na vmesniku ukazne vrstice MySQL. Če je strežnik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju težav. Če se bodo težave nadaljevale, ali če razčlenjevalniku ne uspe tam, kjer vmesniku ukazne vrstice uspe, potem zmanjšajte vnešeno SQL poizvedbo na tisto poizvedbo, ki povzroča težave in pošljite poročilo o napaki skupaj s podatki iz spodnjega odseka IZREZA.';
$strSQLParserUserError = 'Izgleda, da je v SQL poizvedbi prišlo do napake. Če je strežnik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju težav.';
$strSQLQuery = 'SQL-poizvedba';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Neveljavni identifikator';
$strSQPBugUnclosedQuote = 'Odprt citat';
$strSQPBugUnknownPunctation = 'Neznan niz ločil';
$strSave = 'Shrani';
$strScaleFactorSmall = 'Faktor povečava je premajhen, da bi spravili shemo na eno stran';
$strSearch = 'Iskanje';
$strSearchFormTitle = 'Išči v podatkovni bazi';
$strSearchInTables = 'V tabelah:';
$strSearchNeedle = 'Iskane besede ali vrednosti (nadomestni znak: "%"):';
$strSearchOption1 = 'katerokoli besedo';
$strSearchOption2 = 'vse besede';
$strSearchOption3 = 'točno določeno frazo';
$strSearchOption4 = 'kot \'regular expression\'';
$strSearchResultsFor = 'Rezultati iskanja "<i>%s</i>" %s:';
$strSearchType = 'Najdi:';
$strSelect = 'Izberi';
$strSelectADb = 'Prosimo, izberite podatkovno bazo';
$strSelectAll = 'Izberi vse';
$strSelectFields = 'Izberite polja (vsaj eno):';
$strSelectNumRows = 'in poizvedba';
$strSelectTables = 'Izberi tabele';
$strSend = 'Shrani kot datoteko';
$strServer = 'Strežnik %s';
$strServerChoice = 'Izbira strežnika';
$strServerVersion = 'Različica strežnika';
$strSetEnumVal = 'Če je polje vrste "enum" ali "set", navedite vrednosti v obliki: \'a\',\'b\',\'c\'...<br /> Če želite med vrednostmi uporabiti poševnico ("\") ali enojni narekovaj ("\'"), pred tem znakom vnesite poševnico (n.pr. \'\\\\xyz\' ali \'a\\\'b\').';
$strShow = 'Pokaži';
$strShowAll = 'Pokaži vse';
$strShowColor = 'Pokaži barvo';
$strShowCols = 'Pokaži stolpce';
$strShowGrid = 'Pokaži mrežo';
$strShowPHPInfo = 'Pokaži podatke o PHP';
$strShowTableDimension = 'Pokaži dimenzije tabel';
$strShowTables = 'Pokaži tabele';
$strShowThisQuery = ' Ponovno pokaži poizvedbo v tem oknu ';
$strShowingRecords = 'Prikazujem vrstice';
$strSingly = '(posamezno)';
$strSize = 'Velikost';
$strSort = 'Sortiraj';
$strSpaceUsage = 'Poraba prostora';
$strSplitWordsWithSpace = 'Besede so ločene s presledkom (" ").';
$strStatement = 'Izjave';
$strStrucCSV = 'CSV podatki';
$strStrucData = 'Struktura in podatki';
$strStrucDrop = 'Dodaj \'drop table\' poizvedbo';
$strStrucExcelCSV = 'CSV podatki za Ms Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlagaj strukturo tabele';
$strStructure = 'Struktura';
$strSubmit = 'Pošlji';
$strSuccess = 'SQL-poizvedba je bila uspešno izvedena';
$strSum = 'Vsota';

$strTable = 'tabela ';
$strTableComments = 'Komentar tabele';
$strTableEmpty = 'Ime tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je zavržena';
$strTableHasBeenEmptied = 'Tabela %s je izpraznjena';
$strTableHasBeenFlushed = 'Tabela %s je osvežena';
$strTableMaintenance = 'Vzdrževanje tabele';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Vrsta tabele';
$strTables = '%s tabel';
$strTextAreaLength = ' Zaradi njegove dolžine<br /> polja ne bo mogoče urejati ';
$strTheContent = 'Vsebina datoteke je vnešena.';
$strTheContents = 'Vsebina datoteke zamenja vsebino izbrane tabele v vrsticah z identičnim primarnim ali unikatnim ključem.';
$strTheTerminator = 'Zaključni znak polj.';
$strTotal = 'skupaj';
$strType = 'Vrsta';

$strUncheckAll = 'Odznači vse';
$strUnique = 'Unikaten';
$strUnselectAll = 'Prekliči izbor vsega';
$strUpdatePrivMessage = 'Posodobili ste privilegije za %s.';
$strUpdateProfile = 'Posodobi profil:';
$strUpdateProfileMessage = 'Profil je posodobljen.';
$strUpdateQuery = 'Osveži poizvedbo';
$strUsage = 'Uporaba';
$strUseBackquotes = 'Obdaj imena tabel in polj z enojnimi poševnimi narekovaji';
$strUseTables = 'Uporabi tabele';
$strUser = 'Uporabnik';
$strUserEmpty = 'Uporabniško ime je prazno!';
$strUserName = 'Uporabniško ime';
$strUsers = 'Uporabniki';

$strValidateSQL = 'Preveri pravilnost SQL stavka';
$strValidatorError = 'Ne morem inicializirati SQL validatorja. Prosim preverite, če so nameščeni vsi php razširitve, kot je navedeno v %dokumenaciji%.';
$strValue = 'Vrednost';
$strViewDump = 'Preglej dump (shemo) tabele';
$strViewDumpDB = 'Preglej dump (shemo) podatkovne baze';

$strWebServerUploadDirectory = 'imenik za nalaganje datotek';
$strWebServerUploadDirectoryError = 'Imenik, ki ste ga določili za nalaganje, je nedosegljiv';
$strWelcome = 'Dobrodošli v %s';
$strWithChecked = 'Z označenim:';
$strWrongUser = 'Napačno uporabniško ime/geslo. Dostop zavrnjen.';

$strYes = 'Da';

$strZip = '"zipano"';
// To translate

$strImportDocSQL = 'Import docSQL Files';  //to translate
$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
?>
