var randomScalingFactor = function () {
    return Math.round(Math.random() * 1000)
};

// var lineChartData = {
// 	labels: ["January", "February", "March", "April", "May", "June", "July"],
// 	datasets: [
// 		{
// 			label: "My First dataset",
// 			fillColor: "rgba(220,220,220,0.2)",
// 			strokeColor: "rgba(220,220,220,1)",
// 			pointColor: "rgba(220,220,220,1)",
// 			pointStrokeColor: "#fff",
// 			pointHighlightFill: "#fff",
// 			pointHighlightStroke: "rgba(220,220,220,1)",
// 			data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
// 		},
// 		{
// 			label: "My Second dataset",
// 			fillColor: "rgba(37, 190, 174, 0.2)",
// 			strokeColor: "rgba(37, 190, 174, 1)",
// 			pointColor: "rgba(37, 190, 174, 1)",
// 			pointStrokeColor: "#fff",
// 			pointHighlightFill: "#fff",
// 			pointHighlightStroke: "rgba(37, 190, 174, 1)",
// 			data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
// 		}
// 	]

// }
$.ajax({
    url: "graph-data",
    method: "GET",
    success: function (data) {
        console.log(data[0]);
        var total_num = data[0];
        var total_percentage = 100;

        console.log(data[1]);
        var xValues = [];
        var yValues = [];
        data[1].forEach(single_data => {
            xValues.push(single_data.user_age);

            yValues.push((single_data.count_user_age / total_num) * total_percentage);
        });

        // var barChartData = {
        //     // labels: ["January", "February", "March", "April", "May", "June", "July"],
        //     labels: xValues,
        //     datasets: [{
        //             fillColor: "rgba(220,220,220,0.5)",
        //             strokeColor: "rgba(220,220,220,0.8)",
        //             highlightFill: "rgba(220,220,220,0.75)",
        //             highlightStroke: "rgba(220,220,220,1)",
        //             // data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
        //         },
        //         {
        //             fillColor: "rgba(37, 190, 174, 0.2)",
        //             strokeColor: "rgba(37, 190, 174, 0.8)",
        //             highlightFill: "rgba(37, 190, 174, 0.75)",
        //             highlightStroke: "rgba(37, 190, 174, 1)",
        //             data: yValues
        //         }
        //     ]

        // }

        // var chart2 = document.getElementById("bar-chart").getContext("2d");
        // window.myBar = new Chart(chart2, {
        //     type: 'bar',
        //     responsive: true,
        //     scaleLineColor: "rgba(0,0,0,.2)",
        //     scaleGridLineColor: "rgba(0,0,0,.05)",
        //     scaleFontColor: "#c5c7cc"
        // });

        var chartdata = {
            labels: xValues,
            datasets: [{
                data: yValues,
                label: "Crime Case Report(%)" + "(total case: " + total_num + ")",
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }],
        };

        new Chart("bar-chart", {
            type: 'bar',
            data: chartdata,
            options: {
                scales: {
                    y: {
                        ticks: {
                            beginAtZero: true
                        },

                    }
                }
            },
        });
    },
});



var pieData = [{
        value: 300,
        color: "#35cebe",
        highlight: "#25beae",
        label: "Value 1"
    },
    {
        value: 50,
        color: "#a0a0a0",
        highlight: "#999999",
        label: "Value 2"
    },
    {
        value: 100,
        color: "#dfdfdf",
        highlight: "#cccccc",
        label: "Value 3"
    },
    {
        value: 120,
        color: "#f7f7f7",
        highlight: "#eeeeee",
        label: "Value 4"
    }

];

var doughnutData = [{
        value: 300,
        color: "#35cebe",
        highlight: "#25beae",
        label: "Value 1"
    },
    {
        value: 50,
        color: "#a0a0a0",
        highlight: "#999999",
        label: "Value 2"
    },
    {
        value: 100,
        color: "#dfdfdf",
        highlight: "#cccccc",
        label: "Value 3"
    },
    {
        value: 120,
        color: "#f7f7f7",
        highlight: "#eeeeee",
        label: "Value 4"
    }
];

var radarData = {
    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
    datasets: [{
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(37, 190, 174, 0.2)",
            strokeColor: "rgba(37, 190, 174, 0.8)",
            pointColor: "rgba(37, 190, 174, 1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(37, 190, 174, 1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
    ]
};

var polarData = [{
        value: 300,
        color: "#35cebe",
        highlight: "#25beae",
        label: "Value 1"
    },
    {
        value: 140,
        color: "#a0a0a0",
        highlight: "#999999",
        label: "Value 2"
    },
    {
        value: 220,
        color: "#dfdfdf",
        highlight: "#cccccc",
        label: "Value 3"
    },
    {
        value: 250,
        color: "#f7f7f7",
        highlight: "#eeeeee",
        label: "Value 4"
    }

];
