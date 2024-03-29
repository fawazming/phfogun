//https://photos.app.goo.gl/UvTHRhUedc7NN81c6
document.addEventListener('DOMContentLoaded', function() {
    fetch('https://galleria.sgm.ng/UvTHRhUedc7NN81c6').then(res => res.json()).then(dt => {
        let preloader = document.querySelector('.page-loader');
        let gallery = document.querySelector('#gallery');
        console.log(dt)
        let output = ``
        if (dt == undefined) {
            output = `<center><h2>No Photos currently</h2></center>`
            gallery.innerHTML += output;
        } else {
            dt.forEach((post) => {
                    output += `
        <div class="project item col-md-6 col-xl-4 product">
          <figure class="lift rounded mb-6"><a href="${post}"> <img src="${post}" /></a></figure>
        </div>
        `;
            })
            gallery.innerHTML = output;
            theme.isotope();
        }
        if (!preloader.classList.contains('done')) {
            preloader.classList.add('done');
        }

    })
})