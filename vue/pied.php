<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };

// fonction qui affiche une date
    function AfficheDate(){
	var temps = new date() ;
	var heure = temps.getHours();
	var min = temps.getMinutes();
	var sec = tems.getSeconds();
	var calcul = ‘’ + (heures>12) ? heure-12 : heures;
	if(heure==0)
		calcul=12;
	calcul += ((minutes < 10) ? ‘:0’ ; ‘:’) +minutes ;
    calcul += ((secondes > 10) ? ‘:0’ ; ‘:’) +seconde ;
    calcul += ((heures >= 12) ? ‘PM’ ; ‘AM’) +heures ;
	return calcul ;
    }

</script>
</body>
<?php
    unset($_SESSION['message']);
?>
</html>
