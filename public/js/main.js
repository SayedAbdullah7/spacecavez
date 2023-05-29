
    const button = document.getElementById('bg');
    const moon = document.getElementById('moon');
    const bg = document.getElementById('bg');
    const banner2 = document.getElementById('banner2');
    const banner = document.getElementById('banner');
    const body = document.getElementById('body');
    const html = document.getElementById('html');

    document.querySelectorAll('input[type=radio]').forEach((radio) => {
    radio.addEventListener('change', (event) => {
        console.log(`Radio button ${event.target.value} was selected`);
        var page = event.target.value;
        if(page == 1) {
            body.className = '';
            body.classList.add('one');
        }else if(page == 2){
            body.className = '';
            body.classList.add('two');
        }else if(page == 3) {
            body.className = '';
            body.classList.add('three');
        }else if(page == 4){
            body.className = '';
            body.classList.add('four');
        }else if(page == 5){
            body.className = '';
            body.classList.add('five');
        }
    });
});

var elements = document.querySelectorAll(".dropdown-item");

//event
for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener("click", function() {
        // remove
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.remove("active");
        }
        this.classList.add("active");
    });
}
