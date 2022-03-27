window.onload = function () {
    var chart4 = document.getElementById("pie-chart").getContext("2d");
    window.myPie = new Chart(chart4).Pie(pieData, {
        responsive: true,
        segmentShowStroke: false,
    });
    var chart5 = document.getElementById("radar-chart").getContext("2d");
    window.myRadarChart = new Chart(chart5).Radar(radarData, {
        responsive: true,
        scaleLineColor: "rgba(0,0,0,.05)",
        angleLineColor: "rgba(0,0,0,.2)",
    });
    var chart6 = document.getElementById("polar-area-chart").getContext("2d");
    window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
        responsive: true,
        scaleLineColor: "rgba(0,0,0,.2)",
        segmentShowStroke: false,
    });
};
var modal = document.getElementById("myModal");

$("#laravel_crud").prepend(user);
$("#productForm").trigger("reset");
$("#ajaxModel").modal("hide");

// // When the user clicks the button, open the modal

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
