<script type="text/javascript" src="{{asset('https://www.gstatic.com/charts/loader.js')}}"></script>

@extends('include.master')

    

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
         <?php echo $chartData; ?>
        ]);

        var piechart_options = {title:'Number of Asset ',
                       width:500,
                       height:350
                       };
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);


        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'user');
        data.addRows([
         <?php echo $chartData2; ?>
        ]);
        var barchart_options = {title:'Active and In-active Assets',
                       width:500,
                       height:350,
                       colors:['#FF3F16',"Yellow"],
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);


      }
    </script>
  
  
  
@section('contents')
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid rgb(255, 0, 0)"></div></td>
        <td><div id="barchart_div" style="border: 1px solid rgb(47, 0, 255)"></div></td>
      </tr>
    </table>

  @endsection
