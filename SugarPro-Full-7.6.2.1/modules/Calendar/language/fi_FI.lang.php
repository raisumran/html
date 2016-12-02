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
  'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: ei määritelty tälle näkymälle',
  'ERR_YEAR_BETWEEN' => 'Kalenteri ei pysty käsittelemään pyytämääsi vuotta.<br />Vuoden pitää olla väliltä 1970 ja 2037.',
  'LBL_AM' => 'aamupäivällä',
  'LBL_APPLY_BUTTON' => 'Hyväksy',
  'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
  'LBL_BUSY' => 'Varattu',
  'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => 'Toistuva tapahtuma “{0}” on ohittanut rajan',
  'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => 'Tapahtuma “{0}” ei ole vanhempi toistuva tapahtuma',
  'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => 'Tapahtuma “{0}” ei ole toistuva tapahtuma',
  'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => 'Objektia “{0}” ei tunnisteta toistuvien tapahtumien moduuliksi',
  'LBL_CANCEL_BUTTON' => 'Peruuta',
  'LBL_CLOSE_BUTTON' => 'Sulje',
  'LBL_CONFIRM_REMOVE' => 'Oletko varma, että haluat poistaa tietueen?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Oletko varma, että haluat poistaa kaikki toistuvat tietueet?',
  'LBL_CONFLICT' => 'Ristiriita',
  'LBL_CREATE_CALL' => 'Kirjaa puhelu',
  'LBL_CREATE_MEETING' => 'Varaa kokous',
  'LBL_CREATE_NEW_CALL' => 'Luo puheli.',
  'LBL_CREATE_NEW_RECORD' => 'Luo toiminta',
  'LBL_CREATING_NEW_ACTIVITY' => 'Olet luomassa uutta kokousta. Halusitko <a href=&#39;javascript:void(0);&#39; data-action=&#39;create-task&#39;>luoda tehtävän</a> tai <a href=&#39;javascript:void(0);&#39; data-action=&#39;schedule-call&#39;>puhelun</a>?',
  'LBL_DATE' => 'Päivämäärä',
  'LBL_DATE_END_ERROR' => 'Päättymispäivä on ennen aloituspäivää',
  'LBL_DATE_TIME' => 'Päivämäärä ja aika',
  'LBL_DAY' => 'Päivä',
  'LBL_DELETE_BUTTON' => 'Poista',
  'LBL_DURATION' => 'Kesto',
  'LBL_EDIT_ALL_RECURRENCES' => 'Muokkaa kaikkia toistoja',
  'LBL_EDIT_CALL' => 'Muokkaa puhelia',
  'LBL_EDIT_RECORD' => 'Muokkaa toimintaa',
  'LBL_EDIT_USERLIST' => 'Käyttäjälista',
  'LBL_ERROR_LOADING' => 'Virhe ladattaessa',
  'LBL_ERROR_SAVING' => 'Virhe tallennettaessa',
  'LBL_FILTER_BY_TEAM' => 'Suodata käyttäjälista ryhmittäin:',
  'LBL_GENERAL_TAB' => 'Lisätiedot',
  'LBL_GOTO_DATE' => 'Siirry päivään',
  'LBL_HOURS_ABBREV' => '&nbsp;h',
  'LBL_INFO_DESC' => 'Kuvaus',
  'LBL_INFO_DUE_DT' => 'Eräpäivä',
  'LBL_INFO_DURATION' => 'Kesto',
  'LBL_INFO_NAME' => 'Aihe',
  'LBL_INFO_RELATED_TO' => 'Liittyy',
  'LBL_INFO_START_DT' => 'Aloituspäivä',
  'LBL_INFO_TITLE' => 'Lisätietoja',
  'LBL_LOADING' => 'Ladataan',
  'LBL_MINS_ABBREV' => 'min',
  'LBL_MODULE_NAME' => 'Kalenteri',
  'LBL_MODULE_NAME_SINGULAR' => 'Kalenteri',
  'LBL_MODULE_TITLE' => 'Kalenteri',
  'LBL_MONTH' => 'Kuukausi',
  'LBL_NEXT_DAY' => 'Seuraava päivä',
  'LBL_NEXT_MONTH' => 'Seuraava kuukausi',
  'LBL_NEXT_SHARED' => 'Seuraava',
  'LBL_NEXT_WEEK' => 'Seuraavalla viikolla',
  'LBL_NEXT_YEAR' => 'Seuraava vuosi',
  'LBL_NO' => 'Ei',
  'LBL_NO_ACCESS' => 'Sinulla ei ole oikeuksia',
  'LBL_NO_USER' => 'Ei osumia kentälle: Vastuuhenkilö',
  'LBL_PARTICIPANTS_TAB' => 'Kutsutut',
  'LBL_PM' => 'iltapäivällä',
  'LBL_PREVIOUS_DAY' => 'Edellinen päivä',
  'LBL_PREVIOUS_MONTH' => 'Edellinen kuukausi',
  'LBL_PREVIOUS_SHARED' => 'Edellinen',
  'LBL_PREVIOUS_WEEK' => 'Edellinen viikko',
  'LBL_PREVIOUS_YEAR' => 'Edellinen vuosi',
  'LBL_RECURRING_LIMIT_ERROR' => 'Tätä toistuvaa $moduleTitle ei voida ajoittaa, koska tämä ylittäisi $limit:in maksimirekurrenssin.',
  'LBL_REFRESH' => 'Päivitä',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Poista kaikki toistot',
  'LBL_REPEAT_COUNT' => 'toistojen määrä',
  'LBL_REPEAT_DOW' => 'tänä aikana:',
  'LBL_REPEAT_END' => 'Lopeta',
  'LBL_REPEAT_END_AFTER' => ' ',
  'LBL_REPEAT_END_BY' => 'tähän mennessä:',
  'LBL_REPEAT_INTERVAL' => 'Jokainen',
  'LBL_REPEAT_OCCURRENCES' => 'kerran jälkeen',
  'LBL_REPEAT_TAB' => 'Toistuminen',
  'LBL_REPEAT_TYPE' => 'Toista',
  'LBL_REPEAT_UNTIL' => 'Toista, kunnes',
  'LBL_SAVE_BUTTON' => 'Tallenna',
  'LBL_SAVING' => 'Tallennetaan',
  'LBL_SCHEDULED' => 'Varattu',
  'LBL_SELECT_USERS' => 'Valitse kalenterissa näytettävät käyttäjät',
  'LBL_SENDING_INVITES' => 'Tallennetaan ja lähetetään kutsuja .....',
  'LBL_SEND_INVITES' => 'Tallenna ja lähetä kutsut',
  'LBL_SETTINGS' => 'Asetukset',
  'LBL_SETTINGS_CALLS_SHOW' => 'Näytä puhelut:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Näytä aikavälit päivä- ja kuukausinäkymissä:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Näytä tehtävät:',
  'LBL_SETTINGS_TIME_ENDS' => 'Päättymisaika:',
  'LBL_SETTINGS_TIME_STARTS' => 'Aloitusaika:',
  'LBL_SETTINGS_TITLE' => 'Asetukset',
  'LBL_SHARED' => 'Yhteiset',
  'LBL_SHARED_CAL_TITLE' => 'Jaettu kalenteri',
  'LBL_STATUS' => 'Tila:',
  'LBL_STYLE_ADVANCED' => 'Monimutkainen',
  'LBL_STYLE_BASIC' => 'Yksinkertainen',
  'LBL_SUBJECT' => 'Aihe',
  'LBL_USERS' => 'Käyttäjät',
  'LBL_USER_CALENDARS' => 'Käyttäjien kalenterit',
  'LBL_WEEK' => 'Viikko',
  'LBL_YEAR' => 'Vuosi',
  'LBL_YES' => 'Kyllä',
  'LNK_CALL_LIST' => 'Puhelut',
  'LNK_IMPORT_CALLS' => 'Tuo puhelut',
  'LNK_IMPORT_MEETINGS' => 'Tuo kokoukset',
  'LNK_IMPORT_TASKS' => 'Tuo tehtävät',
  'LNK_MEETING_LIST' => 'Kokoukset',
  'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
  'LNK_NEW_CALL' => 'Varaa puhelu',
  'LNK_NEW_MEETING' => 'Varaa kokous',
  'LNK_NEW_TASK' => 'Luo tehtävä',
  'LNK_TASK_LIST' => 'Tehtävät',
  'LNK_VIEW_CALENDAR' => 'Tänään',
  'NOTICE_DURATION_TIME' => 'Kestoaika on oltava suurempi kuin 0',
);

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    0 => '',
    1 => 'Tammi',
    2 => 'Helmi',
    3 => 'Maalis',
    4 => 'Huhti',
    5 => 'Touko',
    6 => 'Kesä',
    7 => 'Heinä',
    8 => 'Elo',
    9 => 'Syys',
    10 => 'Loka',
    11 => 'Marras',
    12 => 'Joulu',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Tammikuu',
    2 => 'Helmikuu',
    3 => 'Maaliskuu',
    4 => 'Huhtikuu',
    5 => 'Toukokuu',
    6 => 'Kesäkuu',
    7 => 'Heinäkuu',
    8 => 'Elokuu',
    9 => 'Syyskuu',
    10 => 'Lokakuu',
    11 => 'Marraskuu',
    12 => 'Joulukuu',
  ),
  'dom_cal_weekdays' => 
  array (
    0 => 'Su',
    1 => 'Ma',
    2 => 'Ti',
    3 => 'Ke',
    4 => 'To',
    5 => 'Pe',
    6 => 'La',
  ),
  'dom_cal_weekdays_long' => 
  array (
    0 => 'Sunnuntai',
    1 => 'Maanantai',
    2 => 'Tiistai',
    3 => 'Keskiviikko',
    4 => 'Torstai',
    5 => 'Perjantai',
    6 => 'Lauantai',
  ),
);
