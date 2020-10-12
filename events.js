var clicks = false;
function flag(){
    document.querySelector("#animated-marker").addEventListener('markerFound', (evt) => {
                clicks = true
            })
    document.querySelector("#animated-marker").addEventListener('markerLost', (evt) => {
                clicks = false
            }) 
};

AFRAME.registerComponent('markerhandler', {

    init: function() {
        const animatedMarker = document.querySelector("#animated-marker");
        const aEntity = document.querySelector("#WebPress");
        var fl=flag();
        // every click, we make our model grow in size :)
        animatedMarker.addEventListener('click', function(ev, target){
            const intersectedElement = ev && ev.detail && ev.detail.intersectedEl;
            if (aEntity && intersectedElement === aEntity) {
                if(fl)
                    window.open("https://voiceofsk.blogspot.com/");
            }
        });
}});
