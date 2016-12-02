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
({className:'subpanels-layout',_defaultSettings:{showAlerts:true,sortable:true},_settings:{},initialize:function(options){this._super('initialize',[options]);this._initSettings();this._bindEvents();if(app.config.collapseSubpanels){this.showSubpanel(false);}},_initSettings:function(){this._settings=_.extend({},this._defaultSettings,this.meta&&this.meta.settings||{});return this;},_bindEvents:function(){if(this.layout){this.listenTo(this.layout,'subpanel:change',this.showSubpanel);this.listenTo(this.layout,'filter:change',function(linkModuleName,linkName){this.trigger('filter:change',linkModuleName,linkName);});}
this.on('subpanels:reordered',this._saveNewOrder,this);},_initSortablePlugin:function(){if(this._settings&&this._settings.sortable===true){this.$el.sortable({axis:'y',containment:this.$el,handle:'[data-sortable-subpanel=true]',helper:'clone',tolerance:'pointer',scrollSensitivity:50,scrollSpeed:15,update:_.bind(this.handleSort,this)});}
return this;},_render:function(){this._super('_render');this._initSortablePlugin();},_dispose:function(){if(!_.isEmpty(this.$el.data('sortable'))){this.$el.sortable('destroy');}
this._super('_dispose');},_saveNewOrder:function(component,order){var key=app.user.lastState.buildKey('order','subpanels',this.module);app.user.lastState.set(key,order);if(this._settings.showAlerts===true){app.alert.show('subpanel_order_updated',{level:'success',messages:app.lang.get('LBL_SAVED_LAYOUT',this.module),autoClose:true});}},handleSort:function(evt,ui){var newOrder=this.$el.sortable('toArray',{attribute:'data-subpanel-link'});this.trigger('subpanels:reordered',this,newOrder);},_pruneNoAccessComponents:function(components){var prunedComponents=[];var layoutFromContext=this.context?this.context.get('layout')||this.context.get('layoutName'):null;this.layoutType=layoutFromContext?layoutFromContext:app.controller.context.get('layout');this.aclToCheck=this.aclToCheck||'list';_.each(components,function(component){var relatedModule,link=component.context?component.context.link:null;if(link){relatedModule=app.data.getRelatedModule(this.module,link);if(!relatedModule||relatedModule&&app.acl.hasAccess(this.aclToCheck,relatedModule)){prunedComponents.push(component);}}},this);return prunedComponents;},_pruneHiddenComponents:function(components){var hiddenSubpanels=app.metadata.getHiddenSubpanels();var visibleSubpanels=_.filter(components,function(component){var relatedModule=app.data.getRelatedModule(this.module,component.context.link);return _.isEmpty(_.find(hiddenSubpanels,function(hiddenPanel){if(relatedModule!==false){return hiddenPanel.toLowerCase()===relatedModule.toLowerCase();}
return true;}));},this);return visibleSubpanels;},_addComponentsFromDef:function(components,context,module){var allowedComponents=this._pruneHiddenComponents(components);allowedComponents=this._pruneNoAccessComponents(allowedComponents);allowedComponents=this.reorderSubpanels(allowedComponents);this._super('_addComponentsFromDef',[allowedComponents,context,module]);this._markComponentsAsSubpanels();this._disableSubpanelToggleButton(allowedComponents);},reorderSubpanels:function(components){var key=app.user.lastState.buildKey('order','subpanels',this.module),order=app.user.lastState.get(key);if(_.isEmpty(order)){return components;}
var componentOrder=_.pluck(_.pluck(components,'context'),'link');order=_.intersection(order,componentOrder);_.each(order,function(link,index){var comp=_.find(components,function(comp){return comp.context.link===link;});comp.position=++index;});components=_.sortBy(components,function(comp){return comp.position;});return components;},_disableSubpanelToggleButton:function(allowedComponents){if(!this.layout||!_.isEmpty(allowedComponents)){return;}
this.layout.trigger('filterpanel:change','activitystream',true,true);this.layout.trigger('filterpanel:toggle:button','subpanels',false);},showSubpanel:function(linkName){var self=this,cacheKey=app.user.lastState.key('subpanels-last',this.layout);if(linkName){app.user.lastState.set(cacheKey,linkName);}
_.each(this._components,function(component){var link=component.context.get('link');if(!linkName||linkName===link){component.show();}else{component.hide();}});},_markComponentsAsSubpanels:function(){_.each(this._components,function(component){component.context.set("isSubpanel",true);});},loadData:function(options){var self=this,load=function(){_.each(this._components,function(component){component.loadData(options);});};if(self.context.parent&&!self.context.parent.isDataFetched()){var parent=this.context.parent.get("model");parent.once("sync",load);}
else{load();}}})