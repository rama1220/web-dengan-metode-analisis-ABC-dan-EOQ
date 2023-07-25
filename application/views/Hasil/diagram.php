<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Diagram Pareto Amenities</h4>
                    </div>
                    <div class="row">
                        <section class="content">

                            <?php

                            foreach ($data as $da => $d) {
                                $p = $d->n_penyerapandana / $Sum->jumlah * 100;
                                $p1 = number_format($p, 1);
                                $arr[] = ['label' => $d->nama, 'y' => $p1];
                            }
                            ?>
                            <script>
                                window.onload = function() {

                                    var chart = new CanvasJS.Chart("chartContainer", {
                                        title: {
                                            text: "Diagram Pareto Amenities Vinn Villa"
                                        },
                                        axisY: {
                                            title: "Number of Locations",
                                            lineColor: "#4F81BC",
                                            tickColor: "#4F81BC",
                                            labelFontColor: "#4F81BC"
                                        },
                                        axisY2: {
                                            title: "Percent",
                                            suffix: "%",
                                            lineColor: "#C0504E",
                                            tickColor: "#C0504E",
                                            labelFontColor: "#C0504E"
                                        },
                                        data: [{
                                            type: "column",
                                            dataPoints: <?= json_encode($arr, JSON_NUMERIC_CHECK); ?>

                                        }]
                                    });
                                    chart.render();
                                    createPareto();

                                    function createPareto() {
                                        var dps = [];
                                        var yValue, yTotal = 0,
                                            yPercent = 0;

                                        for (var i = 0; i < chart.data[0].dataPoints.length; i++)
                                            yTotal += chart.data[0].dataPoints[i].y;

                                        for (var i = 0; i < chart.data[0].dataPoints.length; i++) {
                                            yValue = chart.data[0].dataPoints[i].y;
                                            yPercent += (yValue / yTotal * 100);
                                            dps.push({
                                                label: chart.data[0].dataPoints[i].label,
                                                y: yPercent
                                            });
                                        }

                                        chart.addTo("data", {
                                            type: "line",
                                            yValueFormatString: "0.##\"%\"",
                                            dataPoints: dps,

                                        });
                                        chart.data[1].set("axisYType", "secondary", false);
                                        chart.axisY[0].set("maximum", yTotal);
                                        chart.axisY2[0].set("maximum", 100);
                                    }

                                }
                            </script>

                            <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                            <script src="<?php echo base_url() ?>assets/js/canvas.js"></script>


                        </section>

                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>Penjelasan</b></h3>
                                        <h4 style="text-align:justify; line-height:1.5; font-family:'Times New Roman', Times, serif"><span>
                                                Diagram Pareto merupakan salah satu tools (alat) dari QC 7 Tools yang sering digunakan dalam hal pengendalian Mutu. Pada dasarnya, Diagram Pareto adalah grafik batang yang menunjukkan masalah berdasarkan urutan banyaknya jumlah kejadian. Urutannya mulai dari jumlah permasalahan yang paling banyak terjadi sampai yang paling sedikit terjadi. Dalam Grafik, ditunjukkan dengan batang grafik tertinggi (paling kiri) hingga grafik terendah (paling kanan).
                                                <br>
                                                Diagram Pareto sangat bermanfaat dalam menentukan dan mengidentifikasikan prioritas permasalahan yang akan diselesaikan. Permasalahan yang paling banyak dan sering terjadi adalah prioritas utama kita untuk melakukan tindakan.
                                            </span>
                                        </h4>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
    </div>