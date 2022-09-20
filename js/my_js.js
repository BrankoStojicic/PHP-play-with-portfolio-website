    document.getElementById("hide").addEventListener("click", hide);
	document.getElementById("getItBack").addEventListener("click", getBack);
	var hideDiv = document.getElementById('hide');
	var returnDiv = document.getElementById('getItBack');
		function hide() {
		
		if(hideDiv){
			document.getElementById('navbar-stuff').style.display = "none";
			document.getElementById('getItBack').style.display = "block";
		}
		
	}
		function getBack(){
			if(returnDiv){
			document.getElementById('navbar-stuff').style.display = "block";
			document.getElementById('getItBack').style.display = "none";
		}
		}
function background_change(clicked_id)
{
    switch(clicked_id){
        case clicked_id = "home":
            document.body.style.backgroundImage = "url(images/2.jpeg)";
             document.body.style.backgroundColor = "";
        break;
        case clicked_id = "about":
            document.body.style.backgroundImage = "url(images/back2.png)";
            document.body.style.backgroundColor = "";
        break;
            case clicked_id = "skills":
            document.body.style.backgroundImage = "url(images/back3.png)";
            document.body.style.backgroundColor = "";
        break;
            case clicked_id = "work":
            document.body.style.backgroundImage = "url(images/back4.png)";
            document.body.style.backgroundColor = "";
        break;
            case clicked_id = "blog":
            document.body.style.backgroundImage = "url(images/back5.png)";
            document.body.style.backgroundColor = "";
        break;
            case clicked_id = "contact":
            document.body.style.backgroundImage = "url(images/back6.png)";
            document.body.style.backgroundColor = "";
        break;
    }
}
