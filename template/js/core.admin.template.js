$(document).ready(function(){
    
    $.datepicker.setDefaults(
        $.extend($.datepicker.regional["ru"])
        );    
    mahmood_podzhigaj();
    
    $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd",
        //  changeMonth: true,
        showButtonPanel: true,
        showAnim: 'slideDown'
    });
    
    $('#grid').dataTable({
        oLanguage:{
            "sUrl": "/templatejs/language/ru_RU.txt"
        }
    });
    
    $('#tabs').tabs({
        fx: {
            opacity: 'toggle'
        }
    });
    
});

$(function(){
    $("a.ajax").live('click',function() {
        // кладём ссылку в историю.
        history.pushState( null, null, this.href );

        loadContent($(this).attr('href'));

        // return false, да.
        return false;
    });

    // вешаем событие на popstate которое срабатывает при нажатии back/forward в браузере
    $( window ).bind( "popstate", function( e ) {

        // получаем нормальный объект Location
        var returnLocation = history.location || document.location;


        loadContent(returnLocation);
    });
   
});

function loadContent(url){
    $('#preload').fadeIn(100);

    $.ajax({
        url: url,
        success: function(data) {
            $('#content').html(data);
            $('#preload').fadeOut(100);
        }
    });
}

$(document).ajaxStop(function(){
    $.datepicker.setDefaults(
        $.extend($.datepicker.regional["ru"])
        );    
    mahmood_podzhigaj();
    $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd",
        //  changeMonth: true,
        showButtonPanel: true,
        showAnim: 'slideDown'
    });
    
});
function mahmood_podzhigaj() {
    $('textarea').wysiwyg({
        controls: {
            bold          : {
                visible : true
            },
            italic        : {
                visible : true
            },
            underline     : {
                visible : true
            },
            strikeThrough : {
                visible : true
            },
			
            justifyLeft   : {
                visible : true
            },
            justifyCenter : {
                visible : true
            },
            justifyRight  : {
                visible : true
            },
            justifyFull   : {
                visible : true
            },

            indent  : {
                visible : true
            },
            outdent : {
                visible : true
            },

            subscript   : {
                visible : true
            },
            superscript : {
                visible : true
            },
			
            undo : {
                visible : true
            },
            redo : {
                visible : true
            },
			
            insertOrderedList    : {
                visible : true
            },
            insertUnorderedList  : {
                visible : true
            },
            insertHorizontalRule : {
                visible : true
            },

            h4: {
                visible: true,
                className: 'h4',
                command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
                arguments: ($.browser.msie || $.browser.safari) ? '<h4>' : 'h4',
                tags: ['h4'],
                tooltip: 'Header 4'
            },
            h5: {
                visible: true,
                className: 'h5',
                command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
                arguments: ($.browser.msie || $.browser.safari) ? '<h5>' : 'h5',
                tags: ['h5'],
                tooltip: 'Header 5'
            },
            h6: {
                visible: true,
                className: 'h6',
                command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
                arguments: ($.browser.msie || $.browser.safari) ? '<h6>' : 'h6',
                tags: ['h6'],
                tooltip: 'Header 6'
            },
			
            cut   : {
                visible : true
            },
            copy  : {
                visible : true
            },
            paste : {
                visible : true
            },
            html  : {
                visible: true
            },
            increaseFontSize : {
                visible : true
            },
            decreaseFontSize : {
                visible : true
            },
            exam_html: {
                exec: function() {
                    this.insertHtml('<abbr title="exam">Jam</abbr>');
                    return true;
                },
                visible: true
            }
        },
        events: {
            click: function(event) {
                if ($("#click-inform:checked").length > 0) {
                    event.preventDefault();
                    alert("You have clicked jWysiwyg content!");
                }
            }
        }
    });

//         $('#text').wysiwyg("insertHtml", "Sample code");      
}