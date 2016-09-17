//Morris charts snippet - js

$.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
$.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

var valueSafe = safeArray.length;

var valueDanger = dangerArray.length;

 var totalSafe= (valueSafe/(valueDanger+valueSafe))*100;
var totalDanger= (valueDanger/(valueDanger+valueSafe))*100;
      Morris.Donut({
        element: 'donut-example',
        colors: [
          '#2196F3',
          '#1976D2'
        ],
        data: [
         {label: "Safe", value: totalSafe},
         {label: "Danger", value: totalDanger}
       ],
        formatter: function (y) {
          return y + "%";
        },
        resize: true
      });

      Morris.Bar({
         element: 'bar-example',
         data: [
            {y: 'Day', a: valueSafe,  b: valueDanger},
            {y: 'Week', a: valueSafe,  b: valueDanger},
            {y: 'Month', a: valueSafe,  b: valueDanger},
            {y: 'Year', a: valueSafe,  b: valueDanger}
         ],
         xkey: 'y',
         ykeys: ['a', 'b'],
         labels: ['Safe', 'Danger'],
         barColors: function(row, series, type) {
  if(series.key == 'b')
  {
      return "#2196F3";
  }
  else
  {
    return "#1976D2";
  }
}

      });

});
});
