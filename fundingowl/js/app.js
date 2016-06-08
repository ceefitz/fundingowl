jQuery(document).ready(function($) {
	$(document).ready(function(){
       $("#navwrapper").sticky({topSpacing:0});
       $("#accordion").accordion({ collapsible: true, active: false });
        });
});
function myFunction() {
	    document.getElementsByClassName("search-form")[0].classList.toggle("clicky");
	}