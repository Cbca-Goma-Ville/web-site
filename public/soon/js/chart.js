$(window).on('load', function(){
    
    'use strict';
      
    $("#quick-visit").sparkline([1,5,2,7,9,6,7,11,9,13,12,15,14,18], {
    type: 'line',
    width: '330',
    height: '100',
    lineColor: '#556b8d',
    fillColor: '#eef0f3',
    minSpotColor: '#556b8d',
    maxSpotColor: '#556b8d'});

     $("#quick-view").sparkline([6,4,7,2,9,8,2,5,4], {
    type: 'line',
    width: '330',
    height: '100',
    lineColor: '#5793de',
    fillColor: '#edf3fb',
    minSpotColor: '#5793de',
    maxSpotColor: '#5793de'});

    $("#quick-page").sparkline([7,3,5,7,8,9,3,5,6], {
    type: 'line',
    width: '330',
    height: '100',
    lineColor: '#acb5c6',
    fillColor: '#f6f7f9',
    minSpotColor: '#acb5c6',
    maxSpotColor: '#acb5c6'});

    $("#quick-time").sparkline([7,5,2,6,7,8,5,8,7], {
    type: 'line',
    width: '330',
    height: '100',
    lineColor: '#85c744',
    fillColor: '#f3f9ec',
    minSpotColor: '#85c744',
    maxSpotColor: '#85c744'});

    $("#quick-returning").sparkline([4,6,7,8,3,5,8,6,5], {
    type: 'line',
    width: '330',
    height: '100',
    lineColor: '#efa335',
    fillColor: '#fdf5ea',
    minSpotColor: '#efa335',
    maxSpotColor: '#efa335'});

    $("#quick-rate").sparkline([2,7,7,11,9,13,12,5,7], {
    type: 'line',
    width: '330',
    height: '100',
    lineColor: '#e74c3c',
    fillColor: '#fdedeb',
    minSpotColor: '#e74c3c',
    maxSpotColor: '#e74c3c'});

});