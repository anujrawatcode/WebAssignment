function fun() {
    var links = document.getElementsByTagName('a');

    for (var i = 0; i < links.length; i++) {
        console.log(links[i].href);
    }
}
