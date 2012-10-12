<!doctype html>

<html>
    
    <head>
        <title>Index</title>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        
        <script type="text/javascript">
            
            (function($) {
                
                $("document").ready(function() {
                    
                    //alert("Ready");
                    
                    $("#submit").click(function() {
                        
                        $(".list")
                            .css({"text-decoration": "underline",
                                "color": "#0000cc",
                                "cursor": "pointer"
                            });
                        /*
                        $(".list:even")
                            .css({"text-decoration": "overline",
                                "color": "#0000cc",
                                "cursor": "pointer"
                            });
                        */
                    });
                    
                    $("#show").click(function() {
                        //$("#para").show("slow");
                        loading(true, "loading2");
                    });
                    
                    $("#hide").click(function() {
                        //$("#para").hide("slow");
                        loading(false, "loading2");
                    })
                    
                    
                    //$(".list").click(function() {
                    //    console.log($(this).text());
                    //})
                    
                    $("#container").click(function(e) {
                        
                        var arr = [];
                        var $target = $(e.target);
                        
                        //console.log(target.text());
                        if($target.is("li")) {
                            console.log($target.text());
                            //arr.push($target.text());
                        }
                        else  if($target.is("span")) {
                            console.log($target.text());
                            //arr.push($target.text());
                        }
                        console.log(arr);
                    })
                    
                }) // END $(document).ready(function()
                
                function loading(value, id) {
                    
                    if(value === undefined)
                        value = true;
                    
                    if(id === undefined)
                        id = "loading";
                    
                    if(value)
                        $("#"+id).show();
                    else
                        $("#"+id).hide();
                        
                }
                
                
            })(jQuery);
            
        </script>
        
        
    </head>


    <body>
        <div id="container">
            <div id="para" class="parag">
                <ul id="list" style="list-style: none">
                    <li class="list">List 1</li>
                    <li class="list">List 2</li>
                    <li class="list">List 3</li>
                    <li class="list">List 4</li>
                    <li class="list">List 5</li>
                </ul>
                <span id="span">Span 1</span>
            </div>
            <p class="parag">
                <a id="submit" href="#">Submit</a> | 
                <a id="show" href="#">Show</a> | 
                <a id="hide" href="#">Hide</a>
            </p>
            
            <div id="loading" style="display:none">
                <img src="assets/images/throbber.gif" />               
            </div>
            <div id="loading2" style="display:none">
                <img src="assets/images/bg_throbber.gif" />
            </div>
            
        </div>
    </body>

</html>


