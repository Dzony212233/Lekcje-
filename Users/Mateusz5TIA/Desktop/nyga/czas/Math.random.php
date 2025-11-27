<script>
    function losowa_li(){
        
        const liczba = Math.floor(Math.random() * 100);
        document.getElementById("losowa").textContent = liczba;
    }

    setInterval(time,1000);
    </script>
    <p id="liczby"></p>