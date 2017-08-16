{{--<meta charset="utf-8">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">--}}

{{--TODO: Fix this to pull from CDN--}}
{{--<link rel="shortcut icon" href="{{ public_path('assets/img/ico/favicon.png') }}">--}}

{{--<title>{{ config('app.name') }}@yield('title')</title>--}}

{{--<meta name="description" content="@yield('description')">--}}
{{--<meta name="keywords" content="simple,powerful,blog,publishing,platform,laravel,canvas,markdown,material,design,developers">--}}
{{--<meta name="author" content="Todd Austin">--}}

{{--<meta name="twitter:title" content="@yield('twitter-title')"/>--}}
{{--<meta name="twitter:description" content="@yield('twitter-description')"/>--}}
{{--<meta name="twitter:card" content="summary_large_image"/>--}}
{{--<meta name="twitter:site" content="https://cnvs.io"/>--}}
{{--<meta name="twitter:image" content="https://cdn.cnvs.io/assets/img/preview.png"/>--}}
{{--<meta name="twitter:url" content="https://cnvs.io"/>--}}
{{--<meta name="twitter:creator" content="@austintoddj">--}}

{{--<meta property="og:title" content="@yield('og-title')"/>--}}
{{--<meta property="og:description" content="@yield('og-description')"/>--}}
{{--<meta property="og:url" content="https://cnvs.io"/>--}}
{{--<meta property="og:image" content="https://cdn.cnvs.io/assets/img/preview.png"/>--}}




<script>
    window.ts_endpoint_url = "https:\/\/slack.com\/beacon\/timing";

    (function (e) {
        var n = Date.now ? Date.now() : +new Date, r = e.performance || {}, t = [], a = {}, i = function (e, n) {
            for (var r = 0, a = t.length, i = []; a > r; r++) t[r][e] == n && i.push(t[r]);
            return i
        }, o = function (e, n) {
            for (var r, a = t.length; a--;) r = t[a], r.entryType != e || void 0 !== n && r.name != n || t.splice(a, 1)
        };
        r.now || (r.now = r.webkitNow || r.mozNow || r.msNow || function () {
            return (Date.now ? Date.now() : +new Date) - n
        }), r.mark || (r.mark = r.webkitMark || function (e) {
            var n = {name: e, entryType: "mark", startTime: r.now(), duration: 0};
            t.push(n), a[e] = n
        }), r.measure || (r.measure = r.webkitMeasure || function (e, n, r) {
            n = a[n].startTime, r = a[r].startTime, t.push({
                name: e,
                entryType: "measure",
                startTime: n,
                duration: r - n
            })
        }), r.getEntriesByType || (r.getEntriesByType = r.webkitGetEntriesByType || function (e) {
            return i("entryType", e)
        }), r.getEntriesByName || (r.getEntriesByName = r.webkitGetEntriesByName || function (e) {
            return i("name", e)
        }), r.clearMarks || (r.clearMarks = r.webkitClearMarks || function (e) {
            o("mark", e)
        }), r.clearMeasures || (r.clearMeasures = r.webkitClearMeasures || function (e) {
            o("measure", e)
        }), e.performance = r, "function" == typeof define && (define.amd || define.ajs) && define("performance", [], function () {
            return r
        }) // eslint-disable-line
    })(window);

</script>
<script>

    ;(function () {
        'use strict';


        window.TSMark = function (mark_label) {
            if (!window.performance || !window.performance.mark) return;
            performance.mark(mark_label);
        };
        window.TSMark('start_load');


        window.TSMeasureAndBeacon = function (measure_label, start_mark_label) {
            if (start_mark_label === 'start_nav' && window.performance && window.performance.timing) {
                window.TSBeacon(measure_label, (new Date()).getTime() - performance.timing.navigationStart);
                return;
            }
            if (!window.performance || !window.performance.mark || !window.performance.measure) return;
            performance.mark(start_mark_label + '_end');
            try {
                performance.measure(measure_label, start_mark_label, start_mark_label + '_end');
                window.TSBeacon(measure_label, performance.getEntriesByName(measure_label)[0].duration);
            } catch (e) {

            }
        };


        if ('sendBeacon' in navigator) {
            window.TSBeacon = function (label, value) {
                var endpoint_url = window.ts_endpoint_url || 'https://slack.com/beacon/timing';
                navigator.sendBeacon(endpoint_url + '?data=' + encodeURIComponent(label + ':' + value), '');
            };
        } else {
            window.TSBeacon = function (label, value) {
                var endpoint_url = window.ts_endpoint_url || 'https://slack.com/beacon/timing';
                (new Image()).src = endpoint_url + '?data=' + encodeURIComponent(label + ':' + value);
            };
        }
    })();
</script>


<script>
    window.TSMark('step_load');
</script>
<noscript>
    <meta http-equiv="refresh" content="0; URL=/downloads/osx?nojsmode=1"/>
</noscript>
<script type="text/javascript">
    if (self !== top) window.document.write("\u003Cstyle>body * {display:none !important;}\u003C\/style>\u003Ca href=\"#\" onclick=" +
        "\"top.location.href=window.location.href\" style=\"display:block !important;padding:10px\">Go to Slack.com\u003C\/a>");

    (function () {
        var timer;
        if (self !== top) {
            timer = window.setInterval(function () {
                if (window.$) {
                    try {
                        $('#page').remove();
                        $('#client-ui').remove();
                        window.TS = null;
                        window.clearInterval(timer);
                    } catch (e) {
                    }
                }
            }, 200);
        }
    }());

</script>

<script>(function () {
        'use strict';

        window.callSlackAPIUnauthed = function (method, args, callback) {
            var timestamp = Date.now() / 1000;
            var version = (window.TS && TS.boot_data && TS.boot_data.version_uid) ? TS.boot_data.version_uid.substring(0, 8) : 'noversion';
            var url = '/api/' + method + '?_x_id=' + version + '-' + timestamp;
            var req = new XMLHttpRequest();

            req.onreadystatechange = function () {
                if (req.readyState == 4) {
                    req.onreadystatechange = null;
                    var obj;

                    if (req.status == 200 || req.status == 429) {
                        try {
                            obj = JSON.parse(req.responseText);
                        } catch (err) {
                            TS.console.warn(8675309, 'unable to do anything with api rsp');
                        }
                    }

                    obj = obj || {
                        ok: false,
                    };

                    callback(obj.ok, obj, args);
                }
            };

            var async = true;
            req.open('POST', url, async);

            var form_data = new FormData();
            var has_data = false;
            Object.keys(args).forEach(function (k) {
                if (k[0] === '_') return;
                form_data.append(k, args[k]);
                has_data = true;
            });

            if (has_data) {
                req.send(form_data);
            } else {
                req.send();
            }
        };
    })();
</script>

<script type="text/javascript" src="https://a.slack-edge.com/bv1-1/webpack.manifest.7fb1c9df9aaf8648e51a.min.js"
        crossorigin="anonymous" onload="window._cdn && _cdn.ok(this, arguments)"
        onerror="window._cdn && _cdn.failed(this, arguments)"></script>


<
script >
if (window.location.host == 'slack.com' && window.location.search.indexOf('story') < 0) {
    document.cookie = '__cvo_skip_doc=' + escape(document.URL) + '|' + escape(document.referrer) + ';path=/';
}
</script>


<script type="text/javascript">

    try {
        if (window.location.hash && !window.location.hash.match(/^(#?[a-zA-Z0-9_]*)$/)) {
            window.location.hash = '';
        }
    } catch (e) {
    }

</script>

<script type="text/javascript">

    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'gtm.start': Date.now(),
        'event': 'gtm.js',

    });
    var firstScript = document.getElementsByTagName('script')[0];
    var thisScript = document.createElement('script');
    thisScript.async = true;
    thisScript.src = '//www.googletagmanager.com/gtm.js?id=GTM-KH2LPK';
    firstScript.parentNode.insertBefore(thisScript, firstScript);

    /* Once page is loaded, attach events */
    document.addEventListener("DOMContentLoaded", function (e) {
        var gtmDataLayer = window.dataLayer || [];
        var gtmTags = document.querySelectorAll('*[data-gtm-click]');
        var gtmClickHandler = function (c) {
            var gtm_events = this.getAttribute('data-gtm-click');
            if (!gtm_events) return;
            var gtm_events_arr = gtm_events.split(",");
            for (var e = 0; e < gtm_events_arr.length; e++) {
                var ev = gtm_events_arr[e].trim();
                gtmDataLayer.push({'event': ev});
            }
        };
        gtmTags.forEach(function (elem) {
            elem.addEventListener('click', gtmClickHandler);
        });
    });


    (function (e, c, b, f, d, g, a) {
        e.SlackBeaconObject = d;
        e[d] = e[d] || function () {
            (e[d].q = e[d].q || []).push([1 * new Date(), arguments])
        };
        e[d].l = 1 * new Date();
        g = c.createElement(b);
        a = c.getElementsByTagName(b)[0];
        g.async = 1;
        g.src = f;
        a.parentNode.insertBefore(g, a)
    })(window, document, "script", "https://a.slack-edge.com/bv1-1/slack_beacon.9555f5e382af865f618b.min.js", "sb");
    sb('set', 'token', '3307f436963e02d4f9eb85ce5159744c');

    sb('track', 'pageview');


    function track(a) {
        if (window.ga) ga('send', 'event', 'web', a);
        if (window.sb) sb('track', a);
    }


</script>


<meta name="referrer" content="no-referrer">
<meta name="superfish" content="nofish">

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


<script type="text/javascript">

    var TSSSB = {
        call: function () {
            return false;
        }
    };

</script>
<script>TSSSB.env = (function () {
        'use strict';

        var v = {
            win_ssb_version: null,
            win_ssb_version_minor: null,
            mac_ssb_version: null,
            mac_ssb_version_minor: null,
            mac_ssb_build: null,
            lin_ssb_version: null,
            lin_ssb_version_minor: null,
            desktop_app_version: null,
        };

        var is_win = (navigator.appVersion.indexOf('Windows') !== -1);
        var is_lin = (navigator.appVersion.indexOf('Linux') !== -1);
        var is_mac = !!(navigator.userAgent.match(/(OS X)/g));

        if (navigator.userAgent.match(/(Slack_SSB)/g) || navigator.userAgent.match(/(Slack_WINSSB)/g)) {

            var parts = navigator.userAgent.split('/');
            var version_str = parts[parts.length - 1];
            var version_float = parseFloat(version_str);
            var version_parts = version_str.split('.');
            var version_minor = (version_parts.length == 3) ? parseInt(version_parts[2], 10) : 0;

            if (navigator.userAgent.match(/(AtomShell)/g)) {

                if (is_lin) {
                    v.lin_ssb_version = version_float;
                    v.lin_ssb_version_minor = version_minor;
                } else if (is_win) {
                    v.win_ssb_version = version_float;
                    v.win_ssb_version_minor = version_minor;
                } else if (is_mac) {
                    v.mac_ssb_version = version_float;
                    v.mac_ssb_version_minor = version_minor;
                }

                if (version_parts.length >= 3) {
                    v.desktop_app_version = {
                        major: parseInt(version_parts[0], 10),
                        minor: parseInt(version_parts[1], 10),
                        patch: parseInt(version_parts[2], 10),
                    };
                }
            } else {

                v.mac_ssb_version = version_float;
                v.mac_ssb_version_minor = version_minor;


                var app_ver = window.macgap && macgap.app && macgap.app.buildVersion && macgap.app.buildVersion();
                var matches = String(app_ver).match(/(?:\()(.*)(?:\))/);
                v.mac_ssb_build = (matches && matches.length == 2) ? parseInt(matches[1] || 0, 10) : 0;
            }
        }

        return v;
    })();
</script>


<script type="text/javascript">

    window.addEventListener('load', function () {
        var was_TS = window.TS;
        delete window.TS;
        if (was_TS) window.TS = was_TS;
    });
</script>
<title>Download Slack for Mac | Slack</title>
<meta name="author" content="Slack">


<!-- output_css "core" -->
<link href="https://a.slack-edge.com/975fe/style/rollup-plastic.css" rel="stylesheet" type="text/css"
      crossorigin="anonymous" onload="window._cdn && _cdn.ok(this, arguments)"
      onerror="window._cdn && _cdn.failed(this, arguments)">

<!-- output_css "before_file_pages" -->

<!-- output_css "file_pages" -->


<!-- output_css "regular" -->
<link href="https://a.slack-edge.com/bd0b6/style/downloads_new.css" rel="stylesheet" type="text/css"
      crossorigin="anonymous" onload="window._cdn && _cdn.ok(this, arguments)"
      onerror="window._cdn && _cdn.failed(this, arguments)">
<link href="https://a.slack-edge.com/7ea5f/style/brand_base.css" rel="stylesheet" type="text/css"
      crossorigin="anonymous" onload="window._cdn && _cdn.ok(this, arguments)"
      onerror="window._cdn && _cdn.failed(this, arguments)">
<link href="https://a.slack-edge.com/b003/style/libs/lato-2-compressed.css" rel="stylesheet" type="text/css"
      crossorigin="anonymous" onload="window._cdn && _cdn.ok(this, arguments)"
      onerror="window._cdn && _cdn.failed(this, arguments)">
<link href="https://a.slack-edge.com/0b8a3/style/sticky_nav.css" rel="stylesheet" type="text/css"
      crossorigin="anonymous" onload="window._cdn && _cdn.ok(this, arguments)"
      onerror="window._cdn && _cdn.failed(this, arguments)">
<link href="https://a.slack-edge.com/19253/style/footer.css" rel="stylesheet" type="text/css"
      crossorigin="anonymous" onload="window._cdn && _cdn.ok(this, arguments)"
      onerror="window._cdn && _cdn.failed(this, arguments)">
<link href="https://a.slack-edge.com/98897/style/_helpers.css" rel="stylesheet" type="text/css"
      crossorigin="anonymous" onload="window._cdn && _cdn.ok(this, arguments)"
      onerror="window._cdn && _cdn.failed(this, arguments)">


<meta name="description"
      content="Sign in to multiple teams, get desktop notifications, and launch right from your dock.">


<link id="favicon" rel="shortcut icon" href="https://a.slack-edge.com/bc86/marketing/img/meta/favicon-32.png"
      sizes="16x16 32x32 48x48" type="image/png"/>

<link rel="icon" href="https://a.slack-edge.com/bc86/marketing/img/meta/app-256.png" sizes="256x256"
      type="image/png"/>

<link rel="apple-touch-icon-precomposed" sizes="152x152"
      href="https://a.slack-edge.com/bc86/marketing/img/meta/ios-152.png"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144"
      href="https://a.slack-edge.com/bc86/marketing/img/meta/ios-144.png"/>
<link rel="apple-touch-icon-precomposed" sizes="120x120"
      href="https://a.slack-edge.com/bc86/marketing/img/meta/ios-120.png"/>
<link rel="apple-touch-icon-precomposed" sizes="114x114"
      href="https://a.slack-edge.com/bc86/marketing/img/meta/ios-114.png"/>
<link rel="apple-touch-icon-precomposed" sizes="72x72"
      href="https://a.slack-edge.com/bc86/marketing/img/meta/ios-72.png"/>
<link rel="apple-touch-icon-precomposed" href="https://a.slack-edge.com/bc86/marketing/img/meta/ios-57.png"/>

<meta name="msapplication-TileColor" content="#FFFFFF"/>
<meta name="msapplication-TileImage" content="https://a.slack-edge.com/bc86/marketing/img/meta/app-144.png"/>

<!--[if lt IE 9]>
<script src="https://a.slack-edge.com/bv1-1/html5shiv.e7cd7843b61b9c027447.min.js"></script>
<![endif]-->