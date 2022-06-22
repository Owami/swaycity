$(document).ready(function () {
    $.ajax({
        url: "includes/data/chartindex.php",
        method: "GET",
        success: function (data) {
            var BasePagesDashboard = function () {
                // Chart.js Chart: http://www.chartjs.org/docs
                var initDashChartJS = function () {

                    // Get Chart Containers
                    var $dashChartLinesCnt1 = jQuery('.js-chartjs-lines1')[0].getContext('2d');



                    // Set global chart options
                    var $globalOptions = {
                        showScale: false,
                        tooltipCornerRadius: 2,
                        maintainAspectRatio: false,
                        responsive: true,
                        animation: true,
                        pointDotStrokeWidth: 2,
                        
                        
                    };

                    var newdata = JSON.parse(data);
                    var date = newdata.date;
                    var amount = newdata.total;
                    console.log(newdata.total);
                    

                    // Lines Chart Data 1
                    var $dashChartLinesData = {
                        labels: date,
                        datasets: [{
                            label: 'This Week',
                            fillColor: 'rgba(255, 255, 255, .1)',
                            strokeColor: 'rgba(255, 255, 255, .38)',
                            pointColor: App.colors.blue,
                            pointStrokeColor: '#fff',
                            data: amount
                        }]
                    };



                    // Init Lines Chart
                    $dashChartLines = new Chart($dashChartLinesCnt1).Line($dashChartLinesData, $globalOptions);



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

///

/*
Document: base_pages_dashboard.js
Author: Rustheme
Description: Custom JS code used in Dashboard Page (index.html)
 */

// var BasePagesDashboard = function () {
//     // Chart.js Chart: http://www.chartjs.org/docs
//     var initDashChartJS = function () {

//         // Get Chart Containers
//         var $dashChartLinesCnt1 = jQuery('.js-chartjs-lines1')[0].getContext('2d');



//         // Set global chart options
//         var $globalOptions = {
//             showScale: false,
//             tooltipCornerRadius: 2,
//             maintainAspectRatio: false,
//             responsive: true,
//             animation: false,
//             pointDotStrokeWidth: 2,
//         };

//         // Lines Chart Data 1
//         var $dashChartLinesData = {
//             labels: ['2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014'],
//             datasets: [{
//                 label: 'This Week',
//                 fillColor: 'rgba(255, 255, 255, .1)',
//                 strokeColor: 'rgba(255, 255, 255, .38)',
//                 pointColor: App.colors.blue,
//                 pointStrokeColor: '#fff',
//                 data: [20, 40, 24, 75, 16, 42, 20, 42, 40, 65, 48, 56, 80, 95]
//             }]
//         };



//         // Init Lines Chart
//         $dashChartLines = new Chart($dashChartLinesCnt1).Line($dashChartLinesData, $globalOptions);



//     };

//     return {
//         init: function () {
//             // Init ChartJS chart
//             initDashChartJS();
//         }
//     };
// }();

// // Initialize when page loads
// jQuery(function () {
//     BasePagesDashboard.init();
// });
