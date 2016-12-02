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
({fieldTag:'input.select2',plugins:['EllipsisInline'],appendValueTag:'input[name=append_value]',isFetchingOptions:false,items:null,_keysOrder:null,initialize:function(){this._super("initialize",arguments);if(_.isString(this.def.options)){var self=this;this.listenTo(this.model,"sync",function(model){var options=app.lang.getAppListStrings(self.def.options);if(options){self.items=self._filterOptions(options);}});}},direction:function(){if(_.isEmpty(this.items)||app.lang.direction!=='rtl'){return;}
var firstOption=_.values(this.items)[0];return app.utils.isDirectionRTL(firstOption)?'rtl':'ltr';},bindKeyDown:function(callback){var $el=this.$(this.fieldTag);if($el){$el.on('keydown.record',{field:this},callback);var plugin=$el.data('select2');if(plugin){if(plugin.focusser){plugin.focusser.on('keydown.record',{field:this},callback);}
plugin.search.on('keydown.record',{field:this},callback);}}},unbindKeyDown:function(callback){if(this.$el){var $el=this.$(this.fieldTag);if($el){$el.off('keydown.record',callback);var plugin=$el.data('select2');if(plugin){plugin.search.off('keydown.record',callback);}}}},_render:function(){var self=this;if(!this.items||_.isEmpty(this.items)){this.loadEnumOptions(false,function(){self.isFetchingOptions=false;if(!this.disposed){this.render();}});if(this.isFetchingOptions){this.$el.html(app.lang.get('LBL_LOADING'));return this;}}
if(this.def.isMultiSelect&&!_.isUndefined(this.items[''])&&this.items['']===''){var obj={};_.each(this.items,function(value,key){if(key!==''&&value!==''){obj[key]=value;}},this);this.items=obj;}
this.items=this._filterOptions(this.items);var optionsKeys=_.isObject(this.items)?_.keys(this.items):[],defaultValue=this._checkForDefaultValue(this.model.get(this.name),optionsKeys);app.view.Field.prototype._render.call(this);if(this.tplName=='noaccess'){return this;}
var select2Options=this.getSelect2Options(optionsKeys);var $el=this.$(this.fieldTag);if(this.tplName==='edit'||this.tplName==='list-edit'||this.tplName==='massupdate'){$el.select2(select2Options);var plugin=$el.data('select2');if(this.dir){plugin.container.attr('dir',this.dir);plugin.results.attr('dir',this.dir);}
if(plugin&&plugin.focusser){plugin.focusser.on('select2-focus',_.bind(_.debounce(this.handleFocus,0),this));}
$el.select2("container").addClass("tleft");$el.on('change',function(ev){var value=ev.val;if(_.isUndefined(value)){return;}
if(self.model){self.model.set(self.name,self.unformat(value));}});if(this.def.ordered){$el.select2('container').find('ul.select2-choices').sortable({containment:'parent',start:function(){$el.select2('onSortStart');},update:function(){$el.select2('onSortEnd');}});}}else if(this.tplName==='disabled'){$el.select2(select2Options);$el.select2('disable');}
if(!_.isUndefined(this.value)){if(!_.isArray(this.value)){this.value=[this.value];}
$el.select2('val',this.value,!!defaultValue);}
return this;},_checkForDefaultValue:function(currentValue,optionsKeys){var action=this.action||this.view.action;if(!this.def.isMultiSelect&&!_.isEmpty(this.items)&&!(this.model.has(this.name)&&optionsKeys.indexOf(currentValue)>-1)&&app.acl.hasAccessToModel('write',this.model,this.name)&&(action=='edit'||action=='create')){var defaultValue=this._getDefaultOption(optionsKeys);if(_.isFunction(this.model.setDefault)){this.model.setDefault(this.name,defaultValue);}}},focus:function(){if(this.action!=='disabled'&&!this.def.isMultiSelect){this.$(this.fieldTag).select2('open');}},loadEnumOptions:function(fetch,callback){var self=this;var _itemsKey='cache:'+this.module+':'+this.name+':items';this.items=this.def.options||this.context.get(_itemsKey);fetch=fetch||false;if(fetch||!this.items){this.isFetchingOptions=true;var _key='request:'+this.module+':'+this.name;if(this.context.get(_key)){var request=this.context.get(_key);request.xhr.done(_.bind(function(o){if(this.items!==o){this.items=o;callback.call(this);}},this));}else{var request=app.api.enumOptions(self.module,self.name,{success:function(o){if(self.disposed){return;}
if(self.items!==o){self.items=o;self.context.set(_itemsKey,self.items);self.context.unset(_key);callback.call(self);}}});this.context.set(_key,request);}}else if(_.isString(this.items)){this.items=app.lang.getAppListStrings(this.items);}},getSelect2Options:function(optionsKeys){var select2Options={};select2Options.allowClear=_.indexOf(optionsKeys,"")>=0;if(!this.def.isMultiSelect){select2Options.placeholder=app.lang.get("LBL_SEARCH_SELECT");}
select2Options.width=this.def.enum_width?this.def.enum_width:'100%';select2Options.dropdownCssClass=this.def.dropdown_class?this.def.dropdown_class:'';select2Options.containerCssClass=this.def.container_class?this.def.container_class:(this.def.isMultiSelect?'select2-choices-pills-close':'');if(this.def.dropdown_width){select2Options.dropdownCss={width:this.def.dropdown_width};}
select2Options.minimumResultsForSearch=this.def.searchBarThreshold?this.def.searchBarThreshold:7;if(this.def.isMultiSelect){select2Options.multiple=true;}
select2Options.separator=this.def.separator||',';if(this.def.separator){select2Options.tokenSeparators=[this.def.separator];}
select2Options.initSelection=_.bind(this._initSelection,this);select2Options.query=_.bind(this._query,this);select2Options.sortResults=_.bind(this._sortResults,this);return select2Options;},_initSelection:function($ele,callback){var data=[];var options=_.isString(this.items)?app.lang.getAppListStrings(this.items):this.items;options=this.items=this._filterOptions(options);var values=$ele.val();if(this.def.isMultiSelect){values=values.split(this.def.separator||',');}
_.each(_.pick(options,values),function(value,key){data.push({id:key,text:value});},this);if(data.length===1){callback(data[0]);}else{callback(data);}},_filterOptions:function(options){var currentValue,syncedVal,newOptions={},filter=app.metadata.getEditableDropdownFilter(this.def.options);if(_.isEmpty(filter)){return options;}
if(!_.contains(this.view.plugins,"Editable")){return options;}
syncedVal=this.model.getSyncedAttributes();currentValue=_.isUndefined(syncedVal[this.name])?this.model.get(this.name):syncedVal[this.name];if(_.isString(currentValue)){currentValue=[currentValue];}
var currentIndex={};if(!this.model.isNew()){_.each(currentValue,function(value){currentIndex[value]=true;});}
if(!this._keysOrder){this._keysOrder={};}
_.each(filter,function(val,index){var key=val[0],visible=val[1];if((visible||key in currentIndex)&&!_.isUndefined(options[key])&&options[key]!==false){this._keysOrder[key]=index;newOptions[key]=options[key];}},this);return newOptions;},_query:function(query){var options=_.isString(this.items)?app.lang.getAppListStrings(this.items):this.items;var data={results:[],more:false};if(_.isObject(options)){_.each(options,function(element,index){var text=""+element;if(query.matcher(query.term,text)){data.results.push({id:index,text:text});}});}else{options=null;}
query.callback(data);},_sortResults:function(results,container,query){var sortedResults;if(this.def.sort_alpha){sortedResults=_.sortBy(results,function(item){return item.text;});return sortedResults;}
this._setupKeysOrder();if(_.isEmpty(this._keysOrder)){return results;}
sortedResults=results;if(!this.def.visibility_grid&&app.lang.getAppListKeys(this.def.options)){sortedResults=_.sortBy(results,function(item){return this._keysOrder[item.id];},this);}
return sortedResults;},_setupKeysOrder:function(){var keys,orderedKeys,filteredOrderedKeys,toString=function(k){return k.toString();};if(!this._keysOrder){this._keysOrder={};orderedKeys=_.map(app.lang.getAppListKeys(this.def.options),toString);keys=_.map(_.keys(this.items),toString);filteredOrderedKeys=_.intersection(orderedKeys,keys);if(!_.isEqual(filteredOrderedKeys,_.keys(this.items))){_.each(filteredOrderedKeys,function(key,index){return this._keysOrder[key]=index;},this);}}},_getDefaultOption:function(optionsKeys){this._setupKeysOrder();if(!_.isEmpty(this._keysOrder)&&_.isEmpty(_.difference(_.keys(this._keysOrder),optionsKeys))){return _.first(_.invert(this._keysOrder))}
return _.first(optionsKeys);},unformat:function(value){if(this.def.isMultiSelect&&_.isArray(value)){var possibleKeys=_.keys(this.items);if(!this.def.ordered){value=_.intersection(possibleKeys,value);}else{value=_.intersection(value,possibleKeys);}
return value;}
if(this.def.isMultiSelect&&_.isNull(value)){return[];}else{return value;}},format:function(value){if(this.def.isMultiSelect&&_.isArray(value)&&_.indexOf(value,'')>-1){value=_.clone(value);delete value[''];}
if(this.def.isMultiSelect&&_.isString(value)){return this.convertMultiSelectDefaultString(value);}else{return value;}},convertMultiSelectDefaultString:function(defaultString){var result=defaultString.split(",");_.each(result,function(value,key){if(value!=='^^'){result[key]=value.replace(/\^/g,"");}});return result;},bindDataChange:function(){if(this.model){this.model.on('change:'+this.name,function(){if(_.isEmpty(this.$(this.fieldTag).data('select2'))){this.render();}else{this.$(this.fieldTag).select2('val',this.format(this.model.get(this.name)));}},this);}},bindDomChange:function(){var $el=this.$(this.appendValueTag);if($el.length){$el.on('change',_.bind(function(){this.appendValue=$el.prop('checked');this.model.set(this.name+'_replace',this.appendValue?'1':'0');},this));}},unbindDom:function(){this.$(this.appendValueTag).off();this.$(this.fieldTag).select2('destroy');this._super('unbindDom');},unbindData:function(){var _key='request:'+this.module+':'+this.name;this.context.unset(_key);app.view.Field.prototype.unbindData.call(this);},_dispose:function(){this.unbindKeyDown();this._super('_dispose');}})