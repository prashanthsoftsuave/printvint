export default {
    init: function () {

        if ($("body").hasClass("single") || window.innerWidth < 990) {
            $("header.banner").removeClass("top");
        }

        function setMenuStyle() {
            if ($(document).scrollTop() > 50 || $("body").hasClass("single") || $("body").hasClass("lock-bg") || window.innerWidth < 990) {
                $("header.banner").removeClass("top");
            } else {
                $("header.banner").addClass("top");
            }
        }

        setMenuStyle();

        $(".nav-icon").click(function () {
            setMenuStyle();
        });

        $(document).on("scroll", function () {
            setMenuStyle();
        });

        $(".testimonial-slider").slick({
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000,

            responsive: [
                {

                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        adaptiveHeight: true,
                        autoplay: false,
                    },
                },
            ],
        });

        $(".slick.marquee-images").slick({
            speed: 5000,
            autoplay: true,
            autoplaySpeed: 0,
            cssEase: "linear",
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            infinite: true,
            initialSlide: 1,
            arrows: false,
            buttons: false,
        });

        $("body").on("mouseenter mouseleave", "#primary-navigation .dropdown:not(.nav-link)", function (e) {
            var _d = $(e.target).closest(".dropdown");
            _d.addClass("show");
            setTimeout(function () {
                _d[_d.is(":hover") ? "addClass" : "removeClass"]("show");
                $("[data-toggle=\"dropdown\"]", _d).attr("aria-expanded", _d.is(":hover"));
            }, 300);
        });
    },
    finalize() {
        $(function () {

            const selectCountries =  require("../util/countries.json");

            const countrySelect = $(".country select");

            $.each(selectCountries, function (key, value) {
                countrySelect.append($("<option>", {value: value.code})
                    .text(value.name));
            });

            $(".country select option[value='US']").prop("selected", true);


            let getProvincesArr = function (arr) {
                var byCountry = {};

                arr.forEach(val => {

                    if (byCountry.hasOwnProperty(val.country) == false) {
                        byCountry[val.country] = []
                    }

                    byCountry[val.country].push({
                        short : val.short,
                        name : val.name,
                    })

                });

                return byCountry
            };

            let setProvinces = function (state) {
                let options = provincesArr[state] ? provincesArr[state] : [{ short : "", name : "Outside of US & Canada" }];

                stateSelect.empty();

                $.each(options, function (key, value) {

                    stateSelect.append($("<option>", {value: value.short})
                        .text(value.name));
                });

            }

            const provincesObj = require("../util/provincesObj.json");

            let stateSelect = $(".state select");
            stateSelect.empty();

            let provincesArr = getProvincesArr(provincesObj);

            setProvinces("US");

            countrySelect.change(function(){
                let value = $(this).val();
                setProvinces(value);
            });
        });

    },
};

$(document).ready(function () {
    $(document).on("click", "a[rel$='external']", function () {
        $(this).attr("target", "_blank");
    });

    $(document).on("click", "a[href$='.pdf']", function () {
        $(this).attr("target", "_blank");
    });

    $("a").each(function () {
        var a = new RegExp("/" + window.location.host + "/");
        var aMailto = new RegExp("mailto:");

        if (!a.test(this.href) && !aMailto.test(this.href)) {
            $(this).click(function (event) {
                event.preventDefault();
                event.stopPropagation();
                window.open(this.href, "_blank");
            });
        }
    });
});
