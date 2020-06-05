@extends('layouts/adminapp')

@section('title')
  Processed clearances | Dashboard
@endsection
    <!-- End of Page Wrapper -->

{{-- 7a5d4a4e7b9512c7ce5fd6567978a8c245a24ecaf0f8dcf1 --}}


@section('contain')
<div class="content-wrapper container-fluid px-5 mt-5 mb-4 trans-03-in-out">

    <div class="row">

      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" id="widget-01">

          <div class="widget-block">
            <header>
              <h3 class="widget-title">Income</h3>
              <!--<p class="text-muted">-->
              <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit-->
              <!--</p>-->
            <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header>
            <div class="widget-content pt-1">
              <div>
                <p class="h2">$23,654.56 </p>
                <p class="text-muted mt-2">Total per Month</p>
              </div>
            </div>
            <footer></footer>
          </div>
          <span class="badge badge-success">
                20% <i class="fa fa-level-up"></i>
              </span>
        </section>
      </div>

      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" id="widget-02">

          <div class="widget-block">
            <header>
              <h3 class="widget-title">Visits</h3>
              <!--<p class="text-muted">-->
              <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit-->
              <!--</p>-->
            <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header>
            <div class="widget-content pt-1">
              <div>
                <p class="h2">125,6 <span>k</span></p>
                <p class="text-muted mt-2">Total per Month</p>
              </div>
            </div>
            <footer></footer>
          </div>
          <span class="badge badge-danger">
                12% <i class="fa fa-level-down"></i>
              </span>
        </section>
      </div>

      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" id="widget-03">

          <div class="widget-block">
            <header>
              <h3 class="widget-title">Orders</h3>
              <!--<p class="text-muted">-->
              <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit-->
              <!--</p>-->
            <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header>
            <div class="widget-content pt-1">
              <div>
                <p class="h2">367,650</p>
                <p class="text-muted mt-2">New Paid Orders</p>
              </div>
            </div>
            <footer></footer>
          </div>
          <span class="badge badge-warning">
                Live <i class="fa fa-heart" aria-hidden="true"></i>
              </span>
        </section>
      </div>

      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" id="widget-04">

          <div class="widget-block">
            <header>
              <h3 class="widget-title">New Accounts</h3>
              <!--<p class="text-muted">-->
              <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit-->
              <!--</p>-->
            <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header>
            <div class="widget-content pt-1">
              <div>
                <p class="h2">400,500</p>
                <p class="text-muted mt-2">From the Start</p>
              </div>
            </div>
            <footer></footer>
          </div>
          <span class="badge badge-primary">
                Now <i class="fa fa-bolt" aria-hidden="true"></i>
              </span>
        </section>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-12">
        <section class="widget shadow-01" id="widget-05">
          <div class="widget-block">

            <header>
              <h3 class="widget-title">Sales</h3>
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header>

            <div class="row">

              <div class="col-lg-8 widget-content py-3 my-3"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <canvas id="chart-bar" width="219" height="182" class="chartjs-render-monitor" style="display: block; width: 219px; height: 182px;"></canvas>
                <script>
                  $(function () {
                    new Chart('chart-bar', {
                      type: 'bar',
                      data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                        datasets: [{
                          backgroundColor: '#27A9E0',
                          data: [12, 22, 25, 37, 33, 34, 38, 22, 29, 26, 33, 21]
                        }]
                      },
                      options: {
                        maintainAspectRatio: false,
                        legend: {
                          display: false
                        },
                        scales: {
                          yAxes: [{
                            ticks: {
                              fontColor: "#999999"
                            }
                          }],
                          xAxes: [{
                            ticks: {
                              fontColor: "#999999"
                            }
                          }]
                        }
                      }
                    });
                  });
                </script>
              </div>

              <div class="col-lg-4 widget-content pb-5">

                <div class="mt-3">
                  <h4 class="witget-title mb-0">745</h4>
                  <p class="text-muted mb-1">Total orders trough Marketplaces</p>
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="mt-3">
                  <h4 class="witget-title mb-0">6,764</h4>
                  <p class="text-muted mb-1">Total Affiliate Sales</p>
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="mt-3">
                  <h4 class="witget-title mb-0">12,876</h4>
                  <p class="text-muted mb-1">Subscribtion Sales</p>
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

              </div>

            </div>

            <footer>
              <a href="#!">See More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </footer>

          </div>
        </section>
      </div>

    </div>

    <div class="row">


      <div class="col-xl-8 col-lg-6">


        <div class="row">

          <div class="col-xl-4 col-md-12">
            <section class="widget shadow-01" id="widget-08">
              <div class="widget-block">

                <header>
                  <h3 class="widget-title">Traffic Source</h3>
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore
                  </p>
                <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header>
                <div class="widget-content py-3"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                  <canvas id="chart-doughnut" width="219" height="150" class="chartjs-render-monitor" style="display: block; width: 219px; height: 150px;"></canvas>
                  <script>
                    $(function () {
                      new Chart('chart-doughnut', {
                        type: 'doughnut',
                        data: {
                          labels: ['Yellow', 'Red', 'Green'],
                          datasets: [{
                            backgroundColor: ['#F9CE5E', '#FF675F', '#71C7C1'],
                            data: [33, 10, 40]
                          }]
                        },
                        options: {
                          maintainAspectRatio: false,
                          legend: {display: false}
                        }
                      });
                    });
                  </script>
                </div>
                <footer>
                  <a href="#!">See More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </footer>

              </div>
            </section>
          </div>

          <div class="col-xl-4 col-md-12">
            <section class="widget shadow-01" id="widget-09">
              <div class="widget-block">

                <header>
                  <h3 class="widget-title">Geography</h3>
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore
                  </p>
                <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header>
                <div class="widget-content py-3"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                  <canvas id="chart-pie" width="219" height="150" class="chartjs-render-monitor" style="display: block; width: 219px; height: 150px;"></canvas>
                  <script>
                    $(function () {
                      new Chart('chart-pie', {
                        type: 'pie',
                        data: {
                          datasets: [{
                            data: [33, 12, 77],
                            backgroundColor: ['#27A9E0', '#F33F5A', '#9CABC5']
                          }],
                          labels: ['Blue', 'Red', 'Grey']
                        },
                        options: {
                          maintainAspectRatio: false,
                          legend: {display: false}
                        }
                      });
                    });
                  </script>
                </div>
                <footer>
                  <a href="#!">See More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </footer>

              </div>
            </section>
          </div>

          <div class="col-xl-4 col-md-12">
            <section class="widget shadow-01" id="widget-10">
              <div class="widget-block">

                <header>
                  <h3 class="widget-title">Traffic Source</h3>
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore
                  </p>
                <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header>
                <div class="widget-content py-3"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

                  <canvas id="chartjs-3" width="219" height="150" class="chartjs-render-monitor" style="display: block; width: 219px; height: 150px;"></canvas>
                  <script>
                    $(function () {
                      new Chart(document.getElementById("chartjs-3"), {
                        "type": "radar",
                        "data": {
                          "labels": ["1", "2", "3", "4", "5", "6", "7"],
                          "datasets": [{
                            "label": "My First Dataset",
                            "data": [32, 1, 24, 11, 28, 30, 13],
                            "fill": true,
                            "backgroundColor": "rgba(255, 99, 132, 0.2)",
                            "borderColor": "#EC807A",
                            "pointBackgroundColor": "rgb(255, 99, 132)",
                            "pointBorderColor": "#fff",
                            "pointHoverBackgroundColor": "#fff",
                            "pointHoverBorderColor": "rgb(255, 99, 132)"
                          },
                            {
                              "label": "My Second Dataset",
                              "data": [9, 12, 34, 11, 27, 18, 29],
                              "fill": true,
                              "backgroundColor": "rgba(54, 162, 235, 0.2)",
                              "borderColor": "rgb(54, 162, 235)",
                              "pointBackgroundColor": "rgb(54, 162, 235)",
                              "pointBorderColor": "#fff",
                              "pointHoverBackgroundColor": "#fff",
                              "pointHoverBorderColor": "rgb(54, 162, 235)"
                            }]
                        },
                        "options": {
                          maintainAspectRatio: false,
                          legend: {display: false},
                          "elements": {
                            "line": {
                              "tension": 0,
                              "borderWidth": 2
                            }
                          }
                        }
                      });
                    });
                  </script>

                </div>
                <footer>
                  <a href="#!">See More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </footer>

              </div>
            </section>
          </div>

        </div>

      </div>

    </div>


  </div>

@endsection



@section('script')

@endsection
