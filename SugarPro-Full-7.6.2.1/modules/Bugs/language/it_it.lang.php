<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
	

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Per eliminare il bug deve essere specificato il numero del record.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_BUG' => 'Bug:',
  'LBL_BUG_INFORMATION' => 'Informazioni Bug',
  'LBL_BUG_NUMBER' => 'Numero Bug:',
  'LBL_BUG_SUBJECT' => 'Oggetto Bug:',
  'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
  'LBL_CONTACT_BUG_TITLE' => 'Contatto-Bug:',
  'LBL_CONTACT_NAME' => 'Nome Contatto:',
  'LBL_CONTACT_ROLE' => 'Ruolo:',
  'LBL_CREATED_BY' => 'Creato da:',
  'LBL_DATE_CREATED' => 'Data creazione:',
  'LBL_DATE_LAST_MODIFIED' => 'Data Modifica:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bug Tracker',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Utente Assegnato',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nome Utente Assegnato',
  'LBL_EXPORT_CREATED_BY' => 'Creato da ID',
  'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Risolto nella Release',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificato da ID',
  'LBL_FIXED_IN_RELEASE' => 'Risolto nella Release:',
  'LBL_FOUND_IN_RELEASE' => 'Trovato nella Release:',
  'LBL_FOUND_IN_RELEASE_NAME' => 'Trovato nella Release',
  'LBL_HELP_CREATE' => 'Il modulo {{plural_module_name}} è utilizzato per tracciare e gestire problemi legati ai prodotti, comunemente indicati in {{plural_module_name}} o difetti, sia trovati internamente che riportati dai clienti. Per creare un {{module_name}}: 1. Fornire i valori desiderati per i campi. - I campi segnati come "Obbligatorio" devono essere compilati prima del salvataggio. - Cliccare "Mostra più" per visualizzare ulteriori campi se necessario. 2. Cliccare "Salva" per finalizzare il nuovo record e tornare alla pagina precedente. - Scegliere "Salva e Visualizza" per aprire la vista elenco del nuovo {{module_name}}. - Scegliere "Salva e crea nuovo" per creare immediatamente un altro nuovo {{module_name}}.',
  'LBL_HELP_RECORD' => 'Il modulo {{plural_module_name}} è utilizzato per tracciare e gestire problemi legati ai prodotti, comunemente indicati in {{plural_module_name}} o difetti, sia trovati internamente che riportati dai clienti. - Modificare i campi di questi records cliccando il singolo campo o il pulsante Modifica. - Visualizza o modifica i link agli altri records nei sottopannelli agendo sul pulsante "Visualizza Dati" in basso a sinistra. - Creare e visualizzare i commenti degli utenti e la cronologia delle modifiche dei records nel modulo {{activitystream_singular_module}} agendo sul pulsante "Activity Stream" in basso a sinistra. - Seguire o impostare come preferito questo record usando le icone alla destra del nome del record. - Azioni aggiuntive sono disponibili nel menù a tendina delle Azioni alla destra del pulsante Modifica.',
  'LBL_HELP_RECORDS' => 'Il modulo {{plural_module_name}} è utilizzato per tracciare e gestire problemi legati ai prodotti, comunemente indicati in {{plural_module_name}} o difetti, sia trovati internamente che riportati dai clienti. I {{plural_module_name}} possono essere ulteriormente smistati e risolti in una release. Il modulo {{plural_module_name}} fornisce agli utenti un modo rapido per rivedere tutti i dettagli del {{module_name}} e il processo utilizzato per rettificarlo. Una volta che un {{module_name}} è creato o registrato, puoi visualizzare e modificare le informazioni pertinenti attraverso la vista elenco del {{module_name}} stesso. Ogni {{module_name}} potrebbe essere relazionato ad altri record di Sugar come {{calls_module}}, {{contacts_module}}, {{cases_module}} e molti altri.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
  'LBL_INVITEE' => 'Contatti',
  'LBL_LIST_ACCOUNT_NAME' => 'Azienda',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_LIST_CONTACT_NAME' => 'Nome contatto',
  'LBL_LIST_EMAIL_ADDRESS' => 'Indirizzo Email',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Risolto nella Release',
  'LBL_LIST_FORM_TITLE' => 'Elenco Bug',
  'LBL_LIST_LAST_MODIFIED' => 'Ultima modifica',
  'LBL_LIST_MY_BUGS' => 'I miei Bug',
  'LBL_LIST_NUMBER' => 'Numero.',
  'LBL_LIST_PHONE' => 'Telefono',
  'LBL_LIST_PRIORITY' => 'Priorità',
  'LBL_LIST_RELEASE' => 'Release',
  'LBL_LIST_RESOLUTION' => 'Soluzione',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_SUBJECT' => 'Oggetto',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_MODIFIED_BY' => 'Ultima modifica fatta da:',
  'LBL_MODULE_ID' => 'Bug',
  'LBL_MODULE_NAME' => 'Bug',
  'LBL_MODULE_NAME_SINGULAR' => 'Bug',
  'LBL_MODULE_TITLE' => 'Bug Tracker: Home',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Bug',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Note',
  'LBL_NUMBER' => 'Numero:',
  'LBL_PORTAL_TOUR_RECORDS_CREATE' => 'Se hai trovato un nuovo Bug che vuoi segnalare, puoi cliccare qui per segnalare un nuovo Bug.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER' => 'Puoi filtrare la lista dei Bugs fornendo i termini di ricerca.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER_EXAMPLE' => 'Per esempio, potresti usarlo per trovare un Bug che è stato segnalato in precedenza.',
  'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'Il modulo Bugs serve a visualizzare e segnalare bugs. Usa le frecce sotto per effettuare un tour veloce.',
  'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'Questa pagina mostra la lista di Bugs esistenti pubblicati.',
  'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'Cliccando quì verrai riportato sempre su questa vista.',
  'LBL_PORTAL_VIEWABLE' => 'Portale visibile',
  'LBL_PRIORITY' => 'Priorità:',
  'LBL_PRODUCT_CATEGORY' => 'Categoria:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
  'LBL_RELEASE' => 'Release:',
  'LBL_RESOLUTION' => 'Soluzione:',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Bug',
  'LBL_SHOW_IN_PORTAL' => 'Mostralo nel Portale',
  'LBL_SHOW_MORE' => 'Mostra Più Bugs',
  'LBL_SOURCE' => 'Fonte:',
  'LBL_STATUS' => 'Stato:',
  'LBL_SUBJECT' => 'Oggetto:',
  'LBL_SYSTEM_ID' => 'ID Sistema',
  'LBL_TYPE' => 'Tipo:',
  'LBL_WORK_LOG' => 'Registro Operazioni:',
  'LNK_BUG_LIST' => 'Bug',
  'LNK_BUG_REPORTS' => 'Report dei Bug',
  'LNK_CREATE' => 'Nuovo Bug',
  'LNK_CREATE_WHEN_EMPTY' => 'Crea un bug adesso.',
  'LNK_IMPORT_BUGS' => 'Importa Bug',
  'LNK_NEW_BUG' => 'Nuovo Bug',
  'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo contatto da questo Bug ?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo Bug dall´azienda ?',
  'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler rimuovere questo contatto dal Bug ?',
);

