AFRAME.registerComponent('markerhandler', {

    init: function() {
        var clicks = false;
        const animatedMarker = document.querySelector("#animated-marker");
        const aEntity = document.querySelector("#WebPress");
        document.querySelector("#animated-marker").addEventListener('markerFound', (evt) => {
                clicks = true
            })
        document.querySelector("#animated-marker").addEventListener('markerLost', (evt) => {
                clicks = false
            }) 
        
        animatedMarker.addEventListener('click', function(ev, target){
            const intersectedElement = ev && ev.detail && ev.detail.intersectedEl;
            if (aEntity && intersectedElement === aEntity) {
                console.log("Site:"+clicks);
                if(clicks) {
                    window.location.href="https://voiceofsk.blogspot.com/";
                }
            }
        });
}});


AFRAME.registerComponent('clickhandler', {

    init: function() {
        var lclicks = false;
        const animatedMarker1 = document.querySelector("#in-marker");
        const aEntity1 = document.querySelector("#LinkedInPress");
        document.querySelector("#in-marker").addEventListener('markerFound', (evt) => {
                lclicks = true
            })
        document.querySelector("#in-marker").addEventListener('markerLost', (evt) => {
                lclicks = false
            }) 
        
        animatedMarker1.addEventListener('click', function(ev, target){
            const intersectedElement1 = ev && ev.detail && ev.detail.intersectedEl;
            if (aEntity1 && intersectedElement1 === aEntity1) {
                console.log("Ln:"+lclicks);
                if(lclicks) {
                    window.location.href="https://www.linkedin.com/in/sarukrishna-a-119a5681/";
                }
            }
        });
}});


AFRAME.registerComponent('mailhandler', {

    init: function() {
        var mclicks = false;
        const animatedMarker2 = document.querySelector("#mail-marker");
        const aEntity2 = document.querySelector("#MailPress");
        document.querySelector("#mail-marker").addEventListener('markerFound', (evt) => {
                mclicks = true
            })
        document.querySelector("#mail-marker").addEventListener('markerLost', (evt) => {
                mclicks = false
            }) 
        
        animatedMarker2.addEventListener('click', function(ev, target){
            const intersectedElement2 = ev && ev.detail && ev.detail.intersectedEl;
            if (aEntity2 && intersectedElement2 === aEntity2) {
                console.log("Mail:"+mclicks);
                if(mclicks) {
                    window.location.href="mailto:a.sarukrishna@gmail.com";
                }
            }
        });
}});


AFRAME.registerComponent('phhandler', {

    init: function() {
        var tclicks = false;
        const animatedMarker3 = document.querySelector("#ph-marker");
        const aEntity3 = document.querySelector("#PhonePress");
        document.querySelector("#ph-marker").addEventListener('markerFound', (evt) => {
                tclicks = true
            })
        document.querySelector("#ph-marker").addEventListener('markerLost', (evt) => {
                tclicks = false
            }) 
        
        animatedMarker3.addEventListener('click', function(ev, target){
            const intersectedElement3 = ev && ev.detail && ev.detail.intersectedEl;
            if (aEntity3 && intersectedElement3 === aEntity3) {
                console.log("Tel:"+tclicks);
                if(tclicks) {
                    window.location.href="tel:8903587247";
                }
            }
        });
}});


AFRAME.registerComponent('pichandler', {

    init: function() {
        var pclicks = false;
        const animatedMarker4 = document.querySelector("#pic-marker");
        const aEntity4 = document.querySelector("#PhotoPress");
        document.querySelector("#pic-marker").addEventListener('markerFound', (evt) => {
                pclicks = true
            })
        document.querySelector("#pic-marker").addEventListener('markerLost', (evt) => {
                pclicks = false
            }) 
        
        animatedMarker4.addEventListener('click', function(ev, target){
            const intersectedElement4 = ev && ev.detail && ev.detail.intersectedEl;
            if (aEntity4 && intersectedElement4 === aEntity4) {
                console.log("Pic:"+pclicks);
                if(pclicks) {
                    window.location.href="https://drive.google.com/file/d/1I6JGCXRRGq6RlCwDjdNPDFHJIYOlK_L6/view?usp=sharing";
                }
            }
        });
}});