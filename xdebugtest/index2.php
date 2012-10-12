<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lab Test</title>
        
        
        
        <style>
        .ui-autocomplete-loading { background: red url('assets/css/ui-lightness/images/throbber.gif') right center no-repeat; }
	</style>
        
        <link type="text/css" rel='stylesheet' href="assets/css/ui-lightness/jquery-ui-1.8.18.custom.css" />
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        
        <script src="js/jquery.autocomplete.min.js"></script>
        
        <script>
            
            (function(){
                
                $(document).ready(function(){
                    
                    $('#ac').autocomplete('data2.php', {
				width: 290,
				max: 500,
				delay: 100,
                                minChars: 3,
				mustMatch: false,
				selectFirst: false,
				autoFill: false,
				matchContains: true,
				matchSubset: false,
				//formatItem: formatItem,
				//formatResult: formatResult,
				extraParams: {a: 'autocomplete'}
			});
                    
                    $('#ac').result(function(event, data) {
                            alert(data);
                            console.log(data);
                            
				/*
                                if (data) 
                                if (data[1]) if (!isNaN(data[1])) 
                                {
                                    var wheretogo = null;
                                    switch ($('#quick-header').data('focus')) {
                                            case 'qsfocus_corporate': 
                                                    if(data[2] == 'c') wheretogo = '/profile-corporate.php?id=' + data[1];
                                                    else wheretogo = '/profile-brand.php?id=' + data[1];
                                                    break;
                                            case 'qsfocus_agency': 
                                                wheretogo = '/profile-agency.php?id=' + data[1]; 
                                                break;
                                            case 'qsfocus_brand': 
                                                wheretogo = '/profile-brand.php?id=' + data[1]; 
                                                break;
                                            case 'qsfocus_person': 
                                                if(data[4] == 'a') 
                                                    wheretogo = '/profile-agency.php?id=' + data[1] + '&pid=' + data[3] + '#goto_contacts';
                                                else 
                                                    wheretogo = '/profile-location.php?id=' + data[2] + '&pid=' + data[3];
                                                break;
                                    }
                                    
				}
				*/
			});
                    
                    function formatItem(row) {
                                //alert("formatItem() = " + row + ": " + row[0] + " - " + row[1]);
                                
				if(row[2]) {
					var type = null;
					switch(row[2]) {
						case 'c': var type = ' <strong>(Company)</strong>'; break;
						case 'b': var type = ' <span class="thelistblue">(Brand)</span>'; break;
					}
					if(type) return row[0] + type;
				}
				return row[0];
			}
                    function formatResult(row){
                        
                        
                        
                        var ret = row[0].replace(/(<.+?>)/gi, '')
                        
                        //alert("formatResult() = " + row + ": " + row[0] + ", " + row[1] + " - " + ret);
                        return ret;
                    };
                    
                });
                
            })();
            
        </script>
        
    </head>
    <body>
        
        <?php
            include_once 'classes/CEmployee.php';
            
            if(isset($_GET['submit'])) {
                $empClass = new CEmployee();
                $empClass->whoArtThou();
            }
        ?>
        
        <form action="" method="get">
            <input type="submit" name="submit" value="Submit" />
        </form>
        
        <div id="search_box" class="ui-widget">
            <input id="ac"/>
        </div>
        
    </body>
</html>
