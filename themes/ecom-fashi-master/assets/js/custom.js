(function ($){
    "use script";
    let navItems = document.querySelectorAll(".navItem");
    let navSubItems = document.querySelectorAll(".navSubItem");
    let piPic = document.querySelectorAll(".pi-pic");
    let zoomIn = document.querySelector("#zoomInModel");
    let filterGallery = document.querySelector("#filterGallery");


    navItems.forEach(item=>{
        let itemLink = item.querySelector('a').href.replaceAll("#","");
        let currentLink = location.href.replaceAll("#","");
        if (itemLink === currentLink) {
            item.classList.add("active")
        }
    })

    navSubItems.forEach(item=>{
        let itemLink = item.querySelector('a').href.replaceAll("#","");
        let currentLink = location.href.replaceAll("#","");
        if (itemLink === currentLink) {
            item.classList.add("active")
            item.closest(".hasDropdown").classList.add("activeDropdown")
        }
    })

    piPic.forEach(item=>{
        item.addEventListener('click',()=>{
            zoomIn.querySelector("img").src = item.querySelector("img").src
            $("#zoomInModel").modal("show");
        })
    })

    if (filterGallery) {
        let filterBtns = filterGallery.querySelectorAll("li");
        let productSlider = filterGallery.parentElement.querySelectorAll(".product-slider")
        filterBtns.forEach((item, key) => {
            if(key === 0){
                item.classList.add('active');
            }
            item.addEventListener('click', ()=>{
                filterBtns.forEach((btn, bKey)=>{
                    if(key === bKey){
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                })

                productSlider.forEach((contentItem, pKey) => {
                    if(key === pKey){

                        contentItem.classList.remove('d-none')
                    } else {
                        contentItem.classList.add('d-none')
                    }
                })
            })
        })
    }

})(jQuery)
