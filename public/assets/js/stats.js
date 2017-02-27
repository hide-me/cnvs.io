if (jQuery) {
    (function ($, undefined) {
        'use strict';
        $(function () {
            main();
        });
        function main() {
            $(document).ready(function () {
                $.get('http://packagist.org/packages/austintoddj/canvas/downloads.json', function (res) {
                    var downloads_total = res.package.downloads.total.total;
                    $('#repo_downloads_count').html(downloads_total);
                });
                $.get('https://api.github.com/repos/cnvs/canvas/contributors', function (num) {
                    $('#repo_contributors').html(num.length);
                });
                $.get('https://api.github.com/repos/cnvs/canvas', function (res) {
                    $('#repo_stars').html(res.stargazers_count);
                    $('#repo_forks').html(res.forks_count);
                });
            });
        }
    })(jQuery);
}