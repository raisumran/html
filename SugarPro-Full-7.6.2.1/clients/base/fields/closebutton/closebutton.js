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
({extendsFrom:'RowactionField',initialize:function(options){this.events=_.extend({},this.events,options.def.events,{'click [name="record-close"]':'closeClicked','click [name="record-close-new"]':'closeNewClicked'});this._super('initialize',[options]);this.type='rowaction';},closeClicked:function(event){this._close(false);},closeNewClicked:function(event){this._close(true);},_render:function(){if(this.model.get(this.getStatusFieldName())===this.getClosedStatus()){this.hide();}else{this._super('_render');}},getClosedStatus:function(){return((this.def&&this.def.closed_status)?this.def.closed_status:'Completed');},getStatusFieldName:function(){return((this.def&&this.def.status_field_name)?this.def.status_field_name:'status');},_close:function(createNew){var self=this;this.model.set(this.getStatusFieldName(),this.getClosedStatus());this.model.save({},{success:function(){self.showSuccessMessage();if(createNew){self.openDrawerToCreateNewRecord();}},error:function(error){self.showErrorMessage();app.logger.error('Record failed to close. '+error);self.model.revertAttributes();}});},openDrawerToCreateNewRecord:function(){var self=this,statusField=this.getStatusFieldName(),module=app.metadata.getModule(this.model.module),prefill=app.data.createBean(this.model.module);prefill.copy(this.model);if(module.fields[statusField]&&module.fields[statusField]['default']){prefill.set(statusField,module.fields[statusField]['default']);}else{prefill.unset(statusField);}
app.drawer.open({layout:'create-actions',context:{create:true,model:prefill}},function(){if(self.parent){self.parent.render();}else{self.render();}});},showSuccessMessage:function(){var statusField=this.getStatusFieldName(),statusFieldMetadata=app.metadata.getModule(this.module).fields[statusField],optionStrings,statusValue;if(statusFieldMetadata&&statusFieldMetadata.options){optionStrings=app.lang.getAppListStrings(statusFieldMetadata.options);statusValue=optionStrings[this.getClosedStatus()].toLocaleLowerCase();}else{statusValue=this.getClosedStatus().toLocaleLowerCase();}
app.alert.show('status_change_success',{level:'success',autoClose:true,messages:app.lang.get('TPL_STATUS_CHANGE_SUCCESS',this.module,{moduleSingular:app.lang.getModuleName(this.module),status:statusValue})});},showErrorMessage:function(){app.alert.show('close_record_error',{level:'error',title:app.lang.get('ERR_AJAX_LOAD')});},bindDataChange:function(){if(this.model){this.model.on('change:status',this.render,this);}}})