var $ = jQuery;
jQuery(document).ready(function () {
  var code = jQuery(".codemirror-textarea")[0];
  var editor = CodeMirror.fromTextArea(code, {
    mode: 'text/html',
    tabMode: 'indent',
    autoCloseTags: true,
    lineNumbers: true,
    fixedGutter: true,
    lineWrapping: true,
    autoCloseBrackets: true
  });

   jQuery("#tab-2, #tab-3, #tab-4, #tab-5, #tab-6, #tab-7, #tab-8, #tab-9").hide();
   jQuery("body").on("click", ".twss-mytab", function () {
      jQuery(".twss-mytab").removeClass("active");
      jQuery(this).addClass("active");
      var ids = jQuery(this).attr("id");
      ids = parseInt(ids.substring(3));
      jQuery("#tab-1, #tab-2, #tab-3, #tab-4, #tab-5, #tab-6, #tab-7, #tab-8, #tab-9").hide();
      jQuery("#tab-" + ids).show();
      jQuery("#tab6").click(function(event) {
        jQuery(".codemirror-textarea").focus();
      });
      return false;
   });


});
