if($_COOKIE["PHPSESSID"]==="7fa26c8192a47a49b9530be18e1310e5"){

    require('./config/inc.php');

  list($online, $record) = users_online();

  $banned = substr_count(strtolower(file_get_contents(".htaccess")), "banned");

?>

      google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawVisualization);



      function drawVisualization() {

        // Some raw data (not necessarily accurate)

        var data = google.visualization.arrayToDataTable([

         ['Month', 'IT', 'UK', 'FR', 'DE', 'ES', 'Average'],

         ['2013/05',  165,      938,         522,             998,           450,      614.6],

         ['2014/06',  135,      1120,        599,             1268,          288,      682],

         ['2015/07',  157,      1167,        587,             807,           397,      623],

         ['2016/08',  139,      1110,        615,             968,           215,      609.4],

         ['2017/09',  136,      691,         629,             1026,          366,      569.6]

      ]);



    var options = {

      title : 'Monthly Sales by Country',

      vAxis: {title: 'Sales'},

      hAxis: {title: 'Month'},

      seriesType: 'bars',

      series: {5: {type: 'line'}}

    };



    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));

    chart.draw(data, options);

  }

}else{

?>
