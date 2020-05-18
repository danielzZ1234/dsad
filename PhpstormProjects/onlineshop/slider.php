<?php require_once "core/load.php";?>
<?php require_once "core/header.php";?>
<body>
<section class="demo_wrapper">
    <article class="demo_block">
        <h1 id="main-title">Simple demo with default config</h1>
        <a href="#glob" class='prev'>Prev</a> / <a href="#glob" class='next'>Next</a>
        || <a href="#glob" class='init'>Init</a> | <a href="#glob" class='reset'>Destroy</a> | <a href="#glob" class='reload'>Reload</a>
        || <a href="#glob" class='stop'>Stop</a> | <a href="#glob" class='start'>Start</a>
        <ul id="demo1">
            <li><a href="#slide1"><img src="img/image-1.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
            <li><a href="#slide2"><img src="img/image-2.jpg"  alt="This is caption 2"></a></li>
            <li><a href="#slide3"><img src="img/image-4.jpg" alt="And this is some very long caption for slide 3. Yes, really long."></a></li>
        </ul>
    </article>
</section>

<script>
    $(function() {
        var demo1 = $("#demo1").slippry({
            // transition: 'fade',
            // useCSS: true,
            // speed: 1000,
            // pause: 3000,
            // auto: true,
            // preload: 'visible',
            // autoHover: false
        });

        $('.stop').click(function () {
            demo1.stopAuto();
        });

        $('.start').click(function () {
            demo1.startAuto();
        });

        $('.prev').click(function () {
            demo1.goToPrevSlide();
            return false;
        });
        $('.next').click(function () {
            demo1.goToNextSlide();
            return false;
        });
        $('.reset').click(function () {
            demo1.destroySlider();
            return false;
        });
        $('.reload').click(function () {
            demo1.reloadSlider();
            return false;
        });
        $('.init').click(function () {
            demo1 = $("#demo1").slippry();
            return false;
        });
    });
</script>
</body>
</html>
