function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
$(document).ready(function () {

    var year = new Date().getFullYear();

    document.querySelector("#footer").textContent = `Created by Group 1 ${year} `;

    var click = false;
    $(".menu-trigger").click(function () {
        //check click condition
        if (!click) {
            $(".menu-trigger").addClass("active"); // css active class
            click = true; //change click condition
            $(".menu").css({
                "right": "0"
            });
        } else {
            $(".menu-trigger").removeClass("active"); // css active class
            click = false; //change click condition
            $(".menu").css({
                "right": "-767px"
            });
        }
    });

    var disableClick = false;

    $("#edit-btn").click(function () {

        if (!disableClick) {
            disableClick = true;
            $(".disable").removeAttr("disabled");
        } else {
            $(".disable").attr("disabled", "disabled");
            disableClick = false;
        }

    });

    // Popup Form
    var modal = document.getElementById('myForm');
    $('#showForm').on('click', function (e) {
        e.preventDefault();
        modal.style.display = "block";
    });

    $('#closeForm').on('click', function (e) {
        e.preventDefault();
        modal.style.display = "none";
    });

    // Popup Form
    var modalTwo = document.getElementById('myFormTwo');
    $('#showFormTwo').on('click', function (e) {
        e.preventDefault();
        modalTwo.style.display = "block";
    });

    $('#closeFormTwo').on('click', function (e) {
        e.preventDefault();
        modalTwo.style.display = "none";
    });

    $('#sendFormTwo').one('click', function (e) {
        e.preventDefault();
        console.log("Ok");
        // $(this).attr("disabled", "disabled");
    });

    //// ===== Scroll to Top ==== 
    window.addEventListener('scroll', e => {
        var el = document.getElementById('jsScroll');
        if (window.scrollY > 100) {
            el.classList.add('visible');
        } else {
            el.classList.remove('visible');
        }
    });

});


$(document).ready(function () {
    $('.like').click(function () {
        var id = $(this).data('id');
        $.ajax({
            method: "GET",
            url: `/like/${id}`,
            success: function (res) {
                $('.like').text(res.likes)
                if ($('.like').hasClass('like_disable')) {
                    $('.like').removeClass('like_disable');
                } else {
                    $('.like').addClass('like_disable');
                }
            }
        })
    })
})

function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
}
