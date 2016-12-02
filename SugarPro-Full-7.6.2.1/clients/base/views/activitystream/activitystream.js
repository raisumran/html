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
({events:{'change div[data-placeholder]':'checkPlaceholder','keydown div[data-placeholder]':'checkPlaceholder','keypress div[data-placeholder]':'checkPlaceholder','input div[data-placeholder]':'checkPlaceholder','click .reply':'showAddComment','click .reply-btn':'addComment','click .preview-btn:not(.disabled)':'previewRecord','click .comment-btn':'toggleReplyBar','click .more':'fetchComments'},tagName:"li",className:"activitystream-posts-comments-container",plugins:['RelativeTime','FileDragoff','QuickSearchFilter','Taggable','Tooltip'],cacheNamePrefix:"user:avatars:",cacheNameExpire:":expiry",expiryTime:36000000,thresholdRelativeTime:2,_unformattedPost:null,_unformattedComments:{},urlRegExp:/\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))/ig,_attachImageSelector:'img[data-note-id]',blacklistModules:['Quotas'],initialize:function(options){this.opts={params:{}};this.readonly=!!options.readonly;this.nopreview=!!options.nopreview;app.view.View.prototype.initialize.call(this,options);var lastComment=this.model.get("last_comment");this.commentsCollection=app.data.createRelatedCollection(this.model,"comments");if(lastComment&&!_.isUndefined(lastComment.id)){this.commentsCollection.reset([lastComment]);}
this.model.set("comments",this.commentsCollection);var count=parseInt(this.model.get('comment_count'),10);this.remaining_comments=0;this.more_tpl="TPL_MORE_COMMENT";if(count){this.remaining_comments=count-1;if(count>2){this.more_tpl+="S";}}
this.preview=this.getPreviewData();var data=this.model.get('data');var activity_type=this.model.get('activity_type');this.tpl="TPL_ACTIVITY_"+activity_type.toUpperCase();switch(activity_type){case'post':if(!data.value){this.tpl=null;}
break;case'update':data.updateStr=this.processUpdateActivityTypeMessage(data.changes);this.model.set('data',data);break;case'attach':var url,urlAttributes={module:'Notes',id:data.noteId,field:'filename'};if(data.mimetype&&data.mimetype.indexOf("image/")===0){url=app.api.buildFileURL(urlAttributes,{htmlJsonFormat:false,passOAuthToken:false,cleanCache:true,forceDownload:false});data.embeds=[{type:"image",src:url,noteId:data.noteId}];}else{url=app.api.buildFileURL(urlAttributes);}
data.url=url;this.$el.data(data);this.model.set('data',data);this.model.set('display_parent_type','Files');break;}
this.processEmbed();this.resizeVideo=_.bind(_.throttle(this.resizeVideo,500),this);$(window).on('resize.'+this.cid,this.resizeVideo);this.setTaggableRecord(this.model.get('parent_type'),this.model.get('parent_id'));},processUpdateActivityTypeMessage:function(changes){var updateTpl=Handlebars.compile(app.lang.get('TPL_ACTIVITY_UPDATE_FIELD','Activities')),parentType=this.model.get("parent_type"),fields=app.metadata.getModule(parentType).fields,self=this,updateStr;updateStr=_.reduce(changes,function(memo,changeObj){var fieldMeta=fields[changeObj.field_name],field=app.view.createField({def:fieldMeta,view:self,model:self.model,viewName:'detail'});changeObj.before=field.format(changeObj.before);changeObj.after=field.format(changeObj.after);changeObj.field_label=app.lang.get(fields[changeObj.field_name].vname,parentType);if(memo){return updateTpl(changeObj)+', '+memo;}
return updateTpl(changeObj);},'');return updateStr;},processEmbed:function(){var data=this.model.get('data');if(!_.isEmpty(data.embeds)){this.embeds=[];_.each(data.embeds,function(embed){var typeParts=embed.type.split('.'),type=typeParts.shift(),embedTpl;_.each(typeParts,function(part){type=type+part.charAt(0).toUpperCase()+part.substr(1);});embedTpl=app.template.get(this.name+'.'+type+'Embed');if(embedTpl){this.embeds.push(embedTpl(embed));}},this);}},fetchComments:function(){var self=this;this.commentsCollection.fetch({showAlerts:false,relate:true,success:function(collection){self.remaining_comments=0;self.render();}});},showAddComment:function(e){var currentTarget=this.$(e.currentTarget);currentTarget.closest('li').find('.activitystream-comment').toggle();currentTarget.closest('li').find('.activitystream-comment').find('.sayit').focus();e.preventDefault();},addComment:function(event){var self=this,parentId=this.model.id,payload={parent_id:parentId,data:{}},bean;payload.data=this.getComment();if(payload.data.value&&(payload.data.value.length>0)){bean=app.data.createRelatedBean(this.model,null,'comments');bean.save(payload,{relate:true,success:_.bind(self.addCommentCallback,self)});}},addCommentCallback:function(model){var template,data;this.$('div.reply').empty().trigger('change');this.commentsCollection.add(model);this.toggleReplyBar();template=app.template.getView('activitystream.comment');data=model.get('data');data.value=this.formatTags(data.value);data.value=this.formatLinks(data.value);this.processAvatars();this.$('.comments').prepend(template(model.attributes));this.initializeAllPluginTooltips();this.context.trigger('activitystream:post:prepend',this.model);},previewRecord:function(event){var el=this.$(event.currentTarget),data=el.data(),module=data.module,id=data.id;this.layout.clearRowDecorations();if(module&&id){var model=app.data.createBean(module),collection=this.context.get("collection");model.set("id",id);this.decorateRow();app.events.trigger("preview:module:update",this.context.get("module"));app.events.trigger("preview:render",model,collection,true,this.cid);}
event.preventDefault();},decorateRow:function(){this.$el.addClass('highlighted');this.$('.preview-btn').addClass('active');},_renderHtml:function(model){var isReplyBarOpen=this.$(".comment-btn").hasClass("active")&&this.$(".comment-btn").is(":visible"),replyVal=this.$(".reply").html();this.processAvatars();this.formatAllTagsAndLinks();this._setRelativeTimeAvailable();app.view.View.prototype._renderHtml.call(this);this.resizeVideo();if(isReplyBarOpen){this.toggleReplyBar();this.$(".reply").html(replyVal);}
this._addBrokenImageHandler();},_addBrokenImageHandler:function(){this.$(this._attachImageSelector).error(_.bind(function(event){var $brokenImg=$(event.currentTarget),linkSelector='a[data-note-id="'+$brokenImg.data('note-id')+'"]';this.$(linkSelector).contents().unwrap();$brokenImg.closest('div[class="embed"]').remove();},this));},_setRelativeTimeAvailable:function(){var diffInDays=app.date().diff(this.model.get('date_entered'),'days',true);this.useRelativeTime=(diffInDays<=this.thresholdRelativeTime);},formatAllTagsAndLinks:function(){var post=this.model.get('data');if(post.object&&post.object.module&&_.contains(this.blacklistModules,post.object.module)){delete post.object.module;}
this.unformatAllTagsAndLinks();if(post){this._unformattedPost=post.value;post.value=this.formatLinks(post.value);post.value=this.formatTags(post.value);}
this.commentsCollection.each(function(model){var data=model.get('data');this._unformattedComments[model.get('id')]=data.value;data.value=this.formatLinks(data.value);data.value=this.formatTags(data.value);},this);},unformatAllTagsAndLinks:function(){var post=this.model.get('data');if(post){post.value=this._unformattedPost||post.value;}
this.commentsCollection.each(function(model){var data=model.get('data');data.value=this._unformattedComments[model.get('id')]||data.value;},this);},formatLinks:function(post){var formattedPost='';if(post&&(post.length>0)){formattedPost=post.replace(this.urlRegExp,function(url){var href=url;if((url.indexOf('http://')!==0)&&(url.indexOf('https://')!==0)){href='http://'+url;}
return'<a href="'+href+'" target="_blank">'+url+'</a>';});}
return formattedPost;},resizeVideo:function(){var data=this.model.get('data'),$embed=this.$('.embed'),$iframes=$embed.find('iframe'),videoCount=0,embedWidth;if(_.isArray(data.embeds)){embedWidth=$embed.width();_.each(data.embeds,function(embed){var $iframe,iframeWidth,iframeHeight;if(((embed.type==='video')||(embed.type==='rich'))&&($iframes.length>0)){$iframe=$iframes.eq(videoCount);iframeWidth=Math.min(embedWidth,480);iframeHeight=parseInt(embed.height,10)*(iframeWidth / parseInt(embed.width,10));$iframe.prop({width:iframeWidth,height:iframeHeight});videoCount++;}});}},processAvatars:function(){var comments=this.model.get('comments'),postPictureUrl;if(this.model.get('activity_type')==='post'&&!this.model.get('picture_url')){postPictureUrl=this.getAvatarUrlForUser(this.model,'post');this.model.set('picture_url',postPictureUrl);}
if(comments){comments.each(function(comment){var commentPictureUrl=this.getAvatarUrlForUser(comment,'comment');comment.set('picture_url',commentPictureUrl);},this);}},getAvatarUrlForUser:function(model,activityType){var createdBy=model.get('created_by'),hasPicture=this.checkUserHasPicture(model,activityType);return hasPicture?this.buildAvatarUrl(createdBy):'';},checkUserHasPicture:function(model,activityType){var createdBy=model.get('created_by'),hasPicture;if(createdBy===app.user.get('id')){hasPicture=!_.isEmpty(app.user.get('picture'));}else{hasPicture=this.getUserPictureStatus(createdBy);}
if(_.isUndefined(hasPicture)){this.fetchUserPicture(model,activityType);hasPicture=false;}
return hasPicture;},fetchUserPicture:function(model,activityType){var self=this,createdBy=model.get('created_by'),user=app.data.createBean('Users',{id:createdBy});user.fetch({fields:["picture"],success:function(){var pictureUrl=self.buildAvatarUrl(createdBy),hasPicture=!_.isEmpty(user.get('picture'));self.setUserPictureStatus(createdBy,hasPicture);if(hasPicture){self.$('#avatar-'+activityType+'-'+model.get('id')).html("<img src='"+pictureUrl+"' alt='"+model.get('created_by_name')+"'>");}},error:function(){self.setUserPictureStatus(createdBy,false);}});},getUserPictureStatus:function(userId){var hasPicture=app.cache.get(this.cacheNamePrefix+userId),cachedTTL=app.cache.get(this.cacheNamePrefix+userId+this.cacheNameExpire);return(cachedTTL<$.now())?undefined:hasPicture;},setUserPictureStatus:function(userId,hasPicture){app.cache.set(this.cacheNamePrefix+userId,hasPicture);app.cache.set(this.cacheNamePrefix+userId+this.cacheNameExpire,$.now()+this.expiryTime);},buildAvatarUrl:function(userId){return app.api.buildFileURL({module:'Users',id:userId,field:'picture'});},toggleReplyBar:function(){this.$(".comment-btn").toggleClass("active");this.$(".reply-area").toggleClass("hide");},getComment:function(){return this.unformatTags(this.$('div.reply'));},getPreviewData:function(){var parentModel,preview={enabled:true,label:'LBL_PREVIEW'},isBwcEnabled,module=this.model.get('display_parent_type');if(module){isBwcEnabled=true;var moduleMetadata=app.metadata.getModule(module);if(moduleMetadata&&_.has(moduleMetadata,'isBwcEnabled')){isBwcEnabled=moduleMetadata.isBwcEnabled;}}else{isBwcEnabled=false;}
if(isBwcEnabled){preview.enabled=false;preview.label='LBL_PREVIEW_BWC_TOOLTIP';}else if(this.model.get("activity_type")==='attach'){preview.enabled=false;preview.label='LBL_PREVIEW_DISABLED_ATTACHMENT';}else if(_.isEmpty(this.model.get('display_parent_id'))||_.isEmpty(this.model.get('display_parent_type'))){preview.enabled=false;preview.label='LBL_PREVIEW_DISABLED_NO_RECORD';}else if(!app.acl.hasAccess("view",this.model.get('display_parent_type'))){preview.enabled=false;preview.label='LBL_PREVIEW_DISABLED_NO_ACCESS';}else if(this.model.get('preview_enabled')===false){preview.enabled=false;preview.label=this.model.get('preview_disabled_reason');}else{parentModel=this._getParentModel('record',this.context);if(parentModel&&parentModel.module==this.model.get('display_parent_type')&&parentModel.id===this.model.get('display_parent_id')){preview.enabled=false;preview.label='LBL_PREVIEW_DISABLED_SAME_RECORD';}}
return preview;},_getParentModel:function(layoutName,context){if(context){if(context.get('layout')===layoutName){return context.get('model');}else{return this._getParentModel(layoutName,context.parent);}}else{return null;}},checkPlaceholder:function(e){var el=e.currentTarget;if(el.textContent){el.setAttribute('data-hide-placeholder','true');}else{el.removeAttribute('data-hide-placeholder');}},bindDataChange:function(){if(this.commentsCollection){this.commentsCollection.on("add",function(){this.model.set('comment_count',this.model.get('comment_count')+1);},this);}
app.view.View.prototype.bindDataChange.call(this);},unbindData:function(){if(this.commentsCollection){this.commentsCollection.off();}
app.view.View.prototype.unbindData.call(this);},_dispose:function(){$(window).off('resize.'+this.cid);this.$(this._attachImageSelector).off('error');app.view.View.prototype._dispose.call(this);this.commentsCollection=null;this.opts=null;}})