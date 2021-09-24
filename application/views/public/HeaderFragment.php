<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fakultas Kesehatan Masyarakat - Universitas Sriwijaya " />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/icon/') ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/icon/') ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/icon/') ?>favicon-16x16.png">
    <link rel="manifest" href="<?= base_url('assets/icon/') ?>site.webmanifest?v=0.0.1">

    <meta name="author" content="">
    <link media="all" href="<?= base_url('assets') . '/css/custom2.css' ?>" rel="stylesheet" />
    <link media="screen" href="<?= base_url('assets') . '/css/custom3.css' ?>" rel="stylesheet" />
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-12978503-1']);
        _gaq.push(['_setDomainName', 'fkm.unsri.ac.id']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <link rel="manifest" href="<?= base_url('assets/') ?>manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="theme-color" content="#ffffff">

    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {

            }
        };

        ! function(e, a, t) {
            var r, n, o, i, p = a.createElement("canvas"),
                s = p.getContext && p.getContext("2d");

            function c(e, t) {
                var a = String.fromCharCode;
                s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
                var r = p.toDataURL();
                return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
            }

            function l(e) {
                if (!s || !s.fillText) return !1;
                switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
                    case "flag":
                        return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
                    case "emoji":
                        return !c([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340])
                }
                return !1
            }

            function d(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (i = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
        }(window, document, window._wpemojiSettings); /*]]>*/
    </script>
    <link rel='https://api.w.org/' href='<?= base_url('assets/') ?>ub_template.json' />

    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome-5.15.1/css/fontawesome.min.css">

    <meta name="generator" content="qTranslate-X 3.4.6.8" />
    <script>
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
    <script src="https://use.fontawesome.com/4f3417ca28.js"></script>
    <link href="<?= base_url('assets/') ?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/') ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/plugins/popper/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/custom_me.js"></script>
    <script src="https://use.fontawesome.com/04ff81431e.js"></script>

    <title>FKM UNSRI | <?= $title ?></title>
</head>

<body class="home blog wp-custom-logo">