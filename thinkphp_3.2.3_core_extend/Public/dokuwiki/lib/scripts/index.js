var dw_index = jQuery('#index__tree').dw_tree({deferInit: true,
    load_data: function  (show_sublist, $clicky) {
        jQuery.post(
            /*DOKU_BASE*/DOKU_DAI_DEFINE + 'lib/exe/ajax.php',
            $clicky[0].search.substr(1) + '&call=index',
            show_sublist, 'html'
        );
    }
});
jQuery(function () {
    var $tree = jQuery('#index__tree');

    dw_index.$obj = $tree;

    dw_index.init();
});
