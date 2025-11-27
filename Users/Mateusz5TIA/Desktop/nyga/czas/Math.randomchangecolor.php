<script>
function myFunction(){
    let akapit=document.getElementById("akapit")
    let kolor=Math.floor(Math.random()*255);
    akapit.style.color = `rgb(${kolor}, 0,0)`;
}
setInterval(myFunction,1000);
</script>
<p id="to jest kolorowy akapit"></p>