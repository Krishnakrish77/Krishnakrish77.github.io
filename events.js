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
                console.log("Value:"+clicks);
                if(clicks) {
                    window.open("https://voiceofsk.blogspot.com/");
                }
            }
        });
}});
