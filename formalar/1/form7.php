<form action = "#" method = "POST">
    <label for="phone">Bytes </label>
    <input type="number" name="by" id="by" >
    <label for="phone">Kilobytes </label>
    <input type="number" name="kl"  id="kb"> 
    <label for="phone">Megabybtes </label>
    <input type="number" name="me" id="mb" >
    <label for="phone">Gigaytes </label>
    <input type="number" name="gi" id="gb" >
    <label for="phone">Terabytes </label>
    <input type="number" name="te" id="tb" >
    
</form>


<script>

 var by = document.getElementById("by");
 var kb = document.getElementById("kb");
 var mb = document.getElementById("mb");
 var gb = document.getElementById("gb");
 var tb = document.getElementById("tb");
 by.onkeyup = function(){
    let value = this.value;
    kb.value = value*2;
    mb.value = value*3;
    gb.value = value*4;
    tb.value = value*5;
}
kb.onkeyup = function(){
    let value = this.value;
    kb.value = value*1;
    mb.value = value*3;
    gb.value = value*4;
    tb.value = value*5;
}
mb.onkeyup = function(){
    let value = this.value;
    console.log(this.value);
    kb.value = value*2;
    mb.value = value*1;
    gb.value = value*4;
    tb.value = value*5;
}
gb.onkeyup = function(){
    let value = this.value;
    console.log(this.value);
    kb.value = value*2;
    mb.value = value*3;
    gb.value = value*1;
    tb.value = value*5;
}
tb.onkeyup = function(){
    let value = this.value;
    console.log(this.value);
    kb.value = value*2;
    mb.value = value*3;
    gb.value = value*4;
    tb.value = value*1;
}
</script>