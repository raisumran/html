/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('editor-para-ie',function(Y,NAME){var EditorParaIE=function(){EditorParaIE.superclass.constructor.apply(this,arguments);},HOST='host',NODE_CHANGE='nodeChange',P='p';Y.extend(EditorParaIE,Y.Plugin.EditorParaBase,{_getRoot:function(){return this.get(HOST).getInstance().EditorSelection.ROOT;},_onNodeChange:function(e){var host=this.get(HOST),inst=host.getInstance(),btag=inst.EditorSelection.DEFAULT_BLOCK_TAG,prev,LAST_CHILD=':last-child',para,b,para2,lc,lc2,found=false;switch(e.changedType){case'enter-up':para=((this._lastPara)?this._lastPara:e.changedNode);b=para.one('br.yui-cursor');if(this._lastPara){delete this._lastPara;}
if(b){if(b.previous()||b.next()){if(b.ancestor(P)){b.remove();}}}
if(!para.test(btag)){para2=para.ancestor(btag);if(para2){para=para2;para2=null;}}
if(para.test(btag)){prev=para.previous();if(prev){lc=prev.one(LAST_CHILD);while(!found){if(lc){lc2=lc.one(LAST_CHILD);if(lc2){lc=lc2;}else{found=true;}}else{found=true;}}
if(lc){host.copyStyles(lc,para);}}}
break;case'enter':if(e.changedNode.test('br')){e.changedNode.remove();}else if(e.changedNode.test('p, span')){b=e.changedNode.one('br.yui-cursor');if(b){b.remove();}}
break;}},initializer:function(){var host=this.get(HOST);if(host.editorBR){Y.error('Can not plug EditorPara and EditorBR at the same time.');return;}
host.on(NODE_CHANGE,Y.bind(this._onNodeChange,this));}},{NAME:'editorPara',NS:'editorPara',ATTRS:{host:{value:false}}});Y.namespace('Plugin');Y.Plugin.EditorPara=EditorParaIE;},'3.15.0',{"requires":["editor-para-base"]});