<div class="row mb footer">
             Đinh Thị Minh Nguyệt
        </div>
    </div>
</body>
</html>

<script>
var album=[];
for(var i=0;i<4;i++){
    album[i]=new Image();
    album[i].src="view/images/banner"+i+".jpg";
}
var interval=setInterval(slideshow,1000);
index=0;
function slideshow(){
    index++;
    if(index>3){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
    
}
function next(){
    index++;
    if(index>3){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
}
function pre(){
    index--;
    if(index<0){
        index=3;
    }
    document.getElementById("banner").src=album[index].src;
   
}
    
</script>