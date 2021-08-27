	// Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    function rating()
    {
    
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    
    const mouth = document.querySelector('.avatar_mouth');
    const avatar = document.querySelector('.avatar');
    const container1 = document.querySelector('.container1');
    const eyeL = document.querySelector(".avatar_pupil--left");
    const eyeR = document.querySelector(".avatar_pupil--right");
    document.querySelector('#review').addEventListener('input', (ev) =>{
        mouth.style.height = `${ev.target.value.length *2}px`;
    });
    document.querySelector('#name').addEventListener('input', (ev) =>{
        if(ev.target.value != '')
        {container1.classList.add('visible')}
        else 
        {
            container1.classList.remove('visible');
        }
    });
    
    document.querySelector('#female').addEventListener('change',(ev) => {
        avatar.classList.remove('male');
        avatar.classList.add('female');
    });
    
    document.querySelector('#male').addEventListener('change',(ev) => {
        avatar.classList.remove('female');
        avatar.classList.add('male');
    });
    
    
    document.querySelector('#address').addEventListener('input',(ev) => {
    
        if(ev.target.value !=''){ container1.classList.add('address')}
        else {container1.classList.remove('address');}
    });
    
    const handleEye = (eye, event) => {
        const b = eye.getBoundingClientRect();
        const x = (b.left) + (b.width / 2 );
        const y = (b.top) + (b.height/2);
        const rad = Math.atan2(event.pageX -x, event.pageY - y);
        const rot = (rad * (180 / Math.PI ) * -1) + 180;
        eye.style.transform = `rotate(${rot}deg)`;
    }
    
    document.addEventListener('mousemove', (ev) =>{
        handleEye(eyeL,ev);
        handleEye(eyeR, ev);
    });
    
