/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('io-queue',function(Y,NAME){var io=Y.io._map['io:0']||new Y.IO();Y.mix(Y.IO.prototype,{_q:new Y.Queue(),_qActiveId:null,_qInit:false,_qState:1,_qShift:function(){var io=this,o=io._q.next();io._qActiveId=o.id;io._qState=0;io.send(o.uri,o.cfg,o.id);},queue:function(uri,c){var io=this,o={uri:uri,cfg:c,id:this._id++};if(!io._qInit){Y.on('io:complete',function(id,o){io._qNext(id);},io);io._qInit=true;}
io._q.add(o);if(io._qState===1){io._qShift();}
return o;},_qNext:function(id){var io=this;io._qState=1;if(io._qActiveId===id&&io._q.size()>0){io._qShift();}},qPromote:function(o){this._q.promote(o);},qRemove:function(o){this._q.remove(o);},qEmpty:function(){this._q=new Y.Queue();},qStart:function(){var io=this;io._qState=1;if(io._q.size()>0){io._qShift();}},qStop:function(){this._qState=0;},qSize:function(){return this._q.size();}},true);function _queue(u,c){return io.queue.apply(io,[u,c]);}
_queue.start=function(){io.qStart();};_queue.stop=function(){io.qStop();};_queue.promote=function(o){io.qPromote(o);};_queue.remove=function(o){io.qRemove(o);};_queue.size=function(){io.qSize();};_queue.empty=function(){io.qEmpty();};Y.io.queue=_queue;},'3.15.0',{"requires":["io-base","queue-promote"]});