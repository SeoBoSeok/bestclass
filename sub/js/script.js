$(function() {
        //for slick slider
        $('.slider').slick({
            autoplay: true,
			autoplaySpeed:3000,
			arrows: true,
			prevArrow: $('#vis_arrow_L'),
			nextArrow: $('#vis_arrow_R'),
			fade: true,
			speed: 500,
			infinite: true,
        }).slickAnimation();

        var time = 3;
        var $bar,
            isPause,
            tick,
            percentTime;

        $bar = $('.slider-progress .progress');

        function startProgressbar() {
            resetProgressbar();
            percentTime = 0;
            isPause = false;
            tick = setInterval(interval, 10);
        }

        function interval() {
            if (isPause === false) {
                percentTime += 1 / (time + 0.1);
                $bar.css({
                    width: percentTime + "%"
                });
                if (percentTime >= 100) {
                    $(".slider").slick('slickNext');
                    startProgressbar();
                }
            }
        }

        function resetProgressbar() {
            $bar.css({
                width: 0 + '%'
            });
            clearTimeout(tick);
        }

        startProgressbar();

        $(".slider").on("beforeChange", function() {
            resetProgressbar();
            startProgressbar();
            $bar.css({
                width: 100 + "%"
            });
        });

    });