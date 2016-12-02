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
  'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Opravdu chcete odstranit tento účet z tohoto projektu?',
  'ERR_DELETE_RECORD' => 'Pro vymazání zaměstnance musíte specifikovat číslo záznamu.',
  'LBL_ACCOUNT' => 'Účet:',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Společnosti',
  'LBL_ACCOUNT_INFORMATION' => 'Informace o společnosti',
  'LBL_ACCOUNT_NAME' => 'Název společnosti:',
  'LBL_ACCOUNT_TYPE' => 'Typ společnosti',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
  'LBL_ADDRESS_INFORMATION' => 'Adresa',
  'LBL_ANNUAL_REVENUE' => 'Roční tržba:',
  'LBL_ANY_ADDRESS' => 'Ostatní adresa:',
  'LBL_ANY_EMAIL' => 'Email:',
  'LBL_ANY_PHONE' => 'Telefon:',
  'LBL_ASSIGNED_TO_ID' => 'Zodpovědný uživatel:',
  'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno (komu):',
  'LBL_ASSIGNED_USER_NAME' => 'Zodpovědný uživatel:',
  'LBL_BILLING_ADDRESS' => 'Fakturační adresa:',
  'LBL_BILLING_ADDRESS_CITY' => 'Město:',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'Země:',
  'LBL_BILLING_ADDRESS_POSTALCODE' => 'PSČ:',
  'LBL_BILLING_ADDRESS_STATE' => 'Stát:',
  'LBL_BILLING_ADDRESS_STREET' => 'Ulice:',
  'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Address Street 2',
  'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Address Street 3',
  'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Address Street 4',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
  'LBL_BUG_FORM_TITLE' => 'Společnosti',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Volání',
  'LBL_CAMPAIGNS' => 'Kampaně',
  'LBL_CAMPAIGN_ID' => 'ID kampaně',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Log kampaně',
  'LBL_CASES_SUBPANEL_TITLE' => 'Případy',
  'LBL_CHARTS' => 'Grafy',
  'LBL_CITY' => 'Město:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Přiřazené kontaktní email. adresy',
  'LBL_CONTRACTS' => 'Smlouvy',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Smlouvy',
  'LBL_COPY' => 'Kopírovat',
  'LBL_COUNTRY' => 'Země:',
  'LBL_CREATED_ID' => 'Vytvořeno uživatelem ID',
  'LBL_DATE_ENTERED' => 'Datum zadání:',
  'LBL_DATE_MODIFIED' => 'Datum změny:',
  'LBL_DEFAULT' => 'Náhledy',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Společnosti',
  'LBL_DESCRIPTION' => 'Popis:',
  'LBL_DESCRIPTION_INFORMATION' => 'Popis',
  'LBL_DNB_BAL_PREVIEW' => 'Náhled smlouvy',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
  'LBL_DUNS_NUM' => 'DUNS:',
  'LBL_DUPLICATE' => 'Možný duplicitní účet',
  'LBL_EMAIL' => 'Email:',
  'LBL_EMAIL_ADDRESSES' => 'Emailové adresy',
  'LBL_EMAIL_OPT_OUT' => 'Odhlášení z emailingu:',
  'LBL_EMPLOYEES' => 'Zaměstnanci:',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Přiřazený uživatel',
  'LBL_FAX' => 'Fax:',
  'LBL_FILENAME' => 'Příloha',
  'LBL_FILTER_ACCOUNTS_REPORTS' => 'Reporty společností',
  'LBL_HELP_CREATE' => 'Modul Společnosti obsahuje firmy, se kterými má vaše společnost nějaký vztah a je obecně chápán jako centrum pro správu a analýzu vašich obchodních interakcí s každým zákazníkem.

K vytvoření poznámky:
1. Vyplňte hodnoty do polí dle potřeby.
 - Pole označená jako "požadovaná" musí být vyplněna před uložením.
 - Případně klikněte na "Zobrazit více" pro odhalení dalších polí.
2. Klikněte na "Uložit" k dokončení nového záznamu a návratu na předchozí stránku.
 - Vyberte "Uložit a zobrazit" k otevření nové společnosti v pohledu na záznam.
 - Vyberte "Uložit a vytvořit novou" k bezprostřednímu vytvoření další nové společnosti.',
  'LBL_HELP_RECORD' => 'Modul Společnosti obsahuje firmy, se kterými má vaše společnost nějaký vztah a je obecně chápán jako centrum pro správu a analýzu vašich obchodních interakcí s každým zákazníkem.

- Upravte pole tohoto záznamu kliknutím na jednotlivá pole nebo na tlačítko Upravit.
- Zobrazte nebo upravte vazby na ostatní záznamy v subpanelech přepnutím levého spodního panelu na "Datový pohled".
- Vytvořte a zobrazte uživatelské komentáře a historii změn záznamu v modulu {{activitystream_singular_module}} přepnutím spodního levého panelu na "Tok aktivit" .
- Sledujte nebo označte záznam jako oblíbený pomocí ikon vpravo od názvu záznamu.
- Další akce jsou dostupné v rozbalovacím menu Akce vpravo od tlačítka Upravit.',
  'LBL_HELP_RECORDS' => 'Modul Společnosti obsahuje firmy, se kterými má vaše společnost nějaký vztah a je obecně vnímán jako centrum pro správu a analýzu vašich obchodních interakcí s každým zákazníkem. Je mnoho různých způsobů, jak můžete vytvořit společnost v Sugaru, jako například prostřednictvím modulu Společnosti, duplikací, importem společností atd. Jakmile je záznam vytvořen, můžete v okně záznamu prohlížet a upravovat informace náležící ke společnosti. Každá společnost může být navázána na ostatní záznamy Sugaru, jako například kontakty, schůzky, případy, obchody a mnoho dalších, jak se vztah s klientem vyvíjí.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
  'LBL_HOMEPAGE_TITLE' => 'Společnosti',
  'LBL_INDUSTRY' => 'Odvětví:',
  'LBL_INVALID_EMAIL' => 'Neexistující email:',
  'LBL_INVITEE' => 'Kontakty',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Přiležitosti',
  'LBL_LIST_ACCOUNT_NAME' => 'Název společnosti',
  'LBL_LIST_CITY' => 'Město',
  'LBL_LIST_CONTACT_NAME' => 'Název kontaktu',
  'LBL_LIST_EMAIL_ADDRESS' => 'Emailová adresa',
  'LBL_LIST_FORM_TITLE' => 'Seznam společností',
  'LBL_LIST_PHONE' => 'Telefon',
  'LBL_LIST_STATE' => 'Stát',
  'LBL_LIST_WEBSITE' => 'WWW stránky',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Schůzky',
  'LBL_MEMBER_OF' => 'Člen:',
  'LBL_MEMBER_ORG_FORM_TITLE' => 'Členské organizace',
  'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Členské organizace',
  'LBL_MISC' => 'Různé',
  'LBL_MODIFIED_ID' => 'Změněno uživatelem ID',
  'LBL_MODULE_ID' => 'Společnosti',
  'LBL_MODULE_NAME' => 'Společnosti',
  'LBL_MODULE_NAME_SINGULAR' => 'Společnost',
  'LBL_MODULE_TITLE' => 'Společnosti',
  'LBL_NAME' => 'Název:',
  'LBL_NEW_FORM_TITLE' => 'Přidat účet',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Poznámky',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Obchody',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Další email:',
  'LBL_OTHER_PHONE' => 'Další telefon:',
  'LBL_OWNERSHIP' => 'Vlastnictví:',
  'LBL_PARENT_ACCOUNT_ID' => 'ID nadřazené společnosti',
  'LBL_PARENT_ID' => 'Rodičovské ID',
  'LBL_PHONE' => 'Telefon',
  'LBL_PHONE_ALT' => 'Další telefon:',
  'LBL_PHONE_ALTERNATE' => 'Další telefon',
  'LBL_PHONE_FAX' => 'Fax práce:',
  'LBL_PHONE_OFFICE' => 'Telefon práce:',
  'LBL_POSTAL_CODE' => 'PSČ:',
  'LBL_PRODUCTS_TITLE' => 'Produkty',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
  'LBL_PROSPECT_LIST' => 'Daší finanční vyhlídky',
  'LBL_PUSH_BILLING' => 'Ověřit fakturaci',
  'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopírovat do kontaktů',
  'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopie...',
  'LBL_PUSH_SHIPPING' => 'Ověřit doručení',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Nabídky',
  'LBL_RATING' => 'Hodnocení:',
  'LBL_REVENUELINEITEMS' => 'Řádky tržeb',
  'LBL_RLI_SUBPANEL_TITLE' => 'Řádky tržeb',
  'LBL_SAVE_ACCOUNT' => 'Uložit účet',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledávání společností',
  'LBL_SHIPPING_ADDRESS' => 'Zasílací adresa:',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Město:',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Země:',
  'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'PSČ:',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Stát:',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Ulice:',
  'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Address Street 2',
  'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Address Street 3',
  'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Address Street 4',
  'LBL_SIC_CODE' => 'DIČ:',
  'LBL_STATE' => 'Stát:',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Úkoly',
  'LBL_TEAMS_LINK' => 'Týmy',
  'LBL_TICKER_SYMBOL' => 'IČ:',
  'LBL_TYPE' => 'Typ:',
  'LBL_USERS_ASSIGNED_LINK' => 'Přiřazení uživatelé',
  'LBL_USERS_CREATED_LINK' => 'Vytvořeno uživateli',
  'LBL_USERS_MODIFIED_LINK' => 'Upravení uživatelé',
  'LBL_UTILS' => 'Pomůcky',
  'LBL_VIEW_FORM_TITLE' => 'Přehled společností',
  'LBL_WEBSITE' => 'WWW stránky:',
  'LNK_ACCOUNT_LIST' => 'Společnosti',
  'LNK_ACCOUNT_REPORTS' => 'Zobrazit reporty Společností',
  'LNK_CREATE' => 'Vytvořit společnost',
  'LNK_IMPORT_ACCOUNTS' => 'Importovat Společnost',
  'LNK_NEW_ACCOUNT' => 'Přidat společnost',
  'MSG_DUPLICATE' => 'Vytvoření tohoto kontaktu může potenciálně duplicitní kontakt. Můžete buď zvolit účet ze seznamu níže nebo kliknout na Přidat účet - v tom případě bude vytvořen nový účet se zadanými údaji.',
  'MSG_SHOW_DUPLICATES' => 'Vytvoření tohoto kontaktu může potenciálně duplicitní kontakt. Můžete buď zvolit účet ze seznamu níže nebo kliknout na Přidat účet - v tom případě bude vytvořen nový účet se zadanými údaji.',
  'NTC_COPY_BILLING_ADDRESS' => 'Zkopírovat fakturační adresu do zasílací',
  'NTC_COPY_BILLING_ADDRESS2' => 'Zkopíruj do doručení',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Zkopírovat zasílací adresu do fakturační',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Zkopíruj do fakturace',
  'NTC_DELETE_CONFIRMATION' => 'Opravdu chcete smazat tento záznam?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Opravdu chcete odstranit tento záznam?',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Opravdu chcete odstranit tento záznam ze seznamu členských organizací?',
);
