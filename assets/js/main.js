
console.log('Javascript is working.');


/**
 * Loads a view.
 * @param href
 * @param callback
 */
function loadPage(href) {
    var xhr = new XMLHttpRequest(); // Usual mix-and-matching for x-browser omitted for brevity
    xhr.onload = function() {
        // readyState 4 means the request is done, If the HTTP request has completed
        // status 200 is a successful return, If the HTTP response code is 200 (e.g. successful)
        if (this.readyState == 4 && this.status == 200) {
            sendToContent(this); // Retrieve the response text
        }
        // An error occurred during the request.
    };
    xhr.open("GET", href, true);
    xhr.send();
}

function sendToContent(result){
    return document.getElementById("content").innerHTML = result.response;
}
