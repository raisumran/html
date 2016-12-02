/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('axis-category-base',function(Y,NAME){var Y_Lang=Y.Lang;function CategoryImpl()
{}
CategoryImpl.NAME="categoryImpl";CategoryImpl.ATTRS={labelFormat:{value:null},calculateEdgeOffset:{value:true}};CategoryImpl.prototype={formatLabel:function(val)
{return val;},_indices:null,GUID:"yuicategoryaxis",_type:"category",_updateMinAndMax:function()
{this._dataMaximum=Math.max(this.get("data").length-1,0);this._dataMinimum=0;},_getKeyArray:function(key,data)
{var i=0,obj,keyArr=[],labels=[],len=data.length;if(!this._indices)
{this._indices={};}
for(;i<len;++i)
{obj=data[i];keyArr[i]=i;labels[i]=obj[key];}
this._indices[key]=keyArr;return labels;},getDataByKey:function(value)
{if(!this._indices)
{this.get("keys");}
var keys=this._indices;if(keys&&keys[value])
{return keys[value];}
return null;},getTotalMajorUnits:function()
{return this.get("data").length;},_getCoordFromValue:function(min,max,length,dataValue,offset)
{var range,multiplier,valuecoord;if(Y_Lang.isNumber(dataValue))
{range=max-min;multiplier=length/range;valuecoord=(dataValue-min)*multiplier;valuecoord=offset+valuecoord;}
else
{valuecoord=NaN;}
return valuecoord;},getKeyValueAt:function(key,index)
{var value=NaN,keys=this.get("keys");if(keys[key]&&keys[key][index])
{value=keys[key][index];}
return value;}};Y.CategoryImpl=CategoryImpl;Y.CategoryAxisBase=Y.Base.create("categoryAxisBase",Y.AxisBase,[Y.CategoryImpl]);},'3.15.0',{"requires":["axis-base"]});