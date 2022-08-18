<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>

<style type="text/css">
.single_card:nth-child(n + 4) {
    display: none;
}
#loadMore {
    color: green;
    cursor: pointer;
    font-size: 22px;
    padding: 20px;
}
#loadMore:hover {
    color: black;
}
.gallary-header.text-center h1 {
    color: #127786;
}
#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(21 168 191);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgb(8 102 115);
}
#return-to-top:hover i {
    color: #fff;
}
.desc-tabs .nav-tabs {
    margin-bottom: 35px;
}
.p_special {
    padding: 0px 40px;
    text-align: justify;
    font-weight: 400;
    font-family: poppins, sans-serif;
    font-size: 18px;
}
.about-view.packages-btn {
    width: 100%;
    background-color: #e2860e;
    border-color: #e2860e;
}
.a_href {
    font-size: 22px;
    color: #0f0f6c !important;
    font-family: initial;
    padding: 10px;
}
.about-view.packages-btn:hover {
    background: #a05e07;
    border-color: #a05e07;
}

.service {
    margin-top: 35px;
}

@media only screen and (min-width: 768px) {
    .col-sm-6 {
        width: 25%;
    }
}

@media only screen and (min-width: 768px) {
    .packages-content .row .col-md-4 {
        margin-top: 15px;
        width: 33%;
    }
}

@media only screen and (min-width: 768px) {
    .col-sm-5 {
        width: 10.666667%;
    }
}

.travel-select-icon .form-control,
.travel-check-icon .form-control {
    width: 100%;
}

.searchbarg {
    height: 33px;
}

.fa-search {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    cursor: pointer;
    pointer-events: inherit;
    font-size: 20px;
}

.fa {
    font-style: normal;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
}

#return-to-top {
	display: none;
}

</style>

<script>
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {
        $("#return-to-top").fadeIn(200);
    } else {
        $("#return-to-top").fadeOut(200);
    }
});
$("#return-to-top").click(function () {
    $("body,html").animate(
        {
            scrollTop: 0,
        },
        500
    );
});

window.addEventListener(
    "touchmove",
    (scroll) => {
        console.log(scroll);
    },
    { passive: true }
);


</script>
