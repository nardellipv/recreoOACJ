  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">

  <div class="row row-cols-1">
      <div class="col">
          <div class="card radius-10">
              <div class="card-body text-center">
                  <p class="mb-0 fs-6">Gráfico de estudiantes inscriptos</p>
                  <div id="container"></div>
              </div>
          </div>
      </div>
  </div>


  <script>
      anychart.onDocumentReady(function() {

          // set the data
          var data = [{
                  x: 'Nivel 1',
                  value: {{ $countStudentLevel1 }}
              },
              {
                  x: 'Nivel 2',
                  value: {{ $countStudentLevel2 }}
              }
          ];

          // create the chart
          var chart = anychart.pie();

          // add the data
          chart.data(data);

          // sort elements
          chart.sort('desc');

          // set legend position
          chart.legend().position('right');

          // display the chart in the container
          chart.container('container');
          chart.draw();
      });
  </script>
