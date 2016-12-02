/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('model-list',function(Y,NAME){var AttrProto=Y.Attribute.prototype,Lang=Y.Lang,YArray=Y.Array,EVT_ADD='add',EVT_CREATE='create',EVT_ERROR='error',EVT_LOAD='load',EVT_REMOVE='remove',EVT_RESET='reset';function ModelList(){ModelList.superclass.constructor.apply(this,arguments);}
Y.ModelList=Y.extend(ModelList,Y.Base,{model:Y.Model,_isYUIModelList:true,initializer:function(config){config||(config={});var model=this.model=config.model||this.model;if(typeof model==='string'){this.model=Y.Object.getValue(Y,model.split('.'));if(!this.model){Y.error('ModelList: Model class not found: '+model);}}
this.publish(EVT_ADD,{defaultFn:this._defAddFn});this.publish(EVT_RESET,{defaultFn:this._defResetFn});this.publish(EVT_REMOVE,{defaultFn:this._defRemoveFn});this.after('*:idChange',this._afterIdChange);this._clear();if(config.items){this.add(config.items,{silent:true});}},destructor:function(){this._clear();},add:function(models,options){var isList=models._isYUIModelList;if(isList||Lang.isArray(models)){return YArray.map(isList?models.toArray():models,function(model,index){var modelOptions=options||{};if('index'in modelOptions){modelOptions=Y.merge(modelOptions,{index:modelOptions.index+index});}
return this._add(model,modelOptions);},this);}else{return this._add(models,options);}},create:function(model,options,callback){var self=this;if(typeof options==='function'){callback=options;options={};}
options||(options={});if(!model._isYUIModel){model=new this.model(model);}
self.fire(EVT_CREATE,Y.merge(options,{model:model}));return model.save(options,function(err){if(!err){self.add(model,options);}
if(callback){callback.apply(null,arguments);}});},each:function(callback,thisObj){var items=this._items.concat(),i,item,len;for(i=0,len=items.length;i<len;i++){item=items[i];callback.call(thisObj||item,item,i,this);}
return this;},filter:function(options,callback){var filtered=[],items=this._items,i,item,len,list;if(typeof options==='function'){callback=options;options={};}
for(i=0,len=items.length;i<len;++i){item=items[i];if(callback.call(this,item,i,this)){filtered.push(item);}}
if(options.asList){list=new this.constructor({model:this.model});if(filtered.length){list.add(filtered,{silent:true});}
return list;}else{return filtered;}},get:function(name){if(this.attrAdded(name)){return AttrProto.get.apply(this,arguments);}
return this.invoke('get',name);},getAsHTML:function(name){if(this.attrAdded(name)){return Y.Escape.html(AttrProto.get.apply(this,arguments));}
return this.invoke('getAsHTML',name);},getAsURL:function(name){if(this.attrAdded(name)){return encodeURIComponent(AttrProto.get.apply(this,arguments));}
return this.invoke('getAsURL',name);},getByClientId:function(clientId){return this._clientIdMap[clientId]||null;},getById:function(id){return this._idMap[id]||null;},invoke:function(name){var args=[this._items,name].concat(YArray(arguments,1,true));return YArray.invoke.apply(YArray,args);},load:function(options,callback){var self=this;if(typeof options==='function'){callback=options;options={};}
options||(options={});this.sync('read',options,function(err,response){var facade={options:options,response:response},parsed;if(err){facade.error=err;facade.src='load';self.fire(EVT_ERROR,facade);}else{if(!self._loadEvent){self._loadEvent=self.publish(EVT_LOAD,{preventable:false});}
parsed=facade.parsed=self._parse(response);self.reset(parsed,options);self.fire(EVT_LOAD,facade);}
if(callback){callback.apply(null,arguments);}});return this;},map:function(fn,thisObj){return YArray.map(this._items,fn,thisObj);},parse:function(response){if(typeof response==='string'){try{return Y.JSON.parse(response)||[];}catch(ex){this.fire(EVT_ERROR,{error:ex,response:response,src:'parse'});return null;}}
return response||[];},remove:function(models,options){var isList=models._isYUIModelList;if(isList||Lang.isArray(models)){models=YArray.map(isList?models.toArray():models,function(model){if(Lang.isNumber(model)){return this.item(model);}
return model;},this);return YArray.map(models,function(model){return this._remove(model,options);},this);}else{return this._remove(models,options);}},reset:function(models,options){models||(models=[]);options||(options={});var facade=Y.merge({src:'reset'},options);if(models._isYUIModelList){models=models.toArray();}else{models=YArray.map(models,function(model){return model._isYUIModel?model:new this.model(model);},this);}
facade.models=models;if(options.silent){this._defResetFn(facade);}else{if(this.comparator){models.sort(Y.bind(this._sort,this));}
this.fire(EVT_RESET,facade);}
return this;},some:function(callback,thisObj){var items=this._items.concat(),i,item,len;for(i=0,len=items.length;i<len;i++){item=items[i];if(callback.call(thisObj||item,item,i,this)){return true;}}
return false;},sort:function(options){if(!this.comparator){return this;}
var models=this._items.concat(),facade;options||(options={});models.sort(Y.rbind(this._sort,this,options));facade=Y.merge(options,{models:models,src:'sort'});if(options.silent){this._defResetFn(facade);}else{this.fire(EVT_RESET,facade);}
return this;},sync:function(){var callback=YArray(arguments,0,true).pop();if(typeof callback==='function'){callback();}},toArray:function(){return this._items.concat();},toJSON:function(){return this.map(function(model){return model.toJSON();});},_add:function(model,options){var facade,id;options||(options={});if(!model._isYUIModel){model=new this.model(model);}
id=model.get('id');if(this._clientIdMap[model.get('clientId')]||(Lang.isValue(id)&&this._idMap[id])){this.fire(EVT_ERROR,{error:'Model is already in the list.',model:model,src:'add'});return;}
facade=Y.merge(options,{index:'index'in options?options.index:this._findIndex(model),model:model});if(options.silent){this._defAddFn(facade);}else{this.fire(EVT_ADD,facade);}
return model;},_attachList:function(model){model.lists.push(this);model.addTarget(this);},_clear:function(){YArray.each(this._items,this._detachList,this);this._clientIdMap={};this._idMap={};this._items=[];},_compare:function(a,b){return a<b?-1:(a>b?1:0);},_detachList:function(model){var index=YArray.indexOf(model.lists,this);if(index>-1){model.lists.splice(index,1);model.removeTarget(this);}},_findIndex:function(model){var items=this._items,max=items.length,min=0,item,middle,needle;if(!this.comparator||!max){return max;}
needle=this.comparator(model);while(min<max){middle=(min+max)>>1;item=items[middle];if(this._compare(this.comparator(item),needle)<0){min=middle+1;}else{max=middle;}}
return min;},_parse:function(response){return this.parse(response);},_remove:function(model,options){var index,facade;options||(options={});if(Lang.isNumber(model)){index=model;model=this.item(index);}else{index=this.indexOf(model);}
if(index===-1||!model){this.fire(EVT_ERROR,{error:'Model is not in the list.',index:index,model:model,src:'remove'});return;}
facade=Y.merge(options,{index:index,model:model});if(options.silent){this._defRemoveFn(facade);}else{this.fire(EVT_REMOVE,facade);}
return model;},_sort:function(a,b,options){var result=this._compare(this.comparator(a),this.comparator(b));if(result===0){return result;}
return options&&options.descending?-result:result;},_afterIdChange:function(e){var newVal=e.newVal,prevVal=e.prevVal,target=e.target;if(Lang.isValue(prevVal)){if(this._idMap[prevVal]===target){delete this._idMap[prevVal];}else{return;}}else{if(this.indexOf(target)===-1){return;}}
if(Lang.isValue(newVal)){this._idMap[newVal]=target;}},_defAddFn:function(e){var model=e.model,id=model.get('id');this._clientIdMap[model.get('clientId')]=model;if(Lang.isValue(id)){this._idMap[id]=model;}
this._attachList(model);this._items.splice(e.index,0,model);},_defRemoveFn:function(e){var model=e.model,id=model.get('id');this._detachList(model);delete this._clientIdMap[model.get('clientId')];if(Lang.isValue(id)){delete this._idMap[id];}
this._items.splice(e.index,1);},_defResetFn:function(e){if(e.src==='sort'){this._items=e.models.concat();return;}
this._clear();if(e.models.length){this.add(e.models,{silent:true});}}},{NAME:'modelList'});Y.augment(ModelList,Y.ArrayList);},'3.15.0',{"requires":["array-extras","array-invoke","arraylist","base-build","escape","json-parse","model"]});