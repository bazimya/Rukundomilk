@extends('layouts/adminapp')

@section('title')
  Milk collection Dashboard
@endsection
    <!-- End of Page Wrapper -->

{{-- 7a5d4a4e7b9512c7ce5fd6567978a8c245a24ecaf0f8dcf1 --}}


@section('contain')
<div class="content-wrapper container-fluid px-5 mt-5 mb-4 trans-03-in-out">

    <div class="row">

      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" id="widget-01">

          <div class="widget-block">
              <h3 class="widget-title">Divice</h3>
            <div class="widget-content ">
              <div>
                <p class="h4"># ID: <small>{{ $allinfom->DevID }}</small> </p>

              </div>
            </div>
            <footer></footer>
          </div>

        </section>
      </div>

      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" >

          <div class="widget-block">

              <h3 class="widget-title">Gaz1</h3>

             <div class="widget-content">
              <div>
                <p class="h2"> <small>{{ $allinfom->gas1 }}</small> </p>

              </div>
            </div>
            <footer></footer>
          </div>

        </section>
      </div>
      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" >

          <div class="widget-block">

              <h3 class="widget-title">Gaz2</h3>

             <div class="widget-content">
              <div>
                <p class="h2"> <small>{{ $allinfom->gas2 }}</small> </p>

              </div>
            </div>
            <footer></footer>
          </div>

        </section>
      </div>
      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" >

          <div class="widget-block">

              <h3 class="widget-title">Gaz3 </h3>

             <div class="widget-content">
              <div>
                <p class="h2"> <small>{{ $allinfom->gas3 }}</small> </p>

              </div>
            </div>
            <footer></footer>
          </div>

        </section>
      </div>

      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" >

          <div class="widget-block">

              <h3 class="widget-title">Date And Time</h3>

             <div class="widget-content">
              <div>
                <p class="h4"> <small>{{ $allinfom->created_at }}</small> </p>


              </div>
            </div>
            <footer></footer>
          </div>

        </section>
      </div>
      <div class="col-xl-3 col-lg-6">
        <section class="widget headerline-danger small shadow-01" >

          <div class="widget-block">

              <h3 class="widget-title">Distance</h3>

             <div class="widget-content">
              <div>
                <p class="h2"> <small>{{ $allinfom->distance }}</small> </p>


              </div>
            </div>
            <footer></footer>
          </div>

        </section>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-12">
        <section class="widget shadow-01" id="widget-05">
          <div class="widget-block">

            {{-- <header> --}}
              <h3 class="widget-title">Charts Of Gas Distance  </h3>
              <p class="text-muted">
                Throug this charts You can see The  data Using The Graphs
                <br>It follows the previose
              </p>
            {{-- <div class="service-icons"><button data-toggle="modal" class="btn btn-icon-sm rounded-circle btn-transparent" data-target="#sourceCodeModal"><i class="fa fa-code" aria-hidden="true"></i></button></div></header> --}}

            <div class="row">

              <div class="col-lg-12 widget-content py-3 my-3"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <canvas id="chart-bar" width="219" height="182" class="chartjs-render-monitor" style="display: block; width: 219px; height: 182px;"></canvas>
                <script>
                  $(function () {
                    new Chart('chart-bar', {
                      type: 'bar',
                      data: {
                        labels: ['Gaz1', 'Gaz2', 'Gaz3', 'Distance'],
                        datasets: [{
                          backgroundColor: '#27A9E0',
                          data: [{!! $allinfom->gas1 !!} ,{!! $allinfom->gas2 !!},{!! $allinfom->gas3 !!},{!! $allinfom->distance !!}]
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


            </div>

            {{-- <footer>
              <a href="#!">See More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </footer> --}}

          </div>
        </section>
      </div>

    </div>



  </div>
  <script>
    window.onload = function() {
        setTimeout(function () {
            location.reload()
        }, 20000);
     };
</script>
@endsection



@section('script')

@endsection
