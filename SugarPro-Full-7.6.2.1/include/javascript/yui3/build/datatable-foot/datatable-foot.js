/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('datatable-foot',function(Y,NAME){Y.namespace('DataTable').FooterView=Y.Base.create('tableFooter',Y.View,[],{TFOOT_TEMPLATE:'<tfoot class="{className}"/>',getClassName:function(){var host=this.host,NAME=(host&&host.constructor.NAME)||this.constructor.NAME;if(host&&host.getClassName){return host.getClassName.apply(host,arguments);}else{return Y.ClassNameManager.getClassName.apply(Y.ClassNameManager,[NAME].concat(Y.Array(arguments,0,true)));}},render:function(){var tfoot=this.tfootNode||(this.tfootNode=this._createTFootNode());if(this.host&&this.host._theadNode){this.host._theadNode.insert(tfoot,'after');}
return this;},_createTFootNode:function(){return Y.Node.create(Y.Lang.sub(this.TFOOT_TEMPLATE,{className:this.getClassName('foot')}));},initializer:function(config){this.host=(config&&config.host);}});},'3.15.0',{"requires":["datatable-core","view"]});