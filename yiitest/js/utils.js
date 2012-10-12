/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


(function($) {

$("#clickMe").click(function(e) {    
    alert("You clicked me!");
    e.preventDefault();
});

})(jQuery);