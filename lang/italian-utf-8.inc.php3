<?php
/* $Id$ */

/**
 * Translated by: Pietro Danesi <danone at users.sourceforge.net>  2002-03-29
 * Revised by:    "DPhantom" <dphantom at users.sourceforge.net>  2002-04-16
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'); //italian days
$month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'); //italian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //italian time
$timespanfmt = '%s giorni, %s ore, %s minuti e %s secondi';

$updComTab = 'Prego leggere la documentazione su come aggiornare la vostra tabella Column_comments';  

$strAPrimaryKey = 'Una chiave primaria è stata aggiunta in %s';
$strAbortedClients = 'Fallito';
$strAbsolutePathToDocSqlDir = 'Prego, immettere il path assoluto sul webserver alla directory di docSQL';
$strAccessDenied = 'Accesso negato';
$strAction = 'Azione';
$strAddDeleteColumn = 'Aggiungi/Cancella campo';
$strAddDeleteRow = 'Aggiungi/Cancella criterio';
$strAddNewField = 'Aggiungi un nuovo campo';
$strAddPriv = 'Aggiungi un nuovo privilegio';
$strAddPrivMessage = 'Hai aggiunto un nuovo privilegio.';
$strAddPrivilegesOnDb = 'Aggiungi privilegi sul seguente database';
$strAddPrivilegesOnTbl = 'Aggiungi privilegi sulla seguente tabella';
$strAddSearchConditions = 'Aggiungi condizioni di ricerca (corpo della clausola "where"):';
$strAddToIndex = 'Aggiungi all\'indice &nbsp;%s&nbsp;colonna/e';
$strAddUser = 'Aggiungi un nuovo utente';
$strAddUserMessage = 'Hai aggiunto un nuovo utente.';
$strAddedColumnComment = 'Agginto commento sulla colonna';
$strAddedColumnRelation = 'Aggiunta Relazione per la colonna';
$strAdministration = 'Amministrazione';
$strAffectedRows = 'Righe affette:';
$strAfter = 'Dopo %s';
$strAfterInsertBack = 'Indietro';
$strAfterInsertNewInsert = 'Inserisci un nuovo record';
$strAll = 'Tutti';
$strAllTableSameWidth = 'mostra tutte le Tabelle con la stessa larghezza?';
$strAlterOrderBy = 'Altera tabella ordinata per';
$strAnIndex = 'Un indice è stato aggiunto in %s';
$strAnalyzeTable = 'Analizza tabella';
$strAnd = 'E';
$strAny = 'Qualsiasi';
$strAnyColumn = 'Qualsiasi colonna';
$strAnyDatabase = 'Qualsiasi database';
$strAnyHost = 'Qualsiasi host';
$strAnyTable = 'Qualsiasi tabella';
$strAnyUser = 'Qualsiasi utente';
$strAscending = 'Crescente';
$strAtBeginningOfTable = 'All\'inizio della tabella';
$strAtEndOfTable = 'Alla fine della tabella';
$strAttr = 'Attributi';

$strBack = 'Indietro';
$strBeginCut = 'INIZIO CUT';
$strBeginRaw = 'INIZIO RAW';
$strBinary = 'Binario';
$strBinaryDoNotEdit = 'Tipo di dato Binario - non modificare';
$strBookmarkDeleted = 'Il bookmark è stato cancellato.';
$strBookmarkLabel = 'Etichetta';
$strBookmarkQuery = 'Query SQL aggiunte ai preferiti';
$strBookmarkThis = 'Aggiungi ai preferiti questa query SQL';
$strBookmarkView = 'Visualizza solo';
$strBrowse = 'Mostra';
$strBzError = 'phpMyAdmin non è capace di comprimere il dump a causa dell\'estensione Bz2 errata in questa versione di PHP. Vi raccomandiamo vivamente di settare il parametro <code>$cfg[\'BZipDump\']</code> nel vostro file di configurazione di phpMyAdmin a <code>FALSE</code>. Se volete utilizzare le capacità di compressione Bz2, dovreste aggiornare il PHP all\'ultima versione. Date un\'occhiata al bug report %s per uteriori dettagli.';
$strBzip = '"compresso con bzip2"';

$strCSVOptions = 'Opzioni CSV';
$strCannotLogin = 'Impossibile eseguire il login nel server MySQL';
$strCantLoad = 'Impossibile caricare l\'estensione %s,<br />prego controllare la configurazione di PHP';
$strCantLoadMySQL = 'impossibile caricare l\'estensione MySQL,<br />controlla la configurazione di PHP.';
$strCantLoadRecodeIconv = 'Impossibile caricare l\'estensione iconv o recode necessaria per la conversione del set di caratteri, configurare il PHP per permettere di utilizzare queste estenzioni o disabilitare la conversione dei set di caratteri in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Impossibile rinominare l\'indice a PRIMARIO!';
$strCantUseRecodeIconv = 'Impossibile utilizzare le funzioni iconv o libiconv o recode_string in quanto l\'estensione deve essere caricata. Controllare la configurazione del PHP.';
$strCardinality = 'Cardinalità';
$strCarriage = 'Ritorno carrello: \\r';
$strChange = 'Modifica';
$strChangeCopyMode = 'Crea un nuovo utente con gli stessi privilegi e ...';
$strChangeCopyModeCopy = '... mantieni quello vecchio.';
$strChangeCopyModeDeleteAndReload = ' ... cancella quello vecchio dalla tabella degli utenti e in seguito ricarica i privilegi.';
$strChangeCopyModeJustDelete = ' ... cancella quello vecchio dalla tabella degli utenti.';
$strChangeCopyModeRevoke = ' ... revoca tutti i privilegi attivi da quello vecchio e in seguito cancellalo.';
$strChangeCopyUser = 'Cambia le Informazioni di Login / Copia Utente';
$strChangeDisplay = 'Scegli il campo da mostrare';
$strChangePassword = 'Cambia password';
$strCharsetOfFile = 'Set di caratteri del file:';
$strCheckAll = 'Seleziona tutti';
$strCheckDbPriv = 'Controlla i privilegi del database';
$strCheckPrivs = 'Controlla i privilegi';
$strCheckPrivsLong = 'Controlla i privilegi per il database &quot;%s&quot;.';
$strCheckTable = 'Controlla tabella';
$strChoosePage = 'Prego scegliere una Page da modificare';
$strColComFeat = 'Visualizzazione commenti delle colonne';
$strColumn = 'Colonna';
$strColumnNames = 'Nomi delle colonne';
$strColumnPrivileges = 'Privilegi relativi alle colonne';
$strCommand = 'Comando';
$strComments = 'Commenti';
$strCompleteInserts = 'Inserimenti completi';
$strCompression = 'Compressione';
$strConfigFileError = 'phpMyAdmin non riesce a leggere il file di configurazione!<br />Questo può accadere se il php trova un parse error in esso oppure il php non trova il file.<br />Richiamate il file di configurazione direttamente utilizzando il link sotto e leggete il/i messaggio/i di errore del php che ricevete. Nella maggior parte dei casi ci sono un apostrofo o una virgoletta mancanti.<br />Se ricevete una pagina bianca, allora è tutto a posto.';
$strConfigureTableCoord = 'Prego, configurare le coordinate per la tabella %s';
$strConfirm = 'Sicuro di volerlo fare?';
$strConnections = 'Connessioni';
$strCookiesRequired = 'Da questo punto in poi, i cookies devono essere abilitati.';
$strCopyTable = 'Copia la tabella nel (database<b>.</b>tabella):';
$strCopyTableOK = 'La tabella %s è stata copiata su %s.';
$strCouldNotKill = 'phpMyAdmin non è capace di terminare il thread %s. Probabilmente è già stato terminato.';
$strCreate = 'Crea';
$strCreateIndex = 'Crea un indice su &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Crea un nuovo indice';
$strCreateNewDatabase = 'Crea un nuovo database';
$strCreateNewTable = 'Crea una nuova tabella nel database %s';
$strCreatePage = 'Crea una nuova Page';
$strCreatePdfFeat = 'Creazione di PDF';
$strCriteria = 'Criterio';

$strDBComment = 'Commento al Database: ';
$strDBGContext = 'Contesto';
$strDBGContextID = 'ID del Contesto';
$strDBGHits = 'Hits';
$strDBGLine = 'Linea';
$strDBGMaxTimeMs = 'Tempo massimo, ms';
$strDBGMinTimeMs = 'Tempo minimo, ms';
$strDBGModule = 'Modulo';
$strDBGTimePerHitMs = 'Tempo/Hit, ms';
$strDBGTotalTimeMs = 'Tempo totale, ms';
$strData = 'Dati';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Solo dati';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Il Database %s è stato eliminato.';
$strDatabaseWildcard = 'Database (wildcards permesse):';
$strDatabases = 'Database';
$strDatabasesDropped = '%s databases sono stati cancellati correttamente.';
$strDatabasesStats = 'Statistiche dei databases';
$strDatabasesStatsDisable = 'Disabilita le Statistiche';
$strDatabasesStatsEnable = 'Abilita le Statistiche';
$strDatabasesStatsHeavyTraffic = 'N.B.: Abilitare qui le statistiche del Database potrebbe causare del traffico intenso fra il server web e MySQL.';
$strDbPrivileges = 'Privilegi specifici al database';
$strDbSpecific = 'specifico del database';
$strDefault = 'Predefinito';
$strDefaultValueHelp = 'Per i valori predefiniti, prego inserire un singolo valore, senza backslashes escaping o virgolette, utilizzando questo formato: a';
$strDelete = 'Cancella';
$strDeleteAndFlush = 'Cancella gli utenti e dopo ricarica i privilegi.';
$strDeleteAndFlushDescr = 'Questa è la vita più giusta, ma il caricamento dei privilegi può durare qualche secondo.';
$strDeleteFailed = 'Cancellazione fallita!';
$strDeleteUserMessage = 'Hai cancellato l\'utente %s.';
$strDeleted = 'La riga è stata cancellata';
$strDeletedRows = 'Righe cancellate:';
$strDeleting = 'Cancellazione in corso di %s';
$strDescending = 'Decrescente';
$strDisabled = 'Disabilitata';
$strDisplay = 'Visualizza';
$strDisplayFeat = 'Mostra Caratteristiche';
$strDisplayOrder = 'Ordine di visualizzazione:';
$strDisplayPDF = 'Mostra lo schema del PDF';
$strDoAQuery = 'Esegui "query da esempio" (carattere jolly: "%")';
$strDoYouReally = 'Confermi: ';
$strDocu = 'Documentazione';
$strDrop = 'Elimina';
$strDropDB = 'Elimina database %s';
$strDropSelectedDatabases = 'Elimina i Databases selezionati';
$strDropTable = 'Elimina la tabella';
$strDropUsersDb = 'Elimina i databases gli stessi nomi degli utenti.';
$strDumpComments = 'Includi commenti alle colonne come commenti-SQL in linea';
$strDumpXRows = 'Dump di %s righe a partire dalla riga %s.';
$strDumpingData = 'Dump dei dati per la tabella';
$strDynamic = 'dinamico';

$strEdit = 'Modifica';
$strEditPDFPages = 'Modifica pagine PDF';
$strEditPrivileges = 'Modifica Privilegi';
$strEffective = 'Effettivo';
$strEmpty = 'Svuota';
$strEmptyResultSet = 'MySQL ha restituito un insieme vuoto (i.e. zero righe).';
$strEnabled = 'Abilitata';
$strEnd = 'Fine';
$strEndCut = 'FINE CUT';
$strEndRaw = 'FINE RAW';
$strEnglishPrivileges = 'Nota: i nomi dei privilegi di MySQL sono in Inglese';
$strError = 'Errore';
$strExplain = 'Spiega SQL';
$strExport = 'Esporta';
$strExportToXML = 'Esporta in formato XML';
$strExtendedInserts = 'Inserimenti estesi';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentativi falliti';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Il campo %s è stato eliminato';
$strFields = 'Campi';
$strFieldsEmpty = ' Il contatore dei campi è vuoto! ';
$strFieldsEnclosedBy = 'Campo composto da';
$strFieldsEscapedBy = 'Campo impedito da';
$strFieldsTerminatedBy = 'Campo terminato da';
$strFileCouldNotBeRead = 'Il filenon può essere letto';
$strFixed = 'fisso';
$strFlushPrivilegesNote = 'N.B.: phpMyAdmin legge i privilegi degli utenti direttamente nella tabella dei privilegi di MySQL. Il contenuto di questa tabella può differire dai privilegi usati dal server se sono stati fatti cambiamenti manuali. In questo caso, Si dovrebbero %srinfrescare i privilegi%s prima di continuare.';
$strFlushTable = 'Inizializza ("FLUSH") la tabella';
$strFormEmpty = 'Valore mancante nel form!';
$strFormat = 'Formato';
$strFullText = 'Testo completo';
$strFunction = 'Funzione';

$strGenBy = 'Generato da';
$strGenTime = 'Generato il';
$strGeneralRelationFeat = 'Caratteristiche Generali di Relazione';
$strGlobal = 'globale';
$strGlobalPrivileges = 'Privilegi globali';
$strGlobalValue = 'Valore globale';
$strGo = 'Esegui';
$strGrantOption = 'Grant';
$strGrants = 'Permetti';
$strGzip = '"compresso con gzip"';

$strHasBeenAltered = 'è stato modificato.';
$strHasBeenCreated = 'è stato creato.';
$strHaveToShow = 'Devi scegliere almeno una Colonna da mostrare';
$strHome = 'Home';
$strHomepageOfficial = 'Home page ufficiale di phpMyAdmin';
$strHomepageSourceforge = 'Home page di phpMyAdmin su sourceforge.net';
$strHost = 'Host';
$strHostEmpty = 'Il nome di host è vuoto!';

$strId = 'ID';
$strIdxFulltext = 'Testo completo';
$strIfYouWish = 'Per caricare i dati solo per alcune colonne della tabella, specificare la lista dei campi (separati da virgole).';
$strIgnore = 'Ignora';
$strIgnoringFile = 'File %s ignorato';
$strImportDocSQL = 'Importa Files docSQL';
$strImportFiles = 'Importa files';
$strImportFinished = 'Importazione terminata';
$strInUse = 'in uso';
$strIndex = 'Indice';
$strIndexHasBeenDropped = 'L\'indice %s è stato eliminato';
$strIndexName = 'Nome dell\'indice&nbsp;:';
$strIndexType = 'Tipo di indice&nbsp;:';
$strIndexes = 'Indici';
$strInnodbStat = 'Stato InnoDB';  
$strInsecureMySQL = 'Il file di configurazione in uso contiene impostazioni (root con nessuna password) che corrispondono ai privilegi dell\'account MySQL predefinito. Un server MySQL funzionante con queste impostazioni è aperto a intrusioni, e si dovrebbe realmente riparare a questa falla nella sicurezza.';
$strInsert = 'Inserisci';
$strInsertAsNewRow = 'Inserisci come nuova riga';
$strInsertNewRow = 'Inserisci una nuova riga';
$strInsertTextfiles = 'Inserisci un file di testo nella tabella';
$strInsertedRows = 'Righe inserite:';
$strInstructions = 'Istruzioni';
$strInvalidName = '"%s" è una parola riservata; non è possibile utilizzarla come nome di database/tabella/campo.';

$strJumpToDB = 'Passa al database &quot;%s&quot;.';
$strJustDelete = 'Cancella soltanto gli utenti dalle tabelle dei privilegi.';
$strJustDeleteDescr = 'Gli utenti &quot;cancellati&quot; saranno ancora in grado di accedere al servercome al solito finchè i privilegi non verraanno ricaricati.';

$strKeepPass = 'Non cambiare la password';
$strKeyname = 'Nome chiave';
$strKill = 'Rimuovi';

$strLaTeX = 'LaTeX';
$strLandscape = 'Orizzontale';
$strLength = 'Lunghezza';
$strLengthSet = 'Lunghezza/Set*';
$strLimitNumRows = 'record per pagina';
$strLineFeed = 'Fine riga: \\n';
$strLines = 'Record';
$strLinesTerminatedBy = 'Linee terminate da';
$strLinkNotFound = 'Link non trovato';
$strLinksTo = 'Collegamenti a';
$strLocalhost = 'Locale';
$strLocationTextfile = 'Percorso del file';
$strLogPassword = 'Password:';
$strLogUsername = 'Nome utente:';
$strLogin = 'Connetti';
$strLoginInformation = 'Informazioni di Login';
$strLogout = 'Disconnetti';

$strMIME_MIMEtype = 'tipo MIME';
$strMIME_available_mime = 'Tipi-MIME disponibili';
$strMIME_available_transform = 'Trasformazioni disponibili';
$strMIME_description = 'Descrizione';
$strMIME_file = 'Nome file';
$strMIME_nodescription = 'Nessuna descrizione è disponibile per questa trasformazione.<br />Prego, chiedere all\'autore cosa %s faccia.';
$strMIME_transformation = 'Trasformazione del Browser';
$strMIME_transformation_note = 'Per una lista di opzioni di trasformazione disponibili e le loro rispettive trasformazioni di tipi-MIME, cliccate su %strasformazione descrizioni%s';
$strMIME_transformation_options = 'Opzioni di Transformation';
$strMIME_transformation_options_note = 'Prego, immettere i valori per le opzioni di trasformazioneutilizzando questo formato: \'a\',\'b\',\'c\'...<br />Se c\'è la necessità di immettere un backslash ("\") o un apostrofo ("\'") tra questi valori, essi vanno backslashati (per es. \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'Tipi-MIME stampati in italics non hanno una funzione di trasformazione separata';
$strMissingBracket = 'Parentesi mancante';
$strModifications = 'Le modifiche sono state salvate';
$strModify = 'Modifica';
$strModifyIndexTopic = 'Modifica un indice';
$strMoreStatusVars = 'Più variabili di stato';
$strMoveTable = 'Sposta la tabella nel (database<b>.</b>tabella):';
$strMoveTableOK = 'La tabella %s è stata spostata in %s.';
$strMySQLCharset = 'Set di caratteri MySQL';
$strMySQLReloaded = 'MySQL riavviato.';
$strMySQLSaid = 'Messaggio di MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% in esecuzione su %pma_s2% come %pma_s3%';
$strMySQLShowProcess = 'Visualizza processi in esecuzione';
$strMySQLShowStatus = 'Visualizza informazioni di runtime di MySQL';
$strMySQLShowVars = 'Visualizza variabili di sistema di MySQL';

$strName = 'Nome';
$strNext = 'Prossimo';
$strNo = ' No ';
$strNoDatabases = 'Nessun database';
$strNoDatabasesSelected = 'Nessun database selezionato.';
$strNoDescription = 'nessuna Description';
$strNoDropDatabases = 'I comandi "DROP DATABASE" sono disabilitati.';
$strNoExplain = 'Non Spiegare SQL';
$strNoFrames = 'phpMyAdmin funziona meglio con browser che supportano frames';
$strNoIndex = 'Nessun indice definito!';
$strNoIndexPartsDefined = 'Nessuna parte di indice definita!';
$strNoModification = 'Nessun cambiamento';
$strNoOptions = 'Questo formato non ha opzioni';
$strNoPassword = 'Nessuna Password';
$strNoPhp = 'senza codice PHP';
$strNoPrivileges = 'Nessun Privilegio';
$strNoQuery = 'Nessuna query SQL!';
$strNoRights = 'Non hai i permessi per effettuare questa operazione!';
$strNoTablesFound = 'Non ci sono tabelle nel database.';
$strNoUsersFound = 'Nessun utente trovato.';
$strNoUsersSelected = 'Nessun utente selezionato.';
$strNoValidateSQL = 'Non Validare SQL';
$strNone = 'Nessuno';
$strNotNumber = 'Questo non è un numero!';
$strNotOK = 'non OK';
$strNotSet = '<b>%s</b> tabella non trovata o non settata in %s';
$strNotValidNumber = ' non è una riga valida!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s corrisponde/ono nella tabella <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totale:</b> <i>%s</i> corrispondenza/e';
$strNumTables = 'Tabelle';

$strOK = 'OK';
$strOftenQuotation = 'In genere da doppi apici (virgolette). OPZIONALE indica che solo i campi <I>char</I> e <I>varchar</I> devono essere delimitati dal carattere indicato.';
$strOperations = 'Operazioni';
$strOptimizeTable = 'Ottimizza tabella';
$strOptionalControls = 'Opzionale. Questo carattere controlla come scrivere o leggere i caratteri speciali.';
$strOptionally = 'OPZIONALE';
$strOptions = 'Opzioni';
$strOr = 'Oppure';
$strOverhead = 'In eccesso';

$strPHP40203 = 'Si sta utilizzando PHP 4.2.3, che presenta un serio bug con le stringhe multi-byte (mbstring). Vedi report PHP 19404. Questa versione di PHP non è raccomandata per l\'utilizzo con phpMyAdmin.';
$strPHPVersion = 'Versione PHP';
$strPageNumber = 'Numero pagina:';
$strPartialText = 'Testo parziale';
$strPassword = 'Password';
$strPasswordChanged = 'La password per l\'utente %s è cambiata con successo.';
$strPasswordEmpty = 'La password è vuota!';
$strPasswordNotSame = 'La password non coincide!';
$strPdfDbSchema = 'Schema del database "%s" - Pagina %s';
$strPdfInvalidPageNum = 'Pagina del PDF non definita!';
$strPdfInvalidTblName = 'La tabella "%s" non esiste!';
$strPdfNoTables = 'Nessuna Tabella';
$strPerHour = 'all\'ora';
$strPerMinute = 'al minuto';
$strPerSecond = 'al secondo';
$strPhp = 'Crea il codice PHP';
$strPmaDocumentation = 'Documentazione di phpMyAdmin';
$strPmaUriError = 'La direttiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEVE essere impostata nel file di configurazione!';
$strPortrait = 'Verticale';
$strPos1 = 'Inizio';
$strPrevious = 'Precedente';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Chiave primaria';
$strPrimaryKeyHasBeenDropped = 'La chiave primaria è stata eliminata';
$strPrimaryKeyName = 'Il nome della chiave primaria deve essere... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>deve</b> essere il nome di, e <b>solo di</b>, una chiave primaria!)';
$strPrint = 'Stampa';
$strPrintView = 'Visualizza per stampa';
$strPrivDescAllPrivileges = 'Comprende tutti i privilegi tranne GRANT.';
$strPrivDescAlter = 'Permette di alterare la struttura di tabelle esistenti.';
$strPrivDescCreateDb = 'Permette di creare nuove tabelle e nuovi databases.';
$strPrivDescCreateTbl = 'Permette di creare nuove tabelle.';
$strPrivDescCreateTmpTable = 'Permette di creare tabelle temporanee.';
$strPrivDescDelete = 'Permette di cancellare dati.';
$strPrivDescDropDb = 'Permette di eliminare databases e tabelle.';
$strPrivDescDropTbl = 'Permette di eliminare tabelle.';
$strPrivDescExecute = 'Permette di eseguire procedure memorizzate; Non ha effetto in questa versione di MySQL.';
$strPrivDescFile = 'Permette di importare dati da e esportare dati in files.';
$strPrivDescGrant = 'Permette di aggiungere utenti e privilegi senza ricaricare le tabelle dei privilegi.';
$strPrivDescIndex = 'Permette di creare ed eliminare gli indici.';
$strPrivDescInsert = 'Permette di inserire e sovrascrivere dati.';
$strPrivDescLockTables = 'Permette di bloccare le tabelle per il thread corrente.';
$strPrivDescMaxConnections = 'Limita il numero di nuove connessioni che un utente può aprire in un\'ora.';
$strPrivDescMaxQuestions = 'Limita il numero di queries che un utente può mandare al server in un\'ora.';
$strPrivDescMaxUpdates = 'Limita il numero di comandi che possono cambiare una tabella o un database che un utente può eseguire in un\'ora.';
$strPrivDescProcess3 = 'Permette di killare i processi di altri utenti.';
$strPrivDescProcess4 = 'Permette di vedere le queries complete nella lista dei processi.';
$strPrivDescReferences = 'Non ha alcun effetto in questa versione di MySQL.';
$strPrivDescReload = 'Permette di ricaricare i parametri del server e di resettare la cache del server.';
$strPrivDescReplClient = 'Accorda il diritto ad un utente di domandare dove sono i masters/slaves.';
$strPrivDescReplSlave = 'Necessario per la replicazione degli slaves.';
$strPrivDescSelect = 'Permette di leggere i dati.';
$strPrivDescShowDb = 'Accorda l\'accesso alla lista completa dei databases.';
$strPrivDescShutdown = 'Permette di chiudere il server.';
$strPrivDescSuper = 'Permette altre connessioni, anche se è stato raggiunto il massimo numero di connessioni; Necessario per molte operazioni di amministrazione come il settaggio di variabili globali o la cancellazione dei threads di altri utenti.';
$strPrivDescUpdate = 'Permette di cambiare i dati.';
$strPrivDescUsage = 'Nessun privilegio.';
$strPrivileges = 'Privilegi';
$strPrivilegesReloaded = 'I privilegi sono stati ricaricati con successo.';
$strProcesslist = 'Lista Processi';
$strProperties = 'Proprietà';
$strPutColNames = 'Mette i nomi delle colonne alla prima riga';

$strQBE = 'Query da esempio';
$strQBEDel = 'Cancella';
$strQBEIns = 'Aggiungi';
$strQueryFrame = 'Finestra della Query';
$strQueryFrameDebug = 'Informazioni di Debug';
$strQueryFrameDebugBox = 'Variabili attive per il form della query:\nDB: %s\nTabella: %s\nServer: %s\n\nLe variabili correnti per il form della query:\nDB: %s\nTabella: %s\nServer: %s\n\nLocazione dell\'Opener: %s\nLocazione del Frameset: %s.';
$strQueryOnDb = 'SQL-query sul database <b>%s</b>:';
$strQuerySQLHistory = 'Storico dell\'SQL';
$strQueryStatistics = '<b>Statistiche delle Query</b>: Dal suo avvio, sono state inviate al server %s queries.';
$strQueryTime = 'La query ha impiegato %01.4f sec';
$strQueryType = 'Tipo di Query';

$strReType = 'Reinserisci';
$strReceived = 'Ricevuti';
$strRecords = 'Record';
$strReferentialIntegrity = 'Controlla l\'integrità delle referenze:';
$strRelationNotWorking = 'Le caratteristiche aggiuntive sono state disattivate per funzionare con le tabelle linkate. Per scoprire perchè clicca %squi%s.';
$strRelationView = 'Vedi relazioni';
$strRelationalSchema = 'Schema relazionale';
$strReloadFailed = 'Riavvio di MySQL fallito.';
$strReloadMySQL = 'Riavvia MySQL';
$strReloadingThePrivileges = 'Caricamento dei privilegi in corso';
$strRememberReload = 'Ricorda di riavviare MySQL.';
$strRemoveSelectedUsers = 'Rimuove gli utenti selezionati';
$strRenameTable = 'Rinomina la tabella in';
$strRenameTableOK = 'La tabella %s è stata rinominata %s';
$strRepairTable = 'Ripara tabella';
$strReplace = 'Sostituisci';
$strReplaceTable = 'Sostituisci i dati della tabella col file';
$strReset = 'Riavvia';
$strResourceLimits = 'Limiti di risorse';
$strRevoke = 'Revoca';
$strRevokeAndDelete = 'Revoca tutti i privilegi attivi agli utenti e dopo li cancella.';
$strRevokeAndDeleteDescr = 'Gli utenti UTILIZZERANNO comunque il privilegio finchè i privilegi non saranno ricaricati.';
$strRevokeGrant = 'Revoca permessi';
$strRevokeGrantMessage = 'Hai revocato i privilegi di permesso per %s';
$strRevokeMessage = 'Hai revocato i privilegi per %s';
$strRevokePriv = 'Revoca privilegi';
$strRowLength = 'Lunghezza riga';
$strRowSize = 'Dimensione riga';
$strRows = 'Righe';
$strRowsFrom = 'righe a partire da';
$strRowsModeFlippedHorizontal = 'orizzontale (headers ruotati)';
$strRowsModeHorizontal = ' orizzontale ';
$strRowsModeOptions = ' in modalità %s e ripeti gli headers dopo %s celle ';
$strRowsModeVertical = ' verticale ';
$strRowsStatistic = 'Statistiche righe';
$strRunQuery = 'Invia Query';
$strRunSQLQuery = 'Esegui la/e query SQL sul database %s';
$strRunning = 'in esecuzione su %s';

$strSQL = 'SQL';
$strSQLOptions = 'Opzioni SQL';
$strSQLParserBugMessage = 'C\'è la possibilità che ci sia un bug nel parser SQL. Per favore, esaminate la query accuratamente, e controllate che le virgolette siano corrette e non sbagliate. Altre possibili cause d\'errori possono essere che si stia cercando di uploadare un file binario al di fuori di un\'area di testo virgolettata. Si può anche provare la query MySQL dalla riga di comando di MySQL. L\'errore qui sotto restituito dal server MySQL, se ce n\'è uno, può anche aiutare nella diagnostica del problema. Se ci sono ancora problemi, o se il parser SQL di phpMyAdmin sbaglia quando invece l\'interfaccia a riga di comando non mostra problemi, si può ridurre la query SQL in ingresso alla singola query che causa problemi, e inviare un bug report con i dati riportati nella sezione CUT qui sotto:';
$strSQLParserUserError = 'Pare che ci sia un errore nella query SQL immessa. L\'errore del server MySQL mostrato qui sotto, se c\'è, può anche aiutare nella risoluzione del problema';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Risultato SQL';
$strSQPBugInvalidIdentifer = 'Identificatore Non Valido';
$strSQPBugUnclosedQuote = 'Virgolette Non Chiuse';
$strSQPBugUnknownPunctuation = 'Stringa di Punctuation Sconosciuta';
$strSave = 'Salva';
$strScaleFactorSmall = 'Il fattore di scala è troppo piccolo per riempire lo schema nella pagina';
$strSearch = 'Cerca';
$strSearchFormTitle = 'Cerca nel database';
$strSearchInTables = 'Nella/e tabella/e:';
$strSearchNeedle = 'parola/e o valore/i da cercare (carattere jolly: "%"):';
$strSearchOption1 = 'almeno una delle parole';
$strSearchOption2 = 'tutte le parole';
$strSearchOption3 = 'la frase esatta';
$strSearchOption4 = 'come espressione regolare';
$strSearchResultsFor = 'Cerca i risultati per "<i>%s</i>" %s:';
$strSearchType = 'Trova:';
$strSelect = 'Seleziona';
$strSelectADb = 'Prego, selezionare un database';
$strSelectAll = 'Seleziona Tutto';
$strSelectFields = 'Seleziona campi (almeno uno):';
$strSelectNumRows = 'nella query';
$strSelectTables = 'Seleziona Tables';
$strSend = 'Salva con nome...';
$strSent = 'Spediti';
$strServer = 'Server %s';
$strServerChoice = 'Scelta del server';
$strServerStatus = 'Informazioni di Runtime';
$strServerStatusUptime = 'Questo server MySQL sta girando da %s. E\' stato avviato il %s.';
$strServerTabProcesslist = 'Processi';
$strServerTabVariables = 'Variabili';
$strServerTrafficNotes = '<b>Traffico del server</b>: Queste tabelle mostrano le statistiche del traffico di retedi questo server MySQL dal momento del suo avvio.';
$strServerVars = 'Variabili e parametri del Server';
$strServerVersion = 'Versione MySQL';
$strSessionValue = 'Valore sessione';
$strSetEnumVal = 'Se il tipo di campo è "enum" o "set", immettere i valori usando il formato: \'a\',\'b\',\'c\'...<br />Se comunque dovete mettere dei backslashes ("\") o dei single quote ("\'") davanti a questi valori, backslashateli (per esempio \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tutti';
$strShowColor = 'Mostra il colore';
$strShowCols = 'Mostra le colonne';
$strShowDatadictAs = 'Formato del Data Dictionary';
$strShowGrid = 'Mostra la griglia';
$strShowPHPInfo = 'Mostra le info sul PHP';
$strShowTableDimension = 'Mostra la dimensione delle tabelle';
$strShowTables = 'Mostra le tabelle';
$strShowThisQuery = 'Mostra questa query di nuovo';
$strShowingRecords = 'Visualizzazione record ';
$strSingly = '(singolarmente)';
$strSize = 'Dimensione';
$strSort = 'Ordinamento';
$strSpaceUsage = 'Spazio utilizzato';
$strSplitWordsWithSpace = 'Le parole sono spezzate sulle spaziature (" ").';
$strStatCheckTime = 'Ultimo controllo';
$strStatCreateTime = 'Creazione';
$strStatUpdateTime = 'Ultimo cambiamento';
$strStatement = 'Istruzioni';
$strStatus = 'Stato';
$strStrucCSV = 'dati CSV';
$strStrucData = 'Struttura e dati';
$strStrucDrop = 'Aggiungi \'drop table\'';
$strStrucExcelCSV = 'CSV per dati Ms Excel';
$strStrucOnly = 'Solo struttura';
$strStructPropose = 'Proponi la struttura della tabella';
$strStructure = 'Struttura';
$strSubmit = 'Invia';
$strSuccess = 'La query è stata eseguita con successo';
$strSum = 'Totali';

$strTable = 'Tabella';
$strTableComments = 'Commenti sulla tabella';
$strTableEmpty = 'Il nome della tabella è vuoto!';
$strTableHasBeenDropped = 'La tabella %s è stata eliminata';
$strTableHasBeenEmptied = 'La tabella %s è stata svuotata';
$strTableHasBeenFlushed = 'La tabella %s è stata inizializzata';
$strTableMaintenance = 'Amministrazione tabella';
$strTableOfContents = 'Tabella dei contenuti';
$strTableStructure = 'Struttura della tabella';
$strTableType = 'Tipo tabella';
$strTables = '%s tabella(e)';
$strTblPrivileges = 'Privilegi relativi alle tabelle';
$strTextAreaLength = ' A causa della sua lunghezza,<br /> questo campo non può essere modificato ';
$strTheContent = 'Il contenuto del file è stato inserito.';
$strTheContents = 'Il contenuto del file sostituisce le righe della tabella con la stessa chiave primaria o chiave unica.';
$strTheTerminator = 'Il carattere terminatore dei campi.';
$strThisHost = 'Questo Host';
$strThisNotDirectory = 'Questa non è una directory';
$strThreadSuccessfullyKilled = 'Il thread %s è stato terminato con successo.';
$strTime = 'Tempo';
$strTotal = 'Totali';
$strTotalUC = 'Totale';
$strTraffic = 'Traffico';
$strTransformation_image_jpeg__inline = 'Mostra un thumbnalil cliccabile; opzioni: larghezza,altezza in pixel (mantiere la proporzione iniziale)';  
$strTransformation_image_jpeg__link = 'Mostra un link a questa immagine (download blob diretto, i.e.).';
$strTransformation_image_png__inline = 'Vedi immagine/jpeg: inline';  
$strTransformation_text_plain__formatted = 'Preserva l\'originale formattazione del campo. Nessun Escaping viene applicato.';
$strTransformation_text_plain__unformatted = 'Mostra il codice HTML come entità HTML. Nessuna formattazione HTML viene applicata.';
$strType = 'Tipo';

$strUncheckAll = 'Deseleziona tutti';
$strUnique = 'Unica';
$strUnselectAll = 'Deseleziona Tutto';
$strUpdatePrivMessage = 'Hai aggiornato i permessi per %s.';
$strUpdateProfile = 'Aggiorna profilo:';
$strUpdateProfileMessage = 'Il profilo è stato aggiornato.';
$strUpdateQuery = 'Aggiorna Query';
$strUsage = 'Utilizzo';
$strUseBackquotes = 'Usa i backquotes con i nomi delle tabelle e dei campi';
$strUseTables = 'Utilizza tabelle';
$strUseTextField = 'Utilizza campo text';
$strUser = 'Utente';
$strUserAlreadyExists = 'L\'utente %s esiste già!';
$strUserEmpty = 'Il nome utente è vuoto!';
$strUserName = 'Nome utente';
$strUserNotFound = 'L\'utente selezionato non è stato trovato nella tabella dei privilegi.';
$strUserOverview = 'Vista d\'insieme dell\'utente';
$strUsers = 'Utenti';
$strUsersDeleted = 'Gli utenti selezionati sono stati cancellati con successo.';
$strUsersHavingAccessToDb = 'Utenti che hanno accesso a &quot;%s&quot;';

$strValidateSQL = 'Valida SQL';
$strValidatorError = 'L\' SQL validator non può essere inizializzato. Prego controllare di avere installato le estensioni php necessarie come descritto nella %sdocumentazione%s.';
$strValue = 'Valore';
$strVar = 'Variabile';
$strViewDump = 'Visualizza dump (schema) della tabella';
$strViewDumpDB = 'Visualizza dump (schema) del database';

$strWebServerUploadDirectory = 'directory di upload del web-server';
$strWebServerUploadDirectoryError = 'La directory impostata per l\'upload non può essere trovata';
$strWelcome = 'Benvenuto in %s';
$strWildcard = 'wildcard';
$strWithChecked = 'Se selezionati:';
$strWritingCommentNotPossible = 'Impossibile scrivere il commento';
$strWritingRelationNotPossible = 'Impossibile scrivere la Relazione';
$strWrongUser = 'Nome utente o password errati. Accesso negato.';

$strXML = 'XML';

$strYes = ' Si ';

$strZeroRemovesTheLimit = 'N.B.: 0 (zero) significa nessun limite.';
$strZip = '"compresso con zip"';
// To translate

$strAutomaticLayout = 'Automatic layout';  //to translate

$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate

$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate 

$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate

$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
?>
