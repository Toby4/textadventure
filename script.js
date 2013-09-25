function ajax(text) {
    var xhReq;
    xhReq = new XMLHttpRequest();
    
    var stage;
    stage = document.getElementById("stage");

    var url;
    url = "ajax.php?s=" + stage.value + "&q=" + text;
    
    xhReq.open("GET", url, false);
    xhReq.send(null);
    
    var console;
    console = document.getElementById("console");
    console.innerHTML = xhReq.responseText;
    
    stage.value = parseInt(stage.value) + 1;
    
}