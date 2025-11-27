<script>
    Function time(){
        let now=new Date();
        let hours=new.getHours().toString();
        let minutes=now.getMinutes().toString();
        let seconds=now.getSeconds().toString();
        let currentTime=hours+":"+minutes+":"+seconds;
        let place=document.querySelector("#time");
        place.innerHTML=currentTime;
    }

    setIntreval( time, 1000);
    </script>
    <p id="time"></p>