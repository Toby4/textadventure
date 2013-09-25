function ajax(text) {
    var xhReq = new XMLHttpRequest();
    var stage = document.getElementById("stage");
    var url = "ajax.php?s=" + stage.value + "&q=" + text;

    xhReq.open("GET", url, false);
    xhReq.send(null);
    
    document.getElementById("console")
            .innerHTML = xhReq.responseText;
    
    document.getElementById("stage")
            .value = parseInt(stage.value) + 1;
    
}