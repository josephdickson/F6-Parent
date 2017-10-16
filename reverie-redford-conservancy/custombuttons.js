//////////////////////////////////////////////////////////////////
// Accordion shortcode button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.accordion', {  
        init : function(ed, url) {  
            ed.addButton('accordion', {  
                title : 'Insert an accordion',  
                image : url+'/button-accordion.png',  
                onclick : function() {  
                     ed.selection.setContent('[acc][accordion title="Title Goes Here"] accordion content goes here [/accordion][/acc]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('accordion', tinymce.plugins.accordion);  
})();

//////////////////////////////////////////////////////////////////
// Panel shortcode button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.panel', {  
        init : function(ed, url) {  
            ed.addButton('panel', {  
                title : 'Insert a panel',  
                image : url+'/button-panel.png',  
                onclick : function() {  
                     ed.selection.setContent('[panel class="small-12 large-4 columns small radius white right"] panel content goes here [/panel]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('panel', tinymce.plugins.panel);  
})();

//////////////////////////////////////////////////////////////////
// Div shortcode button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.div', {  
        init : function(ed, url) {  
            ed.addButton('div', {  
                title : 'Insert a div',  
                image : url+'/button-div.png',  
                onclick : function() {  
                     ed.selection.setContent('[div class=""][/div]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('div', tinymce.plugins.div);  
})();

//////////////////////////////////////////////////////////////////
// row shortcode button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.row', {  
        init : function(ed, url) {  
            ed.addButton('row', {  
                title : 'Insert a row',  
                image : url+'/button-row.png',  
                onclick : function() {  
                     ed.selection.setContent('[row][/row]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('row', tinymce.plugins.row);  
})();

//////////////////////////////////////////////////////////////////
// vimeo shortcode button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.vimeo', {  
        init : function(ed, url) {  
            ed.addButton('vimeo', {  
                title : 'Insert a vimeo video',  
                image : url+'/button-vimeo.png',  
                onclick : function() {  
                     ed.selection.setContent('[vimeo number="" title="Link Title" width="expand"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('vimeo', tinymce.plugins.vimeo);  
})();

//////////////////////////////////////////////////////////////////
// youtube shortcode button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.youtube', {  
        init : function(ed, url) {  
            ed.addButton('youtube', {  
                title : 'Insert a youtube video',  
                image : url+'/button-youtube.png',  
                onclick : function() {  
                     ed.selection.setContent('[youtube number="" title="Link Title" width="xlarge"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('youtube', tinymce.plugins.youtube);  
})();

//////////////////////////////////////////////////////////////////
// flex video - for responsive embedding of vimeo and youtube
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.flex', {  
        init : function(ed, url) {  
            ed.addButton('flex', {  
                title : 'Insert a youtube or vimeo link to embded',  
                image : url+'/button-flex.png',  
                onclick : function() {  
                     ed.selection.setContent('[flex number=]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('flex', tinymce.plugins.flex);  
})();

//////////////////////////////////////////////////////////////////
// citation shortcode button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.citation', {  
        init : function(ed, url) {  
            ed.addButton('citation', {  
                title : 'Insert a citation linked to a footnote - use the same number',  
                image : url+'/button-citation.png',  
                onclick : function() {  
                     ed.selection.setContent('[citation number="Place number here"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('citation', tinymce.plugins.citation);  
})();

//////////////////////////////////////////////////////////////////
// footnote shortcode button
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.footnote', {  
        init : function(ed, url) {  
            ed.addButton('footnote', {  
                title : 'Insert a footnote linked form a citation - use the same number',  
                image : url+'/button-footnote.png',  
                onclick : function() {  
                     ed.selection.setContent('[footnote number="Place number here"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('footnote', tinymce.plugins.footnote);  
})();

//////////////////////////////////////////////////////////////////
// break - Forced line break
//////////////////////////////////////////////////////////////////
(function() {  
    tinymce.create('tinymce.plugins.break', {  
        init : function(ed, url) {  
            ed.addButton('break', {  
                title : 'Insert a forced line break',  
                image : url+'/button-break.png',  
                onclick : function() {  
                     ed.selection.setContent('[break]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('break', tinymce.plugins.break);  
})();