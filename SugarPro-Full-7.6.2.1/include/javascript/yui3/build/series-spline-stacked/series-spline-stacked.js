/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-spline-stacked',function(Y,NAME){Y.StackedSplineSeries=Y.Base.create("stackedSplineSeries",Y.SplineSeries,[Y.StackingUtil],{setAreaData:function()
{Y.StackedSplineSeries.superclass.setAreaData.apply(this);this._stackCoordinates.apply(this);}},{ATTRS:{type:{value:"stackedSpline"}}});},'3.15.0',{"requires":["series-stacked","series-spline"]});