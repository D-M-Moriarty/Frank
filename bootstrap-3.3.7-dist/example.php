<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
body { margin:0px; }
div#grid_container {
  width:100%;
  height:1200px;
}
div#grid_container > div {
  position: absolute;
  width: 25%;
  min-width:250px;
}
div#grid_container > div > div {
  margin:5px;
  border: #960 1px solid;
  font-size: 50px;
  background:#FFDC64;
}
</style>
<script>
function renderGrid() {
    var blocks = document.getElementById("grid_container").children;
  var cols = 4, newleft, newtop;
    for(var i = 1; i < blocks.length; i++){
    if (i % cols == 0) {
      newtop = (blocks[i-cols].offsetTop + blocks[i-cols].offsetHeight);
        blocks[i].style.top = newtop+"px";
    } else {
      if(blocks[i-cols]){
        newleft = (blocks[i-cols].offsetTop + blocks[i-cols].offsetHeight);
        blocks[i].style.top = newleft+"px";
      }
      newleft = (blocks[i-1].offsetLeft + blocks[i-1].offsetWidth);
      blocks[i].style.left = newleft+"px";  
    }
    }
}
window.addEventListener("load", renderGrid, false);
window.addEventListener("resize", renderGrid, false);
</script>
</head> 
<body>
<h1 style="text-align:center;">Core JavaScript Multi-Column Full Screen Grids Tutorial</h1>
<div id="grid_container">
    <div><div style="height:350px;"></div></div>
    <div><div style="height:200px;"></div></div>
    <div><div style="height:300px;"></div></div>
    <div><div style="height:180px;"></div></div>
    <div><div style="height:150px;"></div></div>
    <div><div style="height:240px;"></div></div>
    <div><div style="height:180px;"></div></div>
    <div><div style="height:170px;"></div></div>
    <div><div style="height:160px;"></div></div>
    <div><div style="height:180px;"></div></div>
    <div><div style="height:150px;"></div></div>
    <div><div style="height:160px;"></div></div>
    <div><div style="height:180px;"></div></div>
    <div><div style="height:150px;"></div></div>
    <div><div style="height:240px;"></div></div>
    <div><div style="height:350px;"></div></div>
</div>
</body> 
</html>