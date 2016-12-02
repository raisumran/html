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
  'DEF_CREATE_LOG' => 'Dokumentas sukurtas',
  'ERR_DELETE_CONFIRM' => 'Ar Jūs norite ištrinti šią dokumento versiją?',
  'ERR_DELETE_LATEST_VERSION' => 'Jums neleidžiama trinti naujausios dokumento versijos.',
  'ERR_DOC_ACTIVE_DATE' => 'Paskelbimo data',
  'ERR_DOC_EXP_DATE' => 'Pasibaigimo data',
  'ERR_DOC_NAME' => 'Dokumento pavadinimas',
  'ERR_DOC_VERSION' => 'Dokumento versija',
  'ERR_FILENAME' => 'Failo pavadinimas',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Vartotojas bandė pasiekti klaidingą išorinę API ({0})',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Prisijungimo patikra nepavyko išoriniam API ({0})',
  'ERR_MISSING_FILE' => 'Šiam dokumentui trūksta failo greičiausiai dėl įvykusios klaidos įkėlimo metu. Prašome pabandyti užkelti failą dar kartą arba susisiekite su IT administratoriumi.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klientai',
  'LBL_ACTIVE_DATE' => 'Paskelbimo data',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Klaidos',
  'LBL_CASES_SUBPANEL_TITLE' => 'Aptarnavimai',
  'LBL_CATEGORY' => 'Kategorija',
  'LBL_CATEGORY_VALUE' => 'Kategorija:',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nenurodyta',
  'LBL_CHANGE_LOG' => 'Pakeitimų istorija',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktai',
  'LBL_CONTRACTS' => 'Sutartys',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Susijusios sutartys',
  'LBL_CONTRACT_NAME' => 'Sutarties pavadinimas:',
  'LBL_CONTRACT_STATUS' => 'Sutarties statusas:',
  'LBL_CREATED' => 'Sukūrė',
  'LBL_CREATED_BY' => 'Sukūrė',
  'LBL_CREATED_USER' => 'Sukūrė',
  'LBL_DATE_ENTERED' => 'Sukurta',
  'LBL_DATE_MODIFIED' => 'Redaguota',
  'LBL_DELETED' => 'Ištrintas',
  'LBL_DESCRIPTION' => 'Aprašymas',
  'LBL_DET_IS_TEMPLATE' => 'Šablonas? :',
  'LBL_DET_RELATED_DOCUMENT' => 'Susijęs dokumentas:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Susijusi dokumento versija:',
  'LBL_DET_TEMPLATE_TYPE' => 'Dokumento tipas:',
  'LBL_DOCUMENT' => 'Susijęs dokumentas',
  'LBL_DOCUMENT_ID' => 'Dokumento Id',
  'LBL_DOCUMENT_INFORMATION' => 'Dokumento informacija',
  'LBL_DOCUMENT_NAME' => 'Dokumento pavadinimas',
  'LBL_DOCUMENT_REVISION_ID' => 'Dokumento versijos Id',
  'LBL_DOC_ACTIVE_DATE' => 'Paskelbimo data:',
  'LBL_DOC_DESCRIPTION' => 'Aprašymas:',
  'LBL_DOC_EXP_DATE' => 'Pasibaigimo data:',
  'LBL_DOC_ID' => 'Dokumento šaltinio ID',
  'LBL_DOC_NAME' => 'Dokumento pavadinimas:',
  'LBL_DOC_REV_HEADER' => 'Dokumento versijos',
  'LBL_DOC_STATUS' => 'Statusas:',
  'LBL_DOC_STATUS_ID' => 'Statuso Id:',
  'LBL_DOC_TYPE' => 'Šaltinis',
  'LBL_DOC_TYPE_POPUP' => 'Pasirinkite vietą į kur dokumentas bus užkrautas<br>ir iš kur galėsite jį pasiekti.',
  'LBL_DOC_URL' => 'Dokumento šaltinio nuoroda',
  'LBL_DOC_VERSION' => 'Versija:',
  'LBL_DOWNNLOAD_FILE' => 'Nusikrauti failą',
  'LBL_EXPIRATION_DATE' => 'Pasibaigimo data',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Rodoma 20 vėliausiai redaguotų failų. Naudokite paiešką norėdami surasti kitus.',
  'LBL_FILENAME' => 'Failo pavadinimas:',
  'LBL_FILE_EXTENSION' => 'Failo išplėtimas',
  'LBL_FILE_UPLOAD' => 'Failas:',
  'LBL_FILE_URL' => 'Failo nuoroda',
  'LBL_HOMEPAGE_TITLE' => 'Mano dokumentai',
  'LBL_IS_TEMPLATE' => 'Yra Šablonas',
  'LBL_LASTEST_REVISION_NAME' => 'Naujausios versijos pavadinimas:',
  'LBL_LAST_REV_CREATE_DATE' => 'Naujausia versija sukurta',
  'LBL_LAST_REV_CREATOR' => 'Versiją sukūrė:',
  'LBL_LAST_REV_DATE' => 'Versijos data:',
  'LBL_LAST_REV_MIME_TYPE' => 'Paskutinės versijos MIME tipas',
  'LBL_LATEST_REVISION' => 'Naujausia versija',
  'LBL_LATEST_REVISION_ID' => 'Paskutinės versijos id',
  'LBL_LINKED_ID' => 'Susijęs id',
  'LBL_LIST_ACTIVE_DATE' => 'Paskelbimo data',
  'LBL_LIST_CATEGORY' => 'Kategorija',
  'LBL_LIST_DOCUMENT' => 'Dokumentas',
  'LBL_LIST_DOCUMENT_NAME' => 'Dokumento pavadinimas',
  'LBL_LIST_DOC_TYPE' => 'Šaltinis',
  'LBL_LIST_DOWNLOAD' => 'Nusikrauti',
  'LBL_LIST_EXP_DATE' => 'Pasibaigimo data',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Failo pavadinimas',
  'LBL_LIST_FILENAME' => 'Failo pavadinimas',
  'LBL_LIST_FORM_TITLE' => 'Dokumentų sąrašas',
  'LBL_LIST_IS_TEMPLATE' => 'Šablonas?',
  'LBL_LIST_LAST_REV_CREATOR' => 'Paskelbė',
  'LBL_LIST_LAST_REV_DATE' => 'Versijos data',
  'LBL_LIST_LATEST_REVISION' => 'Naujausia versija',
  'LBL_LIST_REVISION' => 'Versija',
  'LBL_LIST_SELECTED_REVISION' => 'Pasirinkta versija',
  'LBL_LIST_STATUS' => 'Statusas',
  'LBL_LIST_SUBCATEGORY' => 'Subkategorija',
  'LBL_LIST_TEMPLATE_TYPE' => 'Dokumento tipas',
  'LBL_LIST_VIEW_DOCUMENT' => 'Žiūrėti',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Laiškų apjungimo šablonas:',
  'LBL_MIME' => 'Mime tipas',
  'LBL_MODIFIED' => 'Redaguotojo id',
  'LBL_MODIFIED_USER' => 'Redagavo',
  'LBL_MODULE_NAME' => 'Dokumentai',
  'LBL_MODULE_NAME_SINGULAR' => 'Dokumentas',
  'LBL_MODULE_TITLE' => 'Dokumentai: Pradžia',
  'LBL_NAME' => 'Dokumento pavadinimas',
  'LBL_NEW_FORM_TITLE' => 'Naujas dokumentas',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Pardavimai',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Pasiūlymai',
  'LBL_RELATED_DOCUMENT_ID' => 'Susijusio dokumento Id',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Susijusio dokumento versijos Id',
  'LBL_REVISION' => 'Versija',
  'LBL_REVISIONS' => 'Versijos',
  'LBL_REVISIONS_PANEL' => 'Versija išsamiau',
  'LBL_REVISIONS_SUBPANEL' => 'Versijos',
  'LBL_REVISION_NAME' => 'Versijos Nr.',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Dokumento pavadinimas',
  'LBL_SEARCH_FORM_TITLE' => 'Dokumentų paieška',
  'LBL_SELECTED_REVISION_FILENAME' => 'Pasirinktos versijos failo pavadinimas',
  'LBL_SELECTED_REVISION_ID' => 'Pasirinktos versijos ID',
  'LBL_SELECTED_REVISION_NAME' => 'Pasirinktos versijos pavadinimas:',
  'LBL_SF_ACTIVE_DATE' => 'Paskelbimo data:',
  'LBL_SF_CATEGORY' => 'Kategorija:',
  'LBL_SF_DOCUMENT' => 'Dokumento pavadinimas:',
  'LBL_SF_EXP_DATE' => 'Pasibaigimo data:',
  'LBL_SF_SUBCATEGORY' => 'Subkategorija:',
  'LBL_STATUS' => 'Statusas',
  'LBL_SUBCATEGORY' => 'Subkategorija',
  'LBL_SUBCATEGORY_VALUE' => 'Subkategorija:',
  'LBL_TEAM' => 'Komanda:',
  'LBL_TEMPLATE_TYPE' => 'Dokumento tipas',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversions',
  'LBL_TREE_TITLE' => 'Dokumentai',
  'LNK_DOCUMENT_LIST' => 'Dokumentų sąrašas',
  'LNK_NEW_DOCUMENT' => 'Sukurti dokumentą',
  'LNK_NEW_MAIL_MERGE' => 'Laiškų apjungimas',
);

