<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lab Test</title>
        
        <style>
         /*
          * jQuery UI Autocomplete 1.8.18
         */
	.ui-autocomplete-loading { background: white url('assets/css/ui-lightness/images/throbber.gif') right center no-repeat; }
        .ui-widget-content { border: 1px solid #dddddd; background: #ffffff url(images/ui-bg_highlight-soft_100_eeeeee_1x100.png) 50% top repeat-x; color: #333333; }
        
        
        /*.ui-widget-content { border: 1px solid #dddddd; }*/
        
        .ui-widget-content a { color: #333333; }
        .ui-menu { list-style:none; padding: 2px; margin: 0; display:block; float: left; }
        
        .ui-autocomplete { position: absolute; cursor: default; }

        .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */
        .ui-menu { list-style:none; padding: 2px; margin: 0; display:block; float: left; }
        .ui-menu .ui-menu { margin-top: -3px; }
        .ui-menu .ui-menu-item { margin:0; padding: 0; zoom: 1; float: left; clear: left; width: 100%; }
        .ui-menu .ui-menu-item a { text-decoration:none; display:block; padding:.2em .4em; line-height:1.5; zoom:1; }
        .ui-menu .ui-menu-item a.ui-state-hover,
        .ui-menu .ui-menu-item a.ui-state-active { background-color: #2D8DC6; }
        .odd-bg-color { background-color: #ccc; }
        
        
        .button{ display:inline-block; border:1px solid #c9c9c9; line-height:14.75px; font-size:12px; text-decoration:none; color:#369; font-family:Arial, Helvetica, sans-serif; text-align:center; letter-spacing:1px; white-space:normal; cursor:pointer; background:url(assets/images/btn-gbg-on.jpg) repeat-x; border-radius:4px; -moz-border-radius:4px; -webkit-border-radius:4px; margin:4px 2px; padding:5px 12px; }
        .button:hover{ border:1px solid #0476bb; }
        input.button{ padding:6px 8px 5px; }
        input.button,a.button{ margin-left:0; margin-right:0; padding-left:8px; padding-right:8px; }
        span.btnwrap_hover input.button,span.btnwrap_hover a.button{ border-color:#0476bb; }
        span.btnwrap_w{ display:inline-block; padding-left:4px; margin-left:2px; background:url(assets/images/ie/btn_w.gif) no-repeat left; }
        span.btnwrap_e{ display:inline-block; padding-right:4px; margin-right:2px; background:url(assets/images/ie/btn_e.gif) no-repeat right; }
        span.btnwrap_hover span.btnwrap_w{ background-image:url(assets/images/ie/btn_w_hover.gif); }
        span.btnwrap_hover span.btnwrap_e{ background-image:url(assets/images/ie/btn_e_hover.gif); }
        
        #linkedin {
            border:1px solid red;
            width: 365px;
            height: 295px;
            background: url('assets/css/ui-lightness/images/throbber.gif') center center no-repeat;
        </style>
        
        <!--[if IE]>
            <style>
                input.button, a.button{ border-left: none; border-right: none; }
                input.button:hover, a.button:hover{ border-left: none; border-right: none; }
            </style>
        <![endif]-->
        
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://platform.linkedin.com/in.js"></script>
        
        <script>
            
            (function() { // START (function(){
                
                /*
                * jQuery Plugin.
                * Adds rounded image in the left and right side of any element - preferrably button and links -
                * for IE browsers because as of this writting, it does not support corners.
                */
                $.fn.beautifyButton = function() {
                    if(!$.browser.msie)
                        return;
                    else if($.browser.version.substr(0,1) > 8)
                        return;
                    
                    var $this = $(this);
                    if ($this.hasClass("button")) {
                        $this.wrap('<span class="btnwrap"><span class="btnwrap_w"><span class="btnwrap_e"></span></span></span>');
                            
                        $(".btnwrap").hover(
                            function() {
                                $(this).addClass("btnwrap_hover");
                            }, 
                            function() {
                                $(this).removeClass("btnwrap_hover");
                            }
                        );
                    }
                }
                
                /* 
                * Javascript function.
                * Adds rounded image in the left and right side of any element - preferrably button and links -
                * for IE browsers because as of this writting, it does not support corners.
                */
                function beautifyIEButton(buttonID) {
                    if(!$.browser.msie)
                        return;
                    else if($.browser.version.substr(0,1) > 8)
                        return;
                    
                    var element = $("#"+buttonID);
                    if (element.hasClass("button")) {
                        element.wrap('<span class="btnwrap"><span class="btnwrap_w"><span class="btnwrap_e"></span></span></span>');
                            
                        $(".btnwrap").hover(
                            function() {
                                $(this).addClass("btnwrap_hover");
                            }, 
                            function() {
                                $(this).removeClass("btnwrap_hover");
                            }
                        );
                    }
                }
                
                
                
                $(document).ready(function(){
                    
                    $(window).unload(function() {
                        if(event.clientY < 0) {
                            alert("Closing...");
                        }
                    });

                    
                    $("#btn1").beautifyButton();
                    $("#btn2").beautifyButton();
                    
                    //beautifyIEButton("btn1");
                    //beautifyIEButton("btn2");
                    
                   
                    $("#ac").autocomplete({
                        minLength: 2,
                        source: function(request, response){
                               $.ajax({
                                   url: "data.php",
                                   type: "POST",
                                   dataType: "json",
                                   data: {  a: 'autocomplete',
                                            q: request.term,
                                            maxRows: 12,
                                            qsfocus: function(){
                                                return $('#quick-header').data('focus')
                                            }
                                        },
                                   success: function(data){
                                       response($.map(data, function(item){
                                           //var str = item.split("|");
                                           //return str[0];
                                           
                                           //return {label: str[0], value: str[1]};
                                           
                                           console.log(item);
                                           
                                           return item;
                                       }));
                                       
                                       $("li.ui-menu-item:odd").css("background-color", "#eee");
                                   }
                               })
                               
                           },
                           select: function(event, ui){
                               console.log(ui);
                               alert(ui.item.value);
                           }
                        
                    });
                    
                    
                    $('ul li.ui-menu-item').live('mouseup', function(){
                                alert("You selected something...");
			});
                    
                }) // END $(document).ready(function(){
                
            })(); //END (function(){
            
        </script>
        
    </head>
    <body>
        <?php
            include_once 'classes/CEmployee.php';
            
            $empClass = new CEmployee();
            $empClass->whoArtThou();
        ?>
        
        <a href="index2.php">index2.php</a>
        
        <div id="search_box">
            <input type="text" id="ac" name="ac" value="Keyword..." />
            <input type="text" id="ac2" name="ac" value="Keyword..." />
            
            <input type="button" id="btn1" class="button" name="ac" value="Keyword..." />
            <input type="button" id="btn2" class="button" name="ac" value="Keyword..." />
        </div>
        
        
        <script type="text/javascript">
                        
            $("document").ready(function() {
                var link = '<sc'+'ript type="IN/MemberProfile" data-id="http://www.linkedin.com/pub/jeanne-anderson/0/1a3/309" data-format="inline" data-related="true"></sc'+'ript>';

                //$("div#linkedin").delay(2000).html(link);
                $("div#linkedin").html(link);
                //IN.parse($('li#li')[0]);
            });

        </script>
        
        <div id="linkedin">
                    
            </ul>
        </div>
            
        
    </body>
</html>
    