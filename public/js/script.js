//
//window.onload = function () {
//  var chart1 = document.getElementById("line-chart").getContext("2d");
//  window.myLine = new Chart(chart1).Line(lineChartData, {
//    responsive: true,
//    scaleLineColor: "rgba(0,0,0,.2)",
//    scaleGridLineColor: "rgba(0,0,0,.05)",
//    scaleFontColor: "#c5c7cc"
//  });
//  var chart2 = document.getElementById("bar-chart").getContext("2d");
//  window.myBar = new Chart(chart2).Bar(barChartData, {
//    responsive: true,
//    scaleLineColor: "rgba(0,0,0,.2)",
//    scaleGridLineColor: "rgba(0,0,0,.05)",
//    scaleFontColor: "#c5c7cc"
//  });
//  var chart4 = document.getElementById("pie-chart").getContext("2d");
//  window.myPie = new Chart(chart4).Pie(pieData, {
//    responsive: true,
//    segmentShowStroke: false
//  });
//  var chart5 = document.getElementById("radar-chart").getContext("2d");
//  window.myRadarChart = new Chart(chart5).Radar(radarData, {
//    responsive: true,
//    scaleLineColor: "rgba(0,0,0,.05)",
//    angleLineColor: "rgba(0,0,0,.2)"
//  });
//  var chart6 = document.getElementById("polar-area-chart").getContext("2d");
//  window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
//    responsive: true,
//    scaleLineColor: "rgba(0,0,0,.2)",
//    segmentShowStroke: false
//  });
//};
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#createNewProduct').click(function() {
        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create New Post");
        $('#ajaxModel').modal('show');
    });

    $('#saveBtn').click(function(e) {
        e.preventDefault();
        $(this).html('Sending..');
        console.log("hello");
        $.ajax({
            data: $('#productForm').serialize(),
            url: "http://localhost:8000/admin/ajax/post",
            type: "POST",
            dataType: 'json',
            success: function(data) {
                console.log(data);
                //console.log(data.data.name);
                //var user = '<tr id="product_id' + data.data.id + '"><td>' + data.data
                //    .id + '</td><td>' + data.data.name + '</td><td>' + data.data.email +
                //    '</td><td>' + data.data.dob + '</td><td>' + data.data.major +
                //    '</td><td>' + data.data.address + '</td><td>' + data.data.phone +
                //    '</td>';
                //user += '<td><a href="javascript:void(0)" id="edit-user" data-id="' +
                //    data.data.id +
                //    '" class="btn btn-info editStudent">Edit</a><a href="javascript:void(0)" id="delete-user" data-id=' +
                //    data.data.id +
                //    '" class="btn btn-danger deleteStudent">Delete</a></td></tr>';

                $('#laravel_crud').prepend(user);
                $('#productForm').trigger("reset");
                $('#ajaxModel').modal('hide');


            },
            error: function(data) {
                console.log('Error:', data);
                $('#saveBtn').html('Save Changes');
            }
        });
    });

    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });

   });



