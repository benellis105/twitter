function search() {
    var searchValue = document.getElementById("searchField");
    var search = searchValue.value
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("outputBox").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "twitter.php?user=" + search , true);
    xhttp.send();
}