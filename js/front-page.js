/** Drupal.behaviors.mhaa_fix_columns = function(context) {
    // $("#frontcol1 .block img").attr("align","center");

    var h1 = $("#front-right .content", context).height();
    var h2 = $("#front-left .content", context).height();
    var h3 = $("#front-center .content", context).height();
    var height = Math.max(h1, h2, h3);
    // alert(height + " > " + h1 + ", " + h2 + ", " + h3);

    if (h1 < height) {
        var delta = height - h1 + 14;
        var more = $("#front-right .content .views-field-view-node", context);
        $("#front-right .content", context).height(height);
        var top = more.css("marginTop");
        more.css("marginTop", delta);
    }
    if (h2 < height) {
        var delta = height - h2 + 14;
        var more = $("#front-left .content .views-field-view-node", context);
        $("#front-left .content", context).height(height);
        more.css("marginTop", delta);
    }
    if (h3 < height) {
        var delta = height - h3 + 14;
        var more = $("#front-center .content .views-field-view-node", context);
        $("#front-center .content", context).height(height);
        more.css("marginTop", delta);
    }
    // alert("Running behavior");
    // Handler for .ready() called.
}; */

function fix_features() {
    // $("#frontcol1 .block img").attr("align","center");

    var h1 = $("#front-right .content").height();
    var h2 = $("#front-left .content").height();
    var h3 = $("#front-center .content").height();
    var height = Math.max(h1, h2, h3);
    // alert(height + " > " + h1 + ", " + h2 + ", " + h3);

    if (h1 < height) {
        var delta = height - h1 + 14;
        var more = $("#front-right .content .views-field-view-node");
        $("#front-right .content").height(height);
        var top = more.css("marginTop");
        more.css("marginTop", delta);
    }
    if (h2 < height) {
        var delta = height - h2 + 14;
        var more = $("#front-left .content .views-field-view-node");
        $("#front-left .content").height(height);
        more.css("marginTop", delta);
    }
    if (h3 < height) {
        var delta = height - h3 + 14;
        var more = $("#front-center .content .views-field-view-node");
        $("#front-center .content").height(height);
        more.css("marginTop", delta);
    }
    // alert("Running behavior");
    // Handler for .ready() called.
}

// $(document).ready(alert("ready"));
// $(window).resize(alert("resize"));

