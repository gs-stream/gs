<!DOCTYPE html>
<html lang="en" data-arp-injected="true">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Basketball : <?php echo $_GET['live'];?> Live Stream</title>
    <meta property="og:image" content="https://i.ibb.co/vQ6c9vH/am-football.jpg">

    <meta name="description" content="Watch football Live and on-demand">
    <meta name="keywords" content="NFL Football, , NFL, football Live, American football live, NCAA football live stream, NFL Live, Watch NFL Live, Stream NFL Live.">
    <meta name="author" content="lp.maxprepss.com">
    
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://lp.maxprepss.com/public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://lp.maxprepss.com/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://lp.maxprepss.com/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://lp.maxprepss.com/public/css/slider-radio.css">
    <link rel="stylesheet" href="https://lp.maxprepss.com/public/css/select2.min.css">
    <link rel="stylesheet" href="https://lp.maxprepss.com/public/css/magnific-popup.css">
    <link rel="stylesheet" href="https://lp.maxprepss.com/public/css/plyr.css">
    <link rel="stylesheet" href="https://lp.maxprepss.com/public/css/main65e3.css?v=100">
    <link rel="shortcut icon" href="https://lp.maxprepss.com/public/img/flixzone_icon.png">

   


    <style id="smooth-scrollbar-style">
        [data-scrollbar] {
            display: block;
            position: relative;
        }

        .scroll-content {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .scrollbar-track {
            position: absolute;
            opacity: 0;
            z-index: 1;
            background: rgba(222, 222, 222, 0.75);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: opacity 0.5s 0.5s ease-out;
            transition: opacity 0.5s 0.5s ease-out;
        }

        .scrollbar-track.show,
        .scrollbar-track:hover {
            opacity: 1;
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }

        .scrollbar-track-x {
            bottom: 0;
            left: 0;
            width: 100%;
            height: 8px;
        }

        .scrollbar-track-y {
            top: 0;
            right: 0;
            width: 8px;
            height: 100%;
        }

        .scrollbar-thumb {
            position: absolute;
            top: 0;
            left: 0;
            width: 8px;
            height: 8px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 4px;
        }
    </style>
</head>

<body><style>
    .header__logos img {
        width: 200px; /* Ukuran logo untuk tampilan desktop */
        height: auto; /* Biarkan tinggi otomatis menyesuaikan aspek rasio */
    }

    @media (max-width: 400px) {
        /* Ukuran logo untuk tampilan mobile */
        .header__logos img {
            width: 200px;
        }
    }
</style>

    <div hidden="" id="sprite-plyr">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol id="plyr-airplay" viewbox="0 0 18 18">
                <path d="M16 1H2a1 1 0 00-1 1v10a1 1 0 001 1h3v-2H3V3h12v8h-2v2h3a1 1 0 001-1V2a1 1 0 00-1-1z"></path>
                <path d="M4 17h10l-5-6z"></path>
            </symbol>
            <symbol id="plyr-captions-off" viewbox="0 0 18 18">
                <path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd" fill-opacity=".5"></path>
            </symbol>
            <symbol id="plyr-captions-on" viewbox="0 0 18 18">
                <path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd"></path>
            </symbol>
            <symbol id="plyr-download" viewbox="0 0 18 18">
                <path d="M9 13c.3 0 .5-.1.7-.3L15.4 7 14 5.6l-4 4V1H8v8.6l-4-4L2.6 7l5.7 5.7c.2.2.4.3.7.3zm-7 2h14v2H2z"></path>
            </symbol>
            <symbol id="plyr-enter-fullscreen" viewbox="0 0 18 18">
                <path d="M10 3h3.6l-4 4L11 8.4l4-4V8h2V1h-7zM7 9.6l-4 4V10H1v7h7v-2H4.4l4-4z"></path>
            </symbol>
            <symbol id="plyr-exit-fullscreen" viewbox="0 0 18 18">
                <path d="M1 12h3.6l-4 4L2 17.4l4-4V17h2v-7H1zM16 .6l-4 4V1h-2v7h7V6h-3.6l4-4z"></path>
            </symbol>
            <symbol id="plyr-fast-forward" viewbox="0 0 18 18">
                <path d="M7.875 7.171L0 1v16l7.875-6.171V17L18 9 7.875 1z"></path>
            </symbol>
            <symbol id="plyr-logo-vimeo" viewbox="0 0 18 18">
                <path d="M17 5.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C5 10.9 4.4 6 3 6c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z"></path>
            </symbol><!-- Added by S.HAHIN -->
            <symbol id="plyr-logo-youtube" viewbox="0 0 18 18">
                <path d="M16.8 5.8c-.2-1.3-.8-2.2-2.2-2.4C12.4 3 9 3 9 3s-3.4 0-5.6.4C2 3.6 1.3 4.5 1.2 5.8 1 7.1 1 9 1 9s0 1.9.2 3.2c.2 1.3.8 2.2 2.2 2.4C5.6 15 9 15 9 15s3.4 0 5.6-.4c1.4-.3 2-1.1 2.2-2.4.2-1.3.2-3.2.2-3.2s0-1.9-.2-3.2zM7 12V6l5 3-5 3z"></path>
            </symbol>
            <symbol id="plyr-muted" viewbox="0 0 18 18">
                <path d="M12.4 12.5l2.1-2.1 2.1 2.1 1.4-1.4L15.9 9 18 6.9l-1.4-1.4-2.1 2.1-2.1-2.1L11 6.9 13.1 9 11 11.1zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"></path>
            </symbol>
            <symbol id="plyr-pause" viewbox="0 0 18 18">
                <path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zm6 0c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"></path>
            </symbol>
            <symbol id="plyr-pip" viewbox="0 0 18 18">
                <path d="M13.293 3.293L7.022 9.564l1.414 1.414 6.271-6.271L17 7V1h-6z"></path>
                <path d="M13 15H3V5h5V3H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1v-6h-2v5z"></path>
            </symbol>
            <symbol id="plyr-play" viewbox="0 0 18 18">
                <path d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"></path>
            </symbol>
            <symbol id="plyr-restart" viewbox="0 0 18 18">
                <path d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z"></path>
            </symbol>
            <symbol id="plyr-rewind" viewbox="0 0 18 18">
                <path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z"></path>
            </symbol>
            <symbol id="plyr-settings" viewbox="0 0 18 18">
                <path d="M16.135 7.784a2 2 0 01-1.23-2.969c.322-.536.225-.998-.094-1.316l-.31-.31c-.318-.318-.78-.415-1.316-.094a2 2 0 01-2.969-1.23C10.065 1.258 9.669 1 9.219 1h-.438c-.45 0-.845.258-.997.865a2 2 0 01-2.969 1.23c-.536-.322-.999-.225-1.317.093l-.31.31c-.318.318-.415.781-.093 1.317a2 2 0 01-1.23 2.969C1.26 7.935 1 8.33 1 8.781v.438c0 .45.258.845.865.997a2 2 0 011.23 2.969c-.322.536-.225.998.094 1.316l.31.31c.319.319.782.415 1.316.094a2 2 0 012.969 1.23c.151.607.547.865.997.865h.438c.45 0 .845-.258.997-.865a2 2 0 012.969-1.23c.535.321.997.225 1.316-.094l.31-.31c.318-.318.415-.781.094-1.316a2 2 0 011.23-2.969c.607-.151.865-.547.865-.997v-.438c0-.451-.26-.846-.865-.997zM9 12a3 3 0 110-6 3 3 0 010 6z"></path>
            </symbol>
            <symbol id="plyr-volume" viewbox="0 0 18 18">
                <path d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z"></path>
                <path d="M11.282 5.282a.909.909 0 000 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 000 1.316c.145.145.636.262 1.018.156a.725.725 0 00.298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 00-1.316 0zm-7.496.726H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"></path>
            </symbol>
        </svg>
    </div>
    <!-- header (hidden style) -->
    <header class="header header--hidden" style="background-image: url('public/img/ALL-HARDER.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        
                        <ul class="header__nav">
                        </ul>
                    </div>
                </div>
            </div>
        </div><div class="color-span-wrap color-span-wrap--bottom">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
    
    </header>
    <!-- end header -->
    <!-- 200300400 -->

    <!-- details -->
    <section class="section section--head section--head-fixed section--gradient section--details-bg">
        <div class="section__bg" data-bg="https://i.ibb.co/6nY0zdF/FOOTBALL-BG.jpg" style="background: url('index.php') center top / cover no-repeat"></div>
        <div class="container">
            <!-- article -->
            <div class="article">
                <div class="row">
                                            <div class="col-12">
                            <!-- article content -->
                            <div class="article__content">
                                 <center>  <h1>Watch <?php echo $_GET['live'];?> High School Basketball Live Stream</h1></center>
                            </div>
                            <!-- end article content -->
                        </div>
                    
                    <!-- video player -->
                    <div class="col-12">
                        <div tabindex="0" class="plyr plyr--full-ui plyr--video plyr--html5 plyr--fullscreen-enabled plyr--pip-supported plyr--captions-enabled plyr__poster-enabled plyr--paused">
                            <div class="plyr__controls">
                                <button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-label="Play">
                                    <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                        <use href="#plyr-pause"></use>
                                    </svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                        <use href="#plyr-play"></use>
                                    </svg><span class="label--pressed plyr__sr-only">Pause</span><span class="label--not-pressed plyr__sr-only">Play</span>
                                </button>
                                <div class="plyr__controls__item plyr__progress__container">
                                    <div class="plyr__progress">
                                        <input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="183.126" aria-valuenow="154.021025" id="plyr-seek-52" aria-valuetext="02:34 of 03:03" style="--value: 0%" seek-value="94.32948522471503"><progress class="plyr__progress__buffer" min="0" max="100" value="12.346144184878172" role="progressbar" aria-hidden="true">
                                            % buffered</progress><span class="plyr__tooltip" style="left: 100%">02:52</span>
                                    </div>
                                </div>
                                <div class="plyr__controls__item plyr__time--current plyr__time ytp-live-badge" aria-label="Current time">
                                    <b>LIVE</b>
                                </div>
                                <div class="plyr__controls__item plyr__volume">
                                    <button type="button" class="plyr__control" data-plyr="mute">
                                        <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                            <use href="#plyr-muted"></use>
                                        </svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                            <use href="#plyr-volume"></use>
                                        </svg><span class="label--pressed plyr__sr-only">Unmute</span><span class="label--not-pressed plyr__sr-only">Mute</span></button><input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-52" aria-valuetext="100.0%" style="--value: 100%">
                                </div>
                                <div class="plyr__controls__item plyr__menu">
                                    <button aria-haspopup="true" aria-controls="plyr-settings-52" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings">
                                        <svg aria-hidden="true" focusable="false">
                                            <use href="#plyr-settings"></use>
                                        </svg><span class="plyr__sr-only">Settings</span>
                                    </button>
                                    <div class="plyr__menu__container" id="plyr-settings-52" hidden="">
                                        <div>
                                            <div id="plyr-settings-52-home">
                                                <div role="menu">
                                                    <button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true">
                                                        <span>Captions<span class="plyr__menu__value">Disabled</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true">
                                                        <span>Quality<span class="plyr__menu__value">576p</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true">
                                                        <span>Speed<span class="plyr__menu__value">Normal</span></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="plyr-settings-52-captions" hidden="">
                                                <button type="button" class="plyr__control plyr__control--back">
                                                    <span aria-hidden="true">Captions</span><span class="plyr__sr-only">Go back to previous menu</span>
                                                </button>
                                                <div role="menu">
                                                    <button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="-1">
                                                        <span>Disabled</span></button><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0">
                                                        <span>English<span class="plyr__menu__value"><span class="plyr__badge">EN</span></span></span></button><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1">
                                                        <span>Français<span class="plyr__menu__value"><span class="plyr__badge">FR</span></span></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="plyr-settings-52-quality" hidden="">
                                                <button type="button" class="plyr__control plyr__control--back">
                                                    <span aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back to previous menu</span>
                                                </button>
                                                <div role="menu">
                                                    <button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1080">
                                                        <span>1080p<span class="plyr__menu__value"><span class="plyr__badge">HD</span></span></span></button><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="720">
                                                        <span>720p<span class="plyr__menu__value"><span class="plyr__badge">HD</span></span></span></button><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="576">
                                                        <span>576p<span class="plyr__menu__value"><span class="plyr__badge">SD</span></span></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="plyr-settings-52-speed" hidden="">
                                                <button type="button" class="plyr__control plyr__control--back">
                                                    <span aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back to previous menu</span>
                                                </button>
                                                <div role="menu">
                                                    <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5">
                                                        <span>0.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75">
                                                        <span>0.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1">
                                                        <span>Normal</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25">
                                                        <span>1.25×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5">
                                                        <span>1.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75">
                                                        <span>1.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2">
                                                        <span>2×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="4">
                                                        <span>4×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen">
                                    <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                        <use href="#plyr-exit-fullscreen"></use>
                                    </svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                        <use href="#plyr-enter-fullscreen"></use>
                                    </svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span class="label--not-pressed plyr__sr-only">Enter fullscreen</span>
                                </button>
                            </div>
                            <div class="plyr__video-wrapper" style="background-image:url(public/img/NCAA-FOOTBALL.jpg) !important">
                                
                                <div class="sc-dAEZTx gSaZYm">
                                    <video src="marketing/lp/videos/compressed/basketball.mp4" autoplay="" playsinline="" loop="" muted="" class="sc-hqpNSm fZPyYo"></video>
                                    </div>
                                <div class="plyr__poster" style="background-image: url(public/img/NCAA-FOOTBALL.jpg);"></div>
                            </div>
                            <div class="plyr__captions"></div>
                            <div class="regis" style="display: block;">
                                
                                <h5 class="title">LIVE STREAM IS ONLY AVAILABLE FOR REGISTERES USERS</h5>
                                <span>Create a FREE account to get access to the live stream<br></span>
                                <a href="/register.php" class="btn-sign">CREATE A FREE ACCOUNT</a>
                            </div>
                        </div>

                        <div class="article__actions article__actions--details">
                            <button class="article__favorites" type="button">
                                Get unlimited access to watch high schools football games live and on-demand anytime, anywhere on any device!
                            </button>

                            <!-- add .active class -->
                            <div class="article__download">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                    <path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z"></path>
                                </svg>
                                Support Quality:
                                <a href="/register.php">480p</a>
                                <a href="/register.php">720p</a>
                                <a href="/register.php">1080p</a>
                                <a href="/register.php">4k</a>
                            </div>
                        </div>
                    </div>
                    <!-- end video player -->
                     <!-- 200300400 -->
                </div>

                <div class="row">
                    <div class="col-12 col-xl-8">
                        <!-- comments and reviews -->
                        <div class="comments">
                            <!-- tabs nav -->
                            <ul class="nav nav-tabs comments__title comments__title--tabs" id="comments__tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#" role="tab" aria-controls="tab-1" aria-selected="true">
                                        <h4>Comments</h4>
                                        <span>5,415</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- end tabs nav -->
                <!-- S.H.A.H.I.N -->
                            <!-- tabs -->
                            <div class="tab-content">
                                <!-- comments -->
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                                    <ul class="comments__list">
                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="https://lp.maxprepss.com/public/img/jojon.jpg" alt="">
                                                <span class="comments__name">James Meyer</span>
                                                <span class="comments__time">8 minutes ago</span>
                                            </div>
                                            <p class="comments__text">
                                                Finally...I can watch this event for free, Thank you!
                                            </p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(41, 180, 116, 1);transform: ;msFilter:;" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                                                        Likes 152
                                                    </button>

                                                    <button type="button">
                                                        2
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(255, 0, 4, 1);transform: ;msFilter:;" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path></svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                                        <polyline points="400 160 464 224 400 288" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></polyline>
                                                        <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></path>
                                                    </svg><span>Reply</span>
                                                </button>
                                            </div>
                                        </li>

                                        <li class="comments__item comments__item--answer">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="free-icon/user_318-875902.jpg" alt="VERIFED">
                                                <span class="comments__name">Administrator <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(47, 128, 237, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path></svg></span>
                                                <span class="comments__time">4 minutes ago</span>
                                            </div>
                                            <p class="comments__text">
                                                Sure !! We always provide live show for free !
                                            </p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(41, 180, 116, 1);transform: ;msFilter:;" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                                                        Likes 356
                                                    </button>

                                                    <button type="button">
                                                        6
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(255, 0, 4, 1);transform: ;msFilter:;" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path></svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                                        <polyline points="400 160 464 224 400 288" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></polyline>
                                                        <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></path>
                                                    </svg><span>Reply</span>
                                                </button>
                                            </div>
                                        </li>

                                        <li class="comments__item comments__item--quote">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="https://lp.maxprepss.com/public/img/asep.jpg" alt="">
                                                <span class="comments__name">Otis Golden</span>
                                                <span class="comments__time">3 minutes ago</span>
                                            </div>
                                            <p class="comments__text">
                                                I can't see live streaming ,, Help me 😭
                                            </p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(41, 180, 116, 1);transform: ;msFilter:;" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                                                       Likes 641
                                                    </button>

                                                    <button type="button">
                                                        59
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(255, 0, 4, 1);transform: ;msFilter:;" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path></svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                                        <polyline points="400 160 464 224 400 288" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></polyline>
                                                        <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></path>
                                                    </svg><span>Reply</span>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="comments__item comments__item--answer">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="free-icon/user_318-875902.jpg" alt="VERIFED">
                                                <span class="comments__name">Administrator <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(47, 128, 237, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path></svg></span>
                                                <span class="comments__time">2 minutes ago</span>
                                            </div>
                                            <p class="comments__text">
                                                Hey <b>Otis Golden</b> don't worry! You just need to create an account first to become our membership for free, then you click play button. It's quite easy.You cannot watch broadcasts if you are not a member of us.
                                            </p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(41, 180, 116, 1);transform: ;msFilter:;" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                                                        Likes 106
                                                    </button>

                                                    <button type="button">
                                                        4
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(255, 0, 4, 1);transform: ;msFilter:;" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path></svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                                        <polyline points="400 160 464 224 400 288" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></polyline>
                                                        <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></path>
                                                    </svg><span>Reply</span>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="comments__item comments__item--quote">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="https://lp.maxprepss.com/public/img/asep.jpg" alt="">
                                                <span class="comments__name">Otis Golden</span>
                                                <span class="comments__time">0 minutes ago</span>
                                            </div>
                                            <p class="comments__text">
                                                Ok I will try it 😊 thanks sir 
                                            </p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(41, 180, 116, 1);transform: ;msFilter:;" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                                                       Likes 90
                                                    </button>

                                                    <button type="button">
                                                        2
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(255, 0, 4, 1);transform: ;msFilter:;" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path></svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                                        <polyline points="400 160 464 224 400 288" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></polyline>
                                                        <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></path>
                                                    </svg><span>Reply</span>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="https://lp.maxprepss.com/public/img/Maemunah.jpeg" alt="">
                                                <span class="comments__name">Shelly Askew</span>
                                                <span class="comments__time">23 minutes ago</span>
                                            </div>
                                            <p class="comments__text">
                                               I was worried at first when I was directed to the membership site. But now I'm so happy that I found this to watch the live broadcast! thank you so much 😘
                                            </p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(41, 180, 116, 1);transform: ;msFilter:;" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                                                        Likes 361
                                                    </button>

                                                    <button type="button">
                                                        0
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(255, 0, 4, 1);transform: ;msFilter:;" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path></svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                                        <polyline points="400 160 464 224 400 288" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></polyline>
                                                        <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></path>
                                                    </svg><span>Reply</span>
                                                </button>
                                            </div>
                                        </li>

                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="https://lp.maxprepss.com/public/img/utom.jpg" alt="">
                                                <span class="comments__name">Michael Solis</span>
                                                <span class="comments__time">24 minutes ago</span>
                                            </div>
                                            <p class="comments__text">
                                                I didn't think it would work, but my best friend showed me this site and it worked! and now i can watch my favorite sports...Thanks
                                            </p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(41, 180, 116, 1);transform: ;msFilter:;" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                                                        Likes 722
                                                    </button>

                                                    <button type="button">
                                                        17
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(255, 0, 4, 1);transform: ;msFilter:;" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path></svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                                        <polyline points="400 160 464 224 400 288" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></polyline>
                                                        <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></path>
                                                    </svg><span>Reply</span>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="https://lp.maxprepss.com/public/img/neneng.jpg" alt="">
                                                <span class="comments__name">Maria Jackson</span>
                                                <span class="comments__time">45 minutes ago</span>
                                            </div>
                                            <p class="comments__text">
                                                I just wanna say one word... WONDERFUL!! thanks you!
                                            </p>
                                            <div class="comments__actions">
                                                <div class="comments__rate">
                                                    <button type="button">
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(41, 180, 116, 1);transform: ;msFilter:;" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 21h1V8H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2zM20 8h-7l1.122-3.368A2 2 0 0 0 12.225 2H12L7 7.438V21h11l3.912-8.596L22 12v-2a2 2 0 0 0-2-2z"></path></svg>
                                                        Likes 269
                                                    </button>

                                                    <button type="button">
                                                        17
                                                        <svg width="22" height="22" viewbox="0 0 22 22" style="fill: rgba(255, 0, 4, 1);transform: ;msFilter:;" xmlns="http://www.w3.org/2000/svg">
                                                           <path d="M20 3h-1v13h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM4 16h7l-1.122 3.368A2 2 0 0 0 11.775 22H12l5-5.438V3H6l-3.937 8.649-.063.293V14a2 2 0 0 0 2 2z"></path></svg>
                                                    </button>
                                                </div>

                                                <button type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                                                        <polyline points="400 160 464 224 400 288" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></polyline>
                                                        <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="
                                  fill: none;
                                  stroke-linecap: round;
                                  stroke-linejoin: round;
                                  stroke-width: 32px;
                                "></path>
                                                    </svg><span>Reply</span>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="catalog__paginator-wrap catalog__paginator-wrap--comments">
                                        <span class="catalog__pages">676 pages</span>

                                        <ul class="catalog__paginator">
                                            <li>
                                                <a href="/register.php">
                                                    <svg width="14" height="11" viewbox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="/register.php">1</a>
                                            </li>
                                            <li>
                                                <a href="/register.php">2</a>
                                            </li>
                                            <li>
                                                <a href="/register.php">3</a>
                                            </li>
                                            <li>
                                                <a href="/register.php">4</a>
                                            </li>
                                            <li>
                                                <a href="/register.php">
                                                    <svg width="14" height="11" viewbox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <form action="/register.php" class="comments__form">
                                        <div class="sign__group">
                                            <textarea id="text" name="text" class="sign__textarea" placeholder="Add comment"></textarea>
                                        </div>
                                        <button type="button" class="sign__btn" onclick="location.href='/register.php'">Send</button>
                                    </form>
                                </div>
                                <!-- end comments -->
                            </div>
                            <!-- end tabs -->
                        </div>
                        <!-- end comments and reviews -->
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="sidebar sidebar--mt">
                            <!-- subscribe -->
                            <div class="row">
                                <div class="col-12">
                                    <form action="/register.php" class="subscribe">
                                        <img alt="SGP Logo" src="https://lp.maxprepss.com/public/img/247-logo.png" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;" srcset="https://lp.maxprepss.com/public/img/247-logo.png 1x, public/img/247-logo.png 2x">
                                    </form>
                                </div>
                                
                            </div>
                            <!-- end subscribe -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end article -->
        </div>
    </section>
    <!-- end details -->

    <!-- footer -->
<center><footer class="footer">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="footer__content">
                        <div class="footer__links">
                            <a href="index.htm">DMCA</a>
                            <a href="index.htm">Privacy policy</a>
                            <a href="index.htm">Terms and conditions</a>
                        </div>
                        <small class="footer__copyright">Copyright © 2023 All Rights Reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<center>
    <!-- end footer -->
    <!-- Added by S.H.A.H.I.N -->
    <!-- JS -->
    <script data-cfasync="false" src="https://lp.maxprepss.com/public/email-decode.min.js"></script><script src="https://lp.maxprepss.com/public/js/jquery-3.5.1.min.js"></script>
    <script src="https://lp.maxprepss.com/public/js/bootstrap.bundle.min.js"></script>
    <script src="https://lp.maxprepss.com/public/js/owl.carousel.min.js"></script>
    <script src="https://lp.maxprepss.com/public/js/slider-radio.js"></script>
    <script src="https://lp.maxprepss.com/public/js/select2.min.js"></script>
    <script src="https://lp.maxprepss.com/public/js/smooth-scrollbar.js"></script>
    <script src="https://lp.maxprepss.com/public/js/jquery.magnific-popup.min.js"></script>
    <script src="https://lp.maxprepss.com/public/js/main65e3.js?v=100"></script>

</center></center></body></html>
   <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4813799,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4813799&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->