$(document).ready(function () {
    $.ajax({
        url: "includes/data/chartinv.php",
        method: "GET",
        success: function (data) {
            var BasePagesDashboard = function () {
                // Chart.js Chart: http://www.chartjs.org/docs
                var initDashChartJS = function () {

                    // Get Chart Containers
                    var $dashChartLinesCnt12= jQuery('.js-chartjs-lines4')[0].getContext('2d');



                    // Set global chart options
                    var $globalOptions = {
                        scaleFontFamily: 'Roboto, Arial, sans-serif',
                            scaleFontColor: App.colors.text_muted,
                            scaleFontStyle: '500',
                            tooltipTitleFontFamily: 'Roboto, Arial, sans-serif',
                            tooltipCornerRadius: 2,
                            maintainAspectRatio: false,
                            responsive: true,
                            animation: true,
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        max: 5,
                                        min: 0,
                                        stepSize: 0.5
                                    }
                                }]
                            }


                    };

                    var newdata = JSON.parse(data);
                    var pro = newdata.Product;
                    var quan = newdata.Quantity;
                    console.log(newdata.total);


                    // Lines Chart Data 1
                    var $dashChartLinesData = {
                        labels: pro,
                        datasets: [{
                            label: 'This Week',
                            fillColor: App.hexToRgba(App.colors.blue, 20),
                                strokeColor: App.hexToRgba(App.colors.blue, 40),
                                pointColor: App.hexToRgba(App.colors.blue, 40),
                            
                            pointStrokeColor: '#000',
                            data: quan
                        }]
                    };



                    // Init Lines Chart
                    $dashChartLines2 = new Chart($dashChartLinesCnt12).Bar($dashChartLinesData, $globalOptions);



                };

                return {
                    init: function () {
                        // Init ChartJS chart
                        initDashChartJS();
                    }
                };
            }();

            // Initialize when page loads
            jQuery(function () {
                BasePagesDashboard.init();
            });

            /// eeeeeee ///


        },
        error: function (data) {
            console.log(data);
        }
    });
});

