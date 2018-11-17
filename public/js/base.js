$(function () {

    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 1000,
            stopOnLastSlide: false,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fade: {
            crossFade: false,
        },
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    mySwiper.el.onmouseover = function() {
        mySwiper.autoplay.stop();
    };
    mySwiper.el.onmouseout = function() {
        mySwiper.autoplay.start();
    };

    /*nav*/
    var liNum = 0;
    $(' .nav .menu li').mouseenter(function() {
        liNum = $(this).index();
        $(this).addClass('ac').siblings().removeClass('ac');
        $('.menu_fuceng').show();
        $('.menu_fuceng #' + (liNum + 1)).show().siblings().hide();
    })
    $(' .nav .menu li').mouseleave(function() {
        $('.menu_fuceng').hide();
        $(this).removeClass('ac');
    })
    $('.menu_fuceng').mouseenter(function() {
        console.log($(' .nav .menu li'))
        $(this).show();
        $(' .nav .menu').show()
        $(' .nav .menu li').eq(liNum).addClass('ac');
    })
    $('.menu_fuceng ').mouseleave(function() {
        $('.menu_fuceng').hide();
        $(' .nav .menu li').removeClass('ac');
        //		$(' .nav .menu').hide();
    })
    $(' .nav .menu ').mouseleave(function() {
        //		$(' .nav .menu').hide()
    })

    document.querySelector('#sortable').sortablejs()
    $(".box").superSlider({
        prevBtn: ".prev", //左按钮
        nextBtn: ".next", //右按钮
        listCont: "#roll", //滚动列表外层
        scrollWhere: "prev", //自动滚动方向next
        delayTime: 2000, //自动轮播时间间隔
        speed: 300, //滚动速度
        amount: 1, //单次滚动数量
        showNum: 4, //显示数量
        autoPlay: true //自动播放
    });
})