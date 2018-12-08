document.addEventListener('DOMContentLoaded', function () {
	var agiframewrappers = document.querySelectorAll('.agiframewrapper');

	// For all agiframewrappers [start]
	[].forEach.call(agiframewrappers, function (element) {

            var modulid = element.getAttribute('data-modul_id');
            var url_active = element.getAttribute('data-url_active');
            var url_deactive = element.getAttribute('data-url_deactive');
            
            //alert(modulid);
            var activate = document.getElementById('agenable-' + modulid);
            var deactivate = document.getElementById('agdisable-' + modulid);
            
            if (activate) {
                activate.addEventListener("click", function (e) {

                    element.src = url_active;
                    
                    if (deactivate) {
                        deactivate.style.display = "block";
                    }
                    
                    if (activate) {
                        activate.style.display = "none";
                    }
                });
            }
            
            if (deactivate) {
                deactivate.addEventListener("click", function (e) {

                    element.src = url_deactive;
                    
                    if (deactivate) {
                        deactivate.style.display = "none";
                    }
                    
                    if (activate) {
                        activate.style.display = "block";
                    }
                });
            }

            element.addEventListener("click", function (e) {
                alert('enbale button disalbe this');
            });

	});
        
}, false);

