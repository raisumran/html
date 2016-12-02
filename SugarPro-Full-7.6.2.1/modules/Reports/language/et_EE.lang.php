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
  'LBL_GROUP_BY_HELP_DESC' => 'Steps to Define Group By:<br />1) Click on a Module in the Related Modules pane that you would like to use to group records in your report. By default, the primary module (top node in the tree view) is selected.<br /><br />You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the Available Fields pane.<br /><br />2) Click on the Field in the Available Fields pane to group records by the field in your report. You can also search for the field by typing in the text box in the pane.<br /><br />After selecting any number of fields from the module selected in the Related Modules pane, you can choose a different module from which you can select any number of fields to group records. However, the report becomes less readable when you group by more than several fields.<br /><br />You can change the order of the fields by dragging and dropping them to the desired position. Changing the order affects the way the results are displayed.<br /><br />For Matrix Reports, you can use a maximum of three fields to group records.',
  'LBL_DISPLAY_COLS_HELP_DESC' => 'Steps to Choose Display Columns:<br /><br />1) Click on a Module in the Related Modules pane that you would like to use to display data in your report. By default, the primary module (top node in the tree view) that you chose during the \'Select Module\' step is selected.<br /><br />You can select fields from a related module (child node in the tree view) by clicking on the module. Modules related to the modules related to the primary module can also be selected. The module that you select determines which reportable fields appear in the Available Fields pane.<br /><br />2) Click on the Field in the Available Fields pane to display the field data in the records in your report. You can also search for the field by typing in the text box in the pane.<br /><br />After selecting any number of fields from the module selected in the Related Modules pane, you can choose a different module from which you can select additional fields. You can select any number of fields, but the report is generated more slowly and becomes less readable when you add more than necessary fields in the report.<br /><br />You can change the order fields by dragging and dropping them to the desired position. Changing the field order changes the order in which the columns are displayed in the results.',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => 'Steps to Choose Display Summaries:<br /><br />1) Click on the Module in the Related Modules pane that you would like to use for the summaries in your report. By default, the primary module (top node in the tree view) is selected.<br /><br />You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the Available Fields pane.<br /><br />2) Click on a Field in the Available Fields pane to select summaries for your report. You can also search for the field by typing in the text box in the pane.<br /><br />After selecting any number of fields from the module selected in the Related Modules pane, you can choose a different module from which you can select additional fields for the summaries in your report.<br /><br />For Matrix Reports, you can select more than one field to display multiple values within a single cell in your report.',
  'LBL_OF' => 'of',
  'LBL_LESS_THAN' => 'Less Than',
  'LBL_GREATER_THAN' => 'Greater Than',
  'LBL_DOES_NOT_EQUAL' => 'Does Not Equal',
  'LBL_ON' => 'On',
  'LBL_BEFORE' => 'Before',
  'LBL_IS_BETWEEN' => 'Is Between',
  'LBL_NOT_ON' => 'Not On',
  'LBL_STARTS_WITH' => 'Starts With',
  'LBL_ENDS_WITH' => 'Ends With',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_IS' => 'Is',
  'LBL_IS_NOT' => 'Is Not',
  'LBL_ONE_OF' => 'Is One Of',
  'LBL_IS_NOT_ONE_OF' => 'Is Not One Of',
  'LBL_ANY' => 'Any',
  'LBL_ALL' => 'At Least',
  'LBL_EXACT' => 'Exact',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_SUM' => 'SUM',
  'LBL_AVG' => 'AVG',
  'LBL_MAX' => 'MAX',
  'LBL_MIN' => 'MIN',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'CHART_COUNT_PATTERN' => '{count} {module} where {group_label} is {group_text}',
  'LBL_WITH_A_TOTAL' => 'with a total',
  'LBL_WITH_AN_AVERAGE' => 'with an average',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} of {currency_symbol}{numerical_value}{thousands} where {group_label} is {group_text}',
  'LBL_WHOSE_MAXIMUM' => 'whose maximum',
  'LBL_WHOSE_MINIMUM' => 'whose minimum',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} is {numerical_value}{thousands} where {group_label} is {group_text}',
  'LBL_ROLLOVER' => 'Rollover a bar for details.',
  'LBL_ROLLOVER_WEDGE' => 'Rollover a wedge for details.',
  'LBL_ROLLOVER_SQUARE' => 'Rollover a square for details.',
  'LBL_HORIZ_BAR' => 'Horizontal Bar',
  'LBL_VERT_BAR' => 'Vertical Bar',
  'LBL_PIE' => 'Pie',
  'LBL_LINE' => 'Line',
  'LBL_FUNNEL' => 'Funnel',
  'LBL_NONE' => '-- none --',
  'LBL_NONE_STRING' => 'None',
  'LBL_ANY_ONE_OF' => 'Any One Of',
  'LBL_FILTER_OR' => 'OR',
  'LBL_FILTER_AND' => 'AND',
  'LBL_FILTERS_END' => 'of the following filters.',
  'DEFAULT_REPORT_TITLE_7' => 'Open Cases By User By Status',
  'DEFAULT_REPORT_TITLE_8' => 'Open Cases By Month By User',
  'DEFAULT_REPORT_TITLE_9' => 'Open Cases By Priority By User',
  'DEFAULT_REPORT_TITLE_10' => 'New Cases By Month',
  'DEFAULT_REPORT_TITLE_11' => 'Pipeline By Type By Team',
  'DEFAULT_REPORT_TITLE_12' => 'Pipeline By Team By User',
  'DEFAULT_REPORT_TITLE_17' => 'Opportunities Won By Lead Source',
  'LBL_FILTER' => 'Filter',
  'LBL_1X2' => '1 X 2',
  'LBL_2X1' => '2 X 1',
  'LBL_MODULE_NAME' => 'Aruanded',
  'LBL_REPORT_MODULES' => 'Aruande moodulid',
  'LBL_REPORT_ATT_MODULES' => 'Moodulid',
  'LBL_REPORT_EXPAND_ALL' => 'Laienda kõik',
  'LBL_REPORT_COLLAPSE_ALL' => 'Ahenda kõik',
  'LBL_REPORT_SHOW_CHART' => 'Näita diagrammi',
  'LBL_REPORT_HIDE_CHART' => 'Peida diagramm',
  'LBL_REPORT_SHOW_DETAILS' => 'Näita üksikasju',
  'LBL_REPORT_HIDE_DETAILS' => 'Peida üksikasjad',
  'LNK_NEW_CONTACT' => 'Loo kontakt',
  'LNK_NEW_ACCOUNT' => 'Loo ettevõte',
  'LNK_NEW_OPPORTUNITY' => 'Loo müügivõimalus',
  'LNK_NEW_CASE' => 'Loo müügijuhtum',
  'LNK_NEW_NOTE' => 'Loo märkus või manus',
  'LNK_NEW_CALL' => 'Telefonikõne logi',
  'LNK_NEW_EMAIL' => 'Arhiveeri e-kiri',
  'LNK_NEW_MEETING' => 'Planeeri kohtumine',
  'LNK_NEW_TASK' => 'Loo ülesanne',
  'LBL_REPORTS' => 'Aruanded',
  'LBL_TITLE' => 'Tiitel',
  'LBL_UNTITLED' => 'pealkirjata',
  'LBL_MODULE' => 'Moodul',
  'LBL_ACCOUNTS' => 'Ettevõtted',
  'LBL_OPPORTUNITIES' => 'Müügivõimalused',
  'LBL_CONTACTS' => 'Kontaktid',
  'LBL_LEADS' => 'Müügivihjed',
  'LBL_ACCOUNT' => 'Ettevõte',
  'LBL_OPPORTUNITY' => 'Müügivõimalus',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_LEAD' => 'Müügivihje',
  'LBL_DELETE_ERROR' => 'Ainult aruande omanikud või administraatorid saavad aruandeid kustutada.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Ridade ja veergude aruanne',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Loo tabelaruanne, mis sisaldab valitud kirjete väärtuseid spetsifitseeritud kriteeriumites.',
  'LBL_SUMMATION_REPORT' => 'Kokkuvõttev aruanne',
  'LBL_SUMMATION_REPORT_DESC' => 'Loo tabelaruanne mis pakub kirjete arvutatud väärtusi vastavalt täpsustatud kriteeriumitele. Andmeid saab esitleda ka diagrammina.',
  'LBL_MATRIX_REPORT' => 'Maatriksaruanne',
  'LBL_MATRIX_REPORT_DESC' => 'Loo summeeritud aruanne, mis kuvab andmeid ruudustikformaadis ning on grupeeritud maksimaalselt kolmest väljast.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Loo summeeritud aruanne, mis kuvab kirjete tulemuste lisaandmeid.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Summeeritud aruanne koos lisainfoga',
  'LBL_SHOW_QUERY' => 'Näita päringut',
  'LBL_DO_ROUND' => 'Ümarda numbrid üle 100000',
  'LBL_SAVE_AS' => 'Salvesta',
  'LBL_FILTERS' => 'Filtrid',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Diagrammi ei saa näidata ebapiisavate andmete tõttu',
  'LBL_RUNTIME_FILTERS' => 'Käivitusaja filtrid',
  'LBL_VIEWER_RUNTIME_HELP' => 'Täpsusta Käivitusaja filtrite väärtuseid ning kliki Rakenda filtrid linki aruande taaskuvamiseks.',
  'LBL_REPORT_RESULTS' => 'Tulemused',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Kliki Näita aruannet tulemuste vaatamiseks.',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Aruande filtrid on alates viimasest kuvamisest muudetud.',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Aruanne on alates viimasest kuvamisest muudetud.',
  'LBL_ADD_NEW_FILTER' => 'Lisa uus filter',
  'LBL_DISPLAY_COLUMNS' => 'Kuva veerud',
  'LBL_SUMMARY_COLUMNS' => 'Summeeri veerud',
  'LBL_HIDE_COLUMNS' => 'Peida veerud',
  'LBL_SUBMIT_QUERY' => 'Esita päring',
  'LBL_QUERY' => 'Päring',
  'LBL_CHANGE' => 'Muuda',
  'LBL_REMOVE' => 'Eemalda',
  'LBL_CREATE_CUSTOM_REPORT' => 'Aruande viisard',
  'LBL_CREATE_REPORT' => 'Loo aruanne',
  'LBL_MY_SAVED_REPORTS' => 'Minu salvestatud aruanded',
  'LBL_MY_TEAMS_REPORTS' => 'Minu meeskonna aruanded',
  'LBL_REPORT_NAME' => 'Aruande nimi',
  'LBL_REPORT_ATT_NAME' => 'Nimi',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Käesoleva kvartali prognoos',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Kõik avaldatud aruanded',
  'LBL_DETAILED_FORECAST' => 'Detailne prognoos',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Partnerettevõtete loend',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Kliendiettevõtete loend',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Telefonikõnede loend viimase kontaktivõtu aja järgi',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Müügivõimalused müügivihje allika järgi',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Käesoleva kvartali teostatud tehingud',
  'LBL_VIEW' => 'vaata',
  'LBL_DELETE' => 'Kustuta',
  'LBL_PUBLISH' => 'avalda',
  'LBL_UN_PUBLISH' => 'ei avalda',
  'LBL_SCHEDULE_REPORT' => 'Planeerimisaruanne',
  'LBL_START_DATE' => 'Alguskuupäev',
  'LBL_END_DATE' => 'Lõppkuupäev',
  'LBL_FILTER_DATE_RANGE_START' => 'Kellelt',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Kellele',
  'LBL_SELECT_RECORD' => 'Vali kirje',
  'LBL_TIME_INTERVAL' => 'Ajavahemik',
  'LBL_SCHEDULE_ACTIVE' => 'Aktiivne',
  'LBL_SCHEDULE_EMAIL' => 'Planeerimisaruanne',
  'LBL_NEXT_RUN' => 'Järgmine e-kiri',
  'LBL_UPDATE_SCHEDULE' => 'Uuenda ajakava',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Sul pole salvestatud aruandeid.',
  'LBL_MY_REPORTS' => 'Minu aruanded',
  'LBL_ACCOUNT_REPORTS' => 'Ettevõtte aruanded',
  'LBL_CONTACT_REPORTS' => 'Kontakti aruanded',
  'LBL_OPPORTUNITY_REPORTS' => 'Müügivõimaluste aruanded',
  'LBL_CASE_REPORTS' => 'Juhtumi aruanded',
  'LBL_BUG_REPORTS' => 'Bugide aruanded',
  'LBL_LEAD_REPORTS' => 'Müügivihjete aruanded',
  'LBL_QUOTE_REPORTS' => 'Pakkumiste aruanded',
  'LBL_CALL_REPORTS' => 'Telefonikõnede aruanded',
  'LBL_MEETING_REPORTS' => 'Kohtumiste aruanded',
  'LBL_TASK_REPORTS' => 'Ülesannete aruanded',
  'LBL_EMAIL_REPORTS' => 'E-posti aruanded',
  'LBL_ALL_REPORTS' => 'Vaata aruanded',
  'LBL_ACTIVITIES_REPORTS' => 'Tegevuste aruanded',
  'LBL_CHART_TYPE' => 'Diagrammi tüüp',
  'LBL_NO_REPORTS' => 'Tulemusi pole.',
  'LBL_SAVED_SEARCH' => 'Salvestatud otsing ning paigutus',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Minu meeskonna ettevõtete aruanded',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Minu meeskonna müügivõimaluste aruanded',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Minu meeskonna kontaktaruanded',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Minu meeskonna juhtumi aruanded',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Minu meeskonna bugide aruanded',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Minu meeskonna müügivihjete aruanded',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Minu meeskonna pakkumiste aruanded',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Minu meeskonna kõnede aruanded',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Minu meeskonna kohtumiste aruanded',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Minu meeskonna ülesannete aruanded',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Minu meeskonna e-posti aruanded',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Minu meeskonna prognooside aruanded',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Minu meeskonna eesmärkide aruanded',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Minu meeskonna lepingute aruanded',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Minu meeskonna projektiülesande aruanded',
  'LBL_MY_ACCOUNT_REPORTS' => 'Minu ettevõtete aruanded',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Minu müügivõimaluste aruanded',
  'LBL_MY_CONTACT_REPORTS' => 'Minu kontaktide aruanded',
  'LBL_MY_CASE_REPORTS' => 'Minu juhtumi aruanded',
  'LBL_MY_BUG_REPORTS' => 'Minu bugide aruanded',
  'LBL_MY_LEAD_REPORTS' => 'Minu müügivihjete aruanded',
  'LBL_MY_QUOTE_REPORTS' => 'Minu pakkumiste aruanded',
  'LBL_MY_CALL_REPORTS' => 'Minu kõnede aruanded',
  'LBL_MY_MEETING_REPORTS' => 'Minu kohtumiste aruanded',
  'LBL_MY_TASK_REPORTS' => 'Minu ülesannete aruanded',
  'LBL_MY_EMAIL_REPORTS' => 'Minu e-posti aruanded',
  'LBL_MY_FORECAST_REPORTS' => 'Minu prognooside aruanded',
  'LBL_EXPORT' => 'Eksport',
  'LBL_SUCCESS_REPORT' => 'Korras: Aruanne',
  'LBL_MY_PROSPECT_REPORTS' => 'Minu eesmärkide aruanded',
  'LBL_WAS_SAVED' => 'sai salvestatud',
  'LBL_FAILURE_REPORT' => 'Ebaõnnestus: aruanne',
  'LBL_WAS_NOT_SAVED' => 'ei salvestatud',
  'LBL_EQUALS' => 'Võrdsed',
  'LBL_AFTER' => 'Pärast',
  'LBL_CONTAINS' => 'Sisaldab',
  'LBL_DOES_NOT_CONTAIN' => 'Ei sisalda',
  'LBL_TO_PDF' => 'Salvesta PDF formaadis',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Ei saa avaldada. Samaaegselt on avaldatud teine aruanne sama nimega.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Ei saa mitteavaldada teise kasutaja aruannet. Sa omad samanimelist aruannet.',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Avaldatud ettevõtete aruanded',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Avaldatud kontaktide aruanded',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Avaldatud müügivõimaluste aruanded',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Avaldatud juhtumite aruanded',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Avaldatud bugide aruanded',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Avaldatud müügivihjete aruanded',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Avaldatud pakkumiste aruanded',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Avaldatud kõnede aruanded',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Avaldatud kohtumiste aruanded',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Avaldatud ülesannete aruanded',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Avaldatud e-posti aruanded',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Avaldatud prognoosi aruanded',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Avaldatud eesmärkide aruanded',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Seda tüüpi aruanded puuduvad',
  'LBL_AND' => 'ja',
  'LBL_MISSING_FIELDS' => 'Puuduvad väljad',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Vali vähemalt üks kuvatav veerg.',
  'LBL_MISSING_INPUT_VALUE' => 'puuduv sisendväärtus.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'puuduv teine sisendväärtus.',
  'LBL_NOTHING_WAS_SELECTED' => 'midagi ei valitud',
  'LBL_TOTAL' => 'Kokku',
  'LBL_MODULE_NAME_SAVED' => 'Mooduli nimi',
  'LBL_REPORT_TYPE' => 'Aruande tüüp',
  'LBL_REPORT_LAST_RUN_DATE' => 'Ligipääs',
  'LBL_REPORT__ATT_TYPE' => 'Tüüp',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Rakenda',
  'LBL_REPORT_RESET_FILTER' => 'Lähtesta',
  'LBL_DISPLAY_SUMMARIES' => 'Vali kuvatavad kokkuvõtted',
  'LBL_HIDE_SUMMARIES' => 'Peida kokkuvõtted',
  'LBL_RUN_BUTTON_TITLE' => 'Käivita aruanne [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Käivita aruanne',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Nagu originaaltüüp',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Nagu read ja veerud',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Nagu kokkuvõte',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Nagu lisainfoga kokkuvõte',
  'LBL_SUMMATION_WITH_DETAILS' => 'Laiendus lisainfoga',
  'LBL_DUPLICATE_AS_MATRIX' => 'Nagu maatriks',
  'LBL_SAVE_RUN' => 'Salvesta ja käivita',
  'LBL_WITH_DETAILS' => 'Lisainfoga',
  'LBL_CHOOSE_COLUMNS' => 'Vali veerud kuvamiseks',
  'LBL_CHOOSE_SUMMARIES' => 'Vali kokkuvõtted kuvamiseks',
  'LBL_GROUP_BY' => 'Grupeeri',
  'LBL_ADD_COLUMN' => 'Lisa veerg',
  'LBL_GRAND_TOTAL' => 'Kõik kokku',
  'LBL_SEARCH_FORM_TITLE' => 'Aruande loend',
  'LBL_FORECAST_REPORTS' => 'Prognoosi aruanded',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Minu projekti ülesannete aruanded',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Avaldatud projekti ülesannete aruanded',
  'LBL_PROJECT_TASK_REPORTS' => 'Projekti ülesannete aruanded',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Laiendatud keskmine summa',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Laiendatud sum kokku',
  'ERR_SELECT_COLUMN' => 'Vali esmalt kuvatav veerg.',
  'LBL_BY_MONTH' => 'Kuu järgi',
  'LBL_BY_YEAR' => 'Aasta järgi',
  'LBL_BY_QUARTER' => 'Kvartali järgi',
  'LBL_COUNT' => 'Arvuta',
  'LBL_MONTH' => 'Kuu',
  'LBL_YEAR' => 'Aasta',
  'LBL_QUARTER' => 'Kvartal',
  'LBL_YESTERDAY' => 'Eile',
  'LBL_TODAY' => 'Täna',
  'LBL_TOMORROW' => 'Homme',
  'LBL_LAST_WEEK' => 'Viimane nädal',
  'LBL_NEXT_WEEK' => 'Järgmine nädal',
  'LBL_LAST_7_DAYS' => 'Viimased 7 päeva',
  'LBL_NEXT_7_DAYS' => 'Järgmised 7 päeva',
  'LBL_LAST_MONTH' => 'Viimane kuu',
  'LBL_NEXT_MONTH' => 'Järgmine kuu',
  'LBL_LAST_QUARTER' => 'Viimane kvartal',
  'LBL_THIS_QUARTER' => 'See kvartal',
  'LBL_LAST_YEAR' => 'Viimane aasta',
  'LBL_NEXT_YEAR' => 'Järgmine aasta',
  'LBL_SELECT' => 'Valitud',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Vähemalt üks kokkuvõtte veerg.',
  'LBL_SHOW_DETAILS' => 'Näita lisainfot',
  'LBL_1_REPORT_ON' => '1. Aruanne',
  'LBL_2_FILTER' => '2. Filter',
  'LBL_3_GROUP' => '3. Grupp',
  'LBL_3_CHOOSE' => '3. Vali kuvatavad veerud',
  'LBL_4_CHOOSE' => '4. Vali kuvatavad veerud',
  'LBL_5_CHART_OPTIONS' => '5. Diagrammi suvandid',
  'LBL_LABEL' => 'Silt',
  'LBL_THIS_MONTH' => 'Sel kuul',
  'LBL_LAST_30_DAYS' => 'Viimased 30 päeva',
  'LBL_NEXT_30_DAYS' => 'Järgmised 30 päeva',
  'LBL_THIS_YEAR' => 'Sel aastal',
  'LBL_LIST_FORM_TITLE' => 'Aruanded',
  'LBL_PROSPECT_REPORTS' => 'Eesmärgi aruanded',
  'LBL_IS_EMPTY' => 'On tühi',
  'LBL_IS_NOT_EMPTY' => 'Pole tühi',
  'LBL_CHART_DESCRIPTION' => 'Kirjeldus',
  'LBL_USE_COLUMN_FOR' => 'Andmesarjad',
  'LBL_RELATED' => 'Seotud:',
  'LBL_OWNER' => 'Vastutaja',
  'LBL_TEAM' => 'Meeskonnad',
  'LBL_TOTAL_IS' => 'Kokku on',
  'LBL_NO_CHART' => 'Diagramm puudub',
  'LBL_GROUP_BY_REQUIRED' => 'Diagrammi loomiseks on vaja vähemalt ühe rühma ning kokkuvõtte veergu.',
  'MSG_NO_PERMISSIONS' => 'Selle aruande redigeerimiseks puuduvad sul õigused',
  'LBL_DATE_BASED_FILTERS' => 'Date filters are relative to the time zone of the report\'s Assigned To user',
  'LBL_CONTRACT_REPORTS' => 'Lepingute aruanded',
  'LBL_MY_CONTRACT_REPORTS' => 'Minu lepingute aruanded',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Avaldatud lepingute aruanded',
  'LBL_HELLO' => 'Tere',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Sugar on saatnud teile manusega automaatse aruande. See aruanne on loodud',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'ja salvestatud nimega "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Kui soovid muuta oma aruande sätteid, logi Sugarisse ning kliki lingil "Aruanded".',
  'LBL_LIST_PUBLISHED' => 'Avaldatud',
  'LBL_THIS_WEEK' => 'See nädal',
  'LBL_NEXT_QUARTER' => 'Järgmine kvartal',
  'LBL_ADD_RELATE' => 'Lisa seotud',
  'LBL_DEL_THIS' => 'Eemalda',
  'LBL_ALERT_CANT_ADD' => 'Seotud moodulit ei saa lisada seni, kuni valite tabeli sidumiseks. \\nVali mooduli rippmenüüst vasakul \'Lisa seotud\' nupp.',
  'LBL_BY_DAY' => 'Päeva järgi',
  'LBL_DAY' => 'Päev',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Vabalt valitud moodulid',
  'LBL_RELATED_TABLE_BLANK' => 'Vali moodul sidumiseks.',
  'LBL_FILTER_CONDITIONS' => 'Vali operaator:',
  'LBL_FAVORITE_REPORTS' => 'Minu lemmikud',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Minu lemmikaruanded',
  'LBL_ADDED_FAVORITES' => 'aruanne (aruanded) lisatud Minu lemmikaruannetesse.',
  'LBL_REMOVED_FAVORITES' => 'aruanne (aruanded) eemaldatud Minu lemmikutest.',
  'LBL_MODULE_TITLE' => 'Aruanded: Avaleht',
  'LBL_MODULE_VIEWER_TITLE' => 'Aruande vaade: Avaleht',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Aruande vaade',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Ajakava',
  'LBL_FAVORITES_TITLE' => 'Minu lemmikaruanded',
  'LBL_TABLE_CHANGED' => 'Mooduli list on muudetud, kontrolli Rühmatabelisse sisestatud kriteeriumid.',
  'LBL_OPTIONAL_HELP' => 'Vali lahtrid peamooduli kirjete kuvamiseks isegi siis, kui seotud mooduli kirjeid ei eksisteeri. Kui lahter pole valitud, siis peamooduli kirjed kuvatakse vaid siis, kui neil on üks või enam seotud mooduli kirjeid.',
  'LBL_RUNTIME_HELP' => 'Vali see lahter, et kasutajad saaksid enne aruande käivitamist muuta filtri väärtust.',
  'LBL_USER_EMPTY_HELP' => 'Soovi korral vaadata kirjeid, mis pole määratud ühelegi kasutajale kontrolli \'Optional Related Modules\' lahtrit Aruande lisainfos lisaks kasutades \'Tühi\' valikut määratud kasutaja filtri jaoks. See kuvab kõik kirjed, mis pole seotud ühegi kasutajaga.',
  'DEFAULT_REPORT_TITLE_1' => 'Käesoleva kvartali prognoos',
  'DEFAULT_REPORT_TITLE_2' => 'Detailne prognoos',
  'DEFAULT_REPORT_TITLE_3' => 'Partnerettevõtete loend',
  'DEFAULT_REPORT_TITLE_4' => 'Kliendiettevõtete loend',
  'DEFAULT_REPORT_TITLE_5' => 'Kõneloend viimati kontakteerutud päeva järgi',
  'DEFAULT_REPORT_TITLE_6' => 'Müügivõimalused müügivihje allika järgi',
  'DEFAULT_REPORT_TITLE_13' => 'Ülesanded Meeskonnati Kasutajati',
  'DEFAULT_REPORT_TITLE_14' => 'Kõned Meeskonnati Kasutajati',
  'DEFAULT_REPORT_TITLE_15' => 'Kohtumised meeskonnati kasutajati',
  'DEFAULT_REPORT_TITLE_16' => 'Ettevõtted tüübi järgi, tegevusala järgi',
  'DEFAULT_REPORT_TITLE_18' => 'Müügivihjed allika järgi',
  'DEFAULT_REPORT_TITLE_19' => 'Minu kasutusmaatriks (täna)',
  'DEFAULT_REPORT_TITLE_20' => 'Minu kasutusmaatriks (viimased 7 päeva)',
  'DEFAULT_REPORT_TITLE_21' => 'Minu kasutusmaatriks (viimased 30 päeva)',
  'DEFAULT_REPORT_TITLE_22' => 'Minu moodulikasutus (täna)',
  'DEFAULT_REPORT_TITLE_23' => 'Minu moodulikasutus (viimased 7 päeva)',
  'DEFAULT_REPORT_TITLE_24' => 'Minu moodulikasutus (viimased 30 päeva)',
  'DEFAULT_REPORT_TITLE_25' => 'Kasutajate moodulikasutus (viimased 7 päeva)',
  'DEFAULT_REPORT_TITLE_26' => 'Kasutajate moodulikasutus (viimased 30 päeva)',
  'DEFAULT_REPORT_TITLE_27' => 'Minu otseste Aruannete moodulikasuttus (viimased 30 päeva)',
  'DEFAULT_REPORT_TITLE_28' => 'Aeglased päringud',
  'DEFAULT_REPORT_TITLE_29' => 'Minu muudetud kirjed (viimased 7 päeva)',
  'DEFAULT_REPORT_TITLE_31' => 'Minu viimati muudetud kirjed (viimased 30 päeva)',
  'DEFAULT_REPORT_TITLE_32' => 'Minu Otseste Aruannete pool muudetud kirjed (viimased 30 päeva)',
  'DEFAULT_REPORT_TITLE_41' => 'Active User Sessions (viimased 7 päeva)',
  'DEFAULT_REPORT_TITLE_42' => 'User Sessions Summary (viimased 7 päeva)',
  'DEFAULT_REPORT_TITLE_43' => 'Kliendikonto Omanikud',
  'DEFAULT_REPORT_TITLE_44' => 'Minu Uus Kliendikonto',
  'DEFAULT_REPORT_TITLE_45' => 'Müügivõimalused müügistaadiumi järgi',
  'DEFAULT_REPORT_TITLE_46' => 'Müügivõimalused tüübi järgi',
  'DEFAULT_REPORT_TITLE_47' => 'Avatud kõned',
  'DEFAULT_REPORT_TITLE_48' => 'Avatud kohtumised',
  'DEFAULT_REPORT_TITLE_49' => 'Avatud ülesanded',
  'DEFAULT_REPORT_TITLE_50' => 'Võidetud müügivõimalused konto järgi',
  'DEFAULT_REPORT_TITLE_51' => 'Võidetud müügivõimalused kasutaja järgi',
  'DEFAULT_REPORT_TITLE_52' => 'Kõik avatud müügivõimalused',
  'DEFAULT_REPORT_TITLE_53' => 'Kõik suletud müügivõimalused',
  'LBL_ASSIGNED_TO_NAME' => 'Vastutaja',
  'LBL_CONTENT' => 'Sisu',
  'LBL_IS_PUBLISHED' => 'On avaldatud',
  'LBL_FAVORITE' => 'Lemmik',
  'LBL_SCHEDULE_TYPE' => 'Graafiku tüüp',
  'LBL_NO_ACCESS' => 'Sul pole juurdepääsu aruandele ligipääsu piirangu tõttu.',
  'LBL_SELECT_REPORT_TYPE' => 'Aruande tüübi valimiseks kliki ikoonil.',
  'LBL_SELECT_MODULE' => 'Vali moodul',
  'LBL_NEXT' => 'Järgmine >',
  'LBL_PREVIOUS' => '< Tagasi',
  'LBL_CANCEL' => 'Tühista',
  'LBL_AVAILABLE_FIELDS' => 'Saadaolevad väljad',
  'LBL_RELATED_MODULES' => 'Seotud moodulid',
  'LBL_FIELD_NAME' => 'Välja nimi',
  'LBL_RUN_TIME_LABEL' => 'Käivitusaeg',
  'LBL_NO_IMAGE' => 'Kujutist pole',
  'LBL_BASIC_FILTERS' => 'Peafiltrid',
  'LBL_ADVANCED_FILTERS' => 'Laiendatud filtrid',
  'LBL_ADD_GROUP' => 'Lisa filtrigrupp',
  'LBL_REMOVE_GROUP' => 'Eemalda filtrigrupp',
  'LBL_ADD_FILTER_TO' => 'Lisa filter',
  'LBL_COLUMN_NAME' => 'Veeru nimi',
  'LBL_OPTIONAL_MODULES' => 'Valikulised moodulid',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Vali aruande tüüp',
  'LBL_SELECT_MODULE_BUTTON' => 'Kliki ikoonil mooduli valimiseks.',
  'LBL_DEFINE_FILTERS' => 'Määratle filtrid',
  'LBL_SELECT_GROUP_BY' => 'Määratle grupp',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Vali kuvatavad veerud',
  'LBL_REPORT_DETAILS' => 'Aruande lisainfo',
  'LBL_REPORT_GROUP_BY' => 'Grupeeri',
  'LBL_CLEAR' => 'Tühjenda',
  'LBL_CHART_OPTIONS' => 'Diagrammi suvandid',
  'LBL_CHART_DATA_HELP' => 'Vali kokkuvõte, mida kuvatakse diagrammil',
  'LBL_DO_ROUND_HELP' => 'Numbrid üle 100000 on graafikutes ümardatud.<br />Näide: 350000 näidatakse kui 350K',
  'LBL_COMBO_TYPE_AHEAD' => 'Otsi välja',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Maatriksaruandel ei saa olla enam kui 3 rühma klausleid',
  'LBL_MINIMUM_2_GROUP_BY' => 'Maatriksaruandel peab olema vähemalt 2 rühma klausleid.',
  'LBL_MATRIX_LAYOUT' => 'Paigutuse suvandid:',
  'LBL_REMOVE_BTN_HELP' => 'Kliki selle filtrigrupi eemaldamiseks.',
  'LBL_ADD_BTN_HELP' => 'Kontrolli uue mooduli lisamiseks. Kasuta gruppe JA/VÕI filtrite loogika rakendamiseks.',
  'LBL_ORDER_BY' => 'Sordi',
  'LBL_ASCENDING' => 'Kasvavalt',
  'LBL_DESCENDING' => 'Kahanevalt',
  'LBL_TYPE' => 'Tüüp',
  'LBL_SUBJECT' => 'Teema',
  'LBL_STATUS' => 'Olek',
  'LBL_DATE' => 'Alguskuupäev',
  'LBL_NO_FILTERS' => 'ei ome filtreid.',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Järgnev väli selles aruandes pole enam kehtiv:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Palun redigeeri aruanne ja veendu, et teised parameetrid on endiselt kehtivad.',
  'LBL_CURRENT_USER' => 'Praegune kasutaja',
  'LBL_MODULE_CHANGE_PROMPT' => 'Valitud mooduli muutmine tähendab filtrite, kuvatavate veergude kaotamist jne. Kas soovid siiski jätkata?',
  'LBL_CANNOT_BE_EMPTY' => 'ei saa olla tühi.',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Kõik aruandeväljad valitud moodulist Seotud moodulites kuvatakse siin. Vali väli.',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Peamoodul ja kõik sellega seotud moodulid kuvatakse siin. Vali moodul.',
  'LBL_PREVIEW_REPORT' => 'Eelvaade',
  'LBL_FILTERS_HELP_DESC' => '1) Kliki moodulil Seotud Moodulid, mida soovid kasutada filtrite määratlemisel. Vaikimisi on valitud peamoodul (ülasõlm puuvaates ülal).<br /><br />Sa saad valida seotud mooduli klikates sellel (alamsõlm puuvaates) Laienda sõlme seotud moodulite lisamoodulite vaatamiseks. Moodul, mille valid määrab, millised aruandeväljad kuvatakse Saadaolevad väljad paneelil.<br /><br />2) Kliki Saadaolevad väljad filtrite lisamiseks. Samuti on võimalik otsida välju tekstilahtri abil.<br /><br />Pärast valitud moodulil ükskõik millise koguse väljade valimist Seotud Moodulites, saab valida erineva mooduli, millest saab valida ükskõik kui palju välju filtritena kasutamiseks.<br /><br />3) Vali JAH või VÕI, et määrata, kas kõik või mõni filter on kasutusel aruande tulemuste leidmiseks.<br /><br />4) [Optional] Kliki Lisa filtri grupp filtrite grupi loomiseks. <br /><br />valides ükskõik, millise väljavumbri filtritena kasutamiseks.',
  'LBL_ALT_SHOW' => 'Näita',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'See aruanne sisaldab andmeid järgnevatess veerutellimustes:',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Tunni kaupa',
    21600 => 'Iga 6 tunni tagant',
    43200 => 'Iga 12 tunni tagant',
    86400 => 'Päevati',
    604800 => 'Nädalati',
    1209600 => 'Iga 2 nädala tagant',
    2419200 => 'Iga 4 nädala tagant',
  ),
);

