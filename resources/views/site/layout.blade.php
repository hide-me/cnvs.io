{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--@include('site.partials.meta')--}}
{{--@include('site.partials.css')--}}
{{--</head>--}}
{{--<body class="full_bleed">--}}
{{--@include('site.partials.analytics')--}}
{{--@yield('content')--}}
{{--@include('site.partials.js')--}}
{{--</body>--}}
{{--</html>--}}
        <!DOCTYPE html>
<html lang="en-US">
<head>
    <script type="text/javascript"
            src="https://a.slack-edge.com/bv1-1/webpack.manifest.e4f6f575a9b3d1b032b3.min.js"></script>
    <script type="text/javascript">
        var TS_last_log_date = null;
        var TSMakeLogDate = function () {
            var date = new Date();

            var y = date.getFullYear();
            var mo = date.getMonth() + 1;
            var d = date.getDate();

            var time = {
                h: date.getHours(),
                mi: date.getMinutes(),
                s: date.getSeconds(),
                ms: date.getMilliseconds()
            };

            Object.keys(time).map(function (moment, index) {
                if (moment == 'ms') {
                    if (time[moment] < 10) {
                        time[moment] = time[moment] + '00';
                    } else if (time[moment] < 100) {
                        time[moment] = time[moment] + '0';
                    }
                } else if (time[moment] < 10) {
                    time[moment] = '0' + time[moment];
                }
            });

            var str = y + '/' + mo + '/' + d + ' ' + time.h + ':' + time.mi + ':' + time.s + '.' + time.ms;
            if (TS_last_log_date) {
                var diff = date - TS_last_log_date;
                //str+= ' ('+diff+'ms)';
            }
            TS_last_log_date = date;
            return str + ' ';
        }

        var parseDeepLinkRequest = function (code) {
            var m = code.match(/"id":"([CDG][A-Z0-9]{8})"/);
            var id = m ? m[1] : null;

            m = code.match(/"team":"(T[A-Z0-9]{8})"/);
            var team = m ? m[1] : null;

            m = code.match(/"message":"([0-9]+\.[0-9]+)"/);
            var message = m ? m[1] : null;

            return {id: id, team: team, message: message};
        }

        if ('rendererEvalAsync' in window) {
            var origRendererEvalAsync = window.rendererEvalAsync;
            window.rendererEvalAsync = function (blob) {
                try {
                    var data = JSON.parse(decodeURIComponent(atob(blob)));
                    if (data.code.match(/handleDeepLink/)) {
                        var request = parseDeepLinkRequest(data.code);
                        if (!request.id || !request.team || !request.message) return;

                        request.cmd = 'channel';
                        TSSSB.handleDeepLinkWithArgs(JSON.stringify(request));
                        return;
                    } else {
                        origRendererEvalAsync(blob);
                    }
                } catch (e) {
                }
            }
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <title>Canvas | Simple, Powerful, Blog Publishing Platform</title>
    <link href="https://a.slack-edge.com/975fe/style/rollup-plastic.css" rel="stylesheet" type="text/css">
    <link href="https://a.slack-edge.com/bd0b6/style/downloads_new.css" rel="stylesheet" type="text/css">
    <link href="https://a.slack-edge.com/7ea5f/style/brand_base.css" rel="stylesheet" type="text/css">
    <link href="https://a.slack-edge.com/b003/style/libs/lato-2-compressed.css" rel="stylesheet" type="text/css">
    <link href="https://a.slack-edge.com/0b8a3/style/sticky_nav.css" rel="stylesheet" type="text/css">
    <link href="https://a.slack-edge.com/19253/style/footer.css" rel="stylesheet" type="text/css">
    <link href="https://a.slack-edge.com/98897/style/_helpers.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
</head>
<body class="full_bleed">
<nav class="top">
    <a href="https://slack.com/" class="logo" data-qa="logo" aria-label="Canvas homepage"></a>
    <ul>
        <li><a href="https://cnvs.readme.io" data-qa="product">Documentation</a></li>
        <li><a href="https://slack.com/pricing?ui_step=55&ui_element=5" data-qa="pricing">Blog</a></li>
        <li><a href="https://get.slack.help/hc/en-us" data-qa="support">HipChat</a></li>
        <li class="mobile_btn download_slack"><a href="/get" data-qa="download_slack">Support</a></li>
        <li class="sign_in hide_on_mobile"><a href="https://slack.com/signin" data-gtm-click="optout_nav_signin"
                                              class="btn_sticky btn_filled" data-qa="sign_in">Support</a></li>
        <li class="mobile_btn mobile_menu_btn">
            <a href="#" class="btn_sticky">Menu</a>
        </li>
    </ul>
</nav>
<nav class="top fixed">
    <a href="https://cnvs.io" class="logo" aria-label="Canvas homepage"></a>
    <ul>
        <li><a href="https://cnvs.readme.io" data-qa="product">Documentation</a></li>
        <li><a href="https://slack.com/pricing?ui_step=55&ui_element=5" data-qa="pricing">Blog</a></li>
        <li><a href="https://get.slack.help/hc/en-us" data-qa="support">HipChat</a></li>
        <li class="mobile_btn download_slack"><a href="/get" data-qa="download_slack">Support</a></li>
        <li class="sign_in hide_on_mobile"><a href="https://slack.com/signin" data-gtm-click="optout_nav_signin"
                                              class="btn_sticky btn_filled" data-qa="sign_in">Support</a></li>
        <li class="mobile_btn mobile_menu_btn"><a href="#" class="btn_sticky">Menu</a></li>
    </ul>
</nav>
<nav class="mobile_menu loading menu_scroll" aria-hidden="true">
    <div class="mobile_menu_wrapper">
        <div class="mobile_menu_header">
            <a href="https://slack.com/" class="logo"></a>
            <a href="#" class="close" aria-label="close">
                <ts-icon class="ts_icon ts_icon_times"></ts-icon>
            </a>
        </div>
        <ul>
            <li><a href="https://cnvs.readme.io" data-qa="product">Documentation</a></li>
            <li><a href="https://slack.com/pricing?ui_step=55&ui_element=5" data-qa="pricing">Blog</a></li>
            <li><a href="https://get.slack.help/hc/en-us" data-qa="support">HipChat</a></li>
            <li class="mobile_btn download_slack"><a href="/get" data-qa="download_slack">Support</a></li>
        </ul>
        <ul class="mobile_menu_footer">
            <li>
                <a href="https://slack.com/signin" data-gtm-click="optout_nav_signin" target="_blank">
                    <!-- <ts-icon class="ts_icon small float_none team_icon ts_icon_plus default signup_icon"></ts-icon> -->
                    <i class="fa fa-fw fa-github"></i>
                    <span class="switcher_label">Download Canvas</span>
                </a>
            </li>
            <!-- <li>
               <a href="https://slack.com/create" class="" target="_blank">
                  <ts-icon class="ts_icon small float_none team_icon ts_icon_slack_pillow default signup_icon"></ts-icon>
                  <span class="switcher_label">Create a new team</span>
               </a>
            </li> -->
        </ul>
    </div>
</nav>
<section class="clearfix downloads_header osx" style="background-color: #0072C6">
    <div class="section_main">
        <div class="welcome">
            <h1>Simple, Powerful Blog Publishing Platform</h1>
            <p>Canvas is designed for those who want blogging to be enjoyable and a bit less complicated.</p>
            <form class="build_select" name="build_select" action="/downloads/instructions/osx" method="post"
                  accept-encoding="UTF-8">
                <input type="hidden" name="os" value="osx">
                <button id="download_page_mac_ddl" type="submit" class="go_button align_top">
                    <b><i class="fa fa-fw fa-rocket"></i> Get started</b>
                </button>
                <a id="" class="badge_btn align_top"
                   href="https://itunes.apple.com/app/slack/id803453959?ls=1&amp;mt=12"><img
                            alt="Download Slack for Mac"
                            src='https://a.slack-edge.com/d446/img/downloads/mac_app_store_btn.png'
                            srcset='https://a.slack-edge.com/d446/img/downloads/mac_app_store_btn.png 1x, https://a.slack-edge.com/d446/img/downloads/mac_app_store_btn@2x.png 2x'/></a>
                <div class="meta">
                    <b class="ver">Version 3.4.1</b>
                    <b class="sep"> - </b>
                    <a href="https://cnvs.readme.io/docs/changelog" target="_blank">What's new</a>
                    <div class="pipe_sep persist"></div>
                    <a href="https://demo.cnvs.io" target="_blank" class="open_beta">Try the demo</a>
                </div>
            </form>
        </div>
        <div class="product_image osx"></div>
    </div>
</section>
<section class="clearfix stay_in_sync osx">
    <div class="section_main">
        <div class="card">
            <h2>Not just another blog</h2>
            <p class="sync_desc">Keep publishing content from your desktop, tablet, or mobile device. Canvas will meet
                your needs on any platform!</p>
            <br/>
            <div class="store_lineup">
                <a class="github-button" href="https://github.com/cnvs/canvas" data-icon="octicon-star"
                   data-size="large" data-show-count="true" aria-label="Star cnvs/canvas on GitHub">Star</a>&nbsp;&nbsp;&nbsp;
                <a class="github-button" href="https://github.com/cnvs/canvas/subscription" data-icon="octicon-eye"
                   data-size="large" data-show-count="true" aria-label="Watch cnvs/canvas on GitHub">Watch</a>&nbsp;&nbsp;&nbsp;
                <a class="github-button" href="https://github.com/cnvs/canvas/fork" data-icon="octicon-repo-forked"
                   data-size="large" data-show-count="true" aria-label="Fork cnvs/canvas on GitHub">Fork</a>
            </div>
            <img class="mobile_lineup" src='https://a.slack-edge.com/21690/img/downloads/mobile_apps_lineup.png'
                 srcset='https://a.slack-edge.com/21690/img/downloads/mobile_apps_lineup.png 1x, https://a.slack-edge.com/21690/img/downloads/mobile_apps_lineup@2x.png 2x'
                 alt="Slack for mobile is available on iPhone, Android and Windows Phone"/></a>
        </div>
        <div class="other_links">
            Open-sourced software licensed under the <a href="#">MIT License</a>.
        </div>
    </div>
</section>
</div>
<footer data-qa="footer">
    <section class="links">
        <div class="grid">
            <div class="col span_1_of_4 nav_col">
                <ul>
                    <li class="cat_1" style="color: #0072C6">Getting Started</li>
                    <li><a href="/is" data-qa="product_footer">Installation</a></li>
                    <li><a href="/enterprise" data-qa="enterprise_footer">Upgrade Guide</a></li>
                    <li><a href="/pricing?ui_step=28&ui_element=5" data-qa="pricing_footer">Themes</a></li>
                    <li><a href="/pricing?ui_step=28&ui_element=5" data-qa="pricing_footer">Contributing</a></li>
                </ul>
            </div>
            <div class="col span_1_of_4 nav_col">
                <ul>
                    <li class="cat_2" style="color: #0072C6">GitHub</li>
                    <li><a href="/customers" data-qa="customers">Changelog</a></li>
                    <li><a href="/jobs" data-qa="jobs">Releases</a></li>
                    <li><a href="/developers" data-qa="developers">License</a></li>
                </ul>
            </div>
            <div class="col span_1_of_4 nav_col">
                <ul>
                    <li class="cat_3" style="color: #0072C6">Get Help</li>
                    <li><a href="/privacy-policy" data-qa="privacy">Support</a></li>
                    <li><a href="/security" data-qa="security">Issues</a></li>
                    <li><a href="/security" data-qa="security">Troubleshooting</a></li>
                </ul>
            </div>
            <div class="col span_1_of_4 nav_col">
                <ul>
                    <li class="cat_4" style="color: #0072C6">Community</li>
                    <li><a href="/brand-guidelines" data-qa="brand_guidelines">Twitter</a></li>
                    <li><a href="/downloads" data-qa="downloads">HipChat</a></li>
                    <li><a href="/brand-guidelines" data-qa="brand_guidelines">Patreon</a></li>
                    <li><a href="/downloads" data-qa="downloads_mobile">Blog</a></li>
                </ul>
            </div>
        </div>
    </section>
    <div class="footnote">
        <section>
            <a href="https://cnvs.io" aria-label="Canvas homepage">
                <ts-icon class="ts_icon_slack_pillow" aria-hidden="true"></ts-icon>
            </a>
            <ul>
                <li>
                    <a href="/help/contact" data-qa="contact_us">Contact Us</a>
                </li>
                <li>
                    <a href="https://twitter.com/cnvs_io"  aria-label="Canvas on Twitter">
                        <ts-icon class="ts_icon_twitter" aria-hidden="true"></ts-icon>
                    </a>
                </li>
                <li class="yt">
                    <a href="https://github.com/cnvs" aria-label="Canvas on GitHub">
                        <ts-icon class="ts_icon_github" aria-hidden="true"></ts-icon>
                    </a>
                </li>
            </ul>
        </section>
    </div>
</footer>

<script type="text/javascript" src="https://a.slack-edge.com/bv1-1/emoji.1ededa120e6a9042a904.min.js"></script>
<script type="text/javascript"
        src="https://a.slack-edge.com/bv1-1/rollup-core_required_libs.3c1d8faaf0e05d9d0423.min.js"></script>
<script type="text/javascript"
        src="https://a.slack-edge.com/bv1-1/rollup-core_required_ts.99f599b5a71322b6c142.min.js"></script>
<script type="text/javascript" src="https://a.slack-edge.com/bv1-1/TS.web.456221fdf47c5a10d27e.min.js"></script>
<script type="text/javascript"
        src="https://a.slack-edge.com/bv1-1/rollup-core_web.490f831ef88d6d238945.min.js"></script>
<script type="text/javascript"
        src="https://a.slack-edge.com/bv1-1/rollup-secondary_a_required.490e8657c30f2b517f39.min.js"></script>
<script type="text/javascript"
        src="https://a.slack-edge.com/bv1-1/rollup-secondary_b_required.fed96b47079fb8c38362.min.js"></script>
<script type="text/javascript" src="https://a.slack-edge.com/bv1-1/application.f55430d88c9d470c3bd2.min.js"></script>
<script type="text/javascript" src="https://a.slack-edge.com/bv1-1/sticky_nav.b0b6e4c2ac94cb46c012.min.js"></script>
<script type="text/javascript"
        src="https://a.slack-edge.com/bv1-1/page_downloads_new.d91924ac654b712ef383.min.js"></script>
<script type="text/javascript" src="https://a.slack-edge.com/bv1-1/clear_nav.aa9f1931405b1fd6943c.min.js"></script>
<script type="text/javascript" src="https://a.slack-edge.com/bv1-1/footer.08e4de355c4b0d02e3e6.min.js"></script>

</body>
</html>