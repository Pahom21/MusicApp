function addPlaylist() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("form-container").innerHTML = this.responseText;
            document.getElementById("form-container").style.display = "block";
        }
    };
    xhr.open("GET", "playlist-form.html", true);
    xhr.send();
}

function submitForm() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("form-container").innerHTML = this.responseText;
            // Optionally, you can hide the form container after submission
            document.getElementById("form-container").style.display = "none";
        }
    }
    xhr.open("POST", "submit-form.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var playlistName = document.getElementById("playlist-name").value;
    xhr.send("playlist-name=" + encodeURIComponent(playlistName));
}

document.getElementById("btn-add").addEventListener("click", addPlaylist);