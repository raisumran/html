<?php
$clientCache['Opportunities']['base']['field'] = array (
  'rowaction' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:"RowactionField",initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'DisableDelete\');this._super("initialize",[options]);}})',
    ),
  ),
  'radioenum' => 
  array (
    'templates' => 
    array (
      'edit' => '
{{#eachOptions items}}
    <span class="radioenum-inline">
        <label>
            <input type="radio" name="{{../name}}" value="{{key}}"
                {{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}{{#eq key ../value}}checked{{/eq}}>
            {{value}}
        </label>
    </span>
{{/eachOptions}}
{{#unless hideHelp}}
    {{#if def.help}}
        <p class="help-block">{{str def.help module}}</p>
    {{/if}}
{{/unless}}
',
    ),
  ),
  'quickcreate' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'QuickcreateField\',openCreateDrawer:function(module){this.actionLayout=\'create-actions\';this._super(\'openCreateDrawer\',[module]);}})',
    ),
  ),
  '_hash' => 'fdce28661fb92c7128f81e307b6a62d1',
);

