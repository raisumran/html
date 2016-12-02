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
({extendsFrom:'TogglepanelLayout',initialize:function(opts){var defaultOptions={'auto_apply':true,'stickiness':true,'show_actions':true};var moduleMeta=app.metadata.getModule(opts.module)||{};this.disableActivityStreamToggle(opts.module,moduleMeta,opts.meta||{});this.on("filterpanel:change:module",function(module,link){this.currentModule=module;this.currentLink=link;},this);this.on('filter:create:open',_.debounce(function(){this.$('.filter-options').removeClass('hide');var activeShortcutSession=app.shortcuts.getCurrentSession();if(_.isNull(activeShortcutSession)||(activeShortcutSession&&activeShortcutSession.layout!==this)){app.shortcuts.saveSession();app.shortcuts.createSession(['Filter:Add','Filter:Remove','Filter:Close','Filter:Save','Filter:Delete','Filter:Reset'],this);}},100,true),this);this.on('filter:create:close',function(){this.$('.filter-options').addClass('hide');var activeShortcutSession=app.shortcuts.getCurrentSession();if(activeShortcutSession&&(activeShortcutSession.layout===this)){app.shortcuts.restoreSession();}},this);this.on('filterpanel:lastviewed:set',function(viewed){this.toggleViewLastStateKey=this.toggleViewLastStateKey||app.user.lastState.key('toggle-view',this);var lastViewed=app.user.lastState.get(this.toggleViewLastStateKey);if(lastViewed!==viewed){app.user.lastState.set(this.toggleViewLastStateKey,viewed);}},this);this._super("initialize",[opts]);this.context.editingFilter=null;var filterOptions=_.extend(defaultOptions,this.meta.filter_options,this.context.get('filterOptions'));this.context.set('filterOptions',filterOptions);var lastViewed=app.user.lastState.get(this.toggleViewLastStateKey),defaultModule=this.module||this.model.get('module')||this.context.get('module');this.trigger('filterpanel:change:module',(moduleMeta.activityStreamEnabled&&lastViewed==='activitystream')?'Activities':defaultModule);},applyLastFilter:function(collection,condition){var triggerFilter=true;if(_.size(collection.origFilterDef)){if(condition==='favorite'){triggerFilter=!_.isUndefined(_.find(collection.origFilterDef,function(value,key){return key==='$favorite'||(value&&!_.isUndefined(value.$favorite));}));}
if(triggerFilter){var query=this.$('.search input.search-name').val();this.trigger('filter:apply',query,collection.origFilterDef);}}},disableActivityStreamToggle:function(moduleName,moduleMeta,viewMeta){if(moduleName!=='Activities'&&!moduleMeta.activityStreamEnabled){_.each(viewMeta.availableToggles,function(toggle){if(toggle.name==='activitystream'){toggle.disabled=true;toggle.label='LBL_ACTIVITY_STREAM_DISABLED';}});}},_render:function(){this._super('_render');this.trigger('filter:reinitialize');}})