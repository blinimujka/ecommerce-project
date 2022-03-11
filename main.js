        var i = 0;
        var images = [];
        var time = 4000;

        
        images[0] = "../img/slider1.jpg";
        images[1] = "../img/slider2.jpg"
        images[2] = "../img/slider3.png"
        images[3] = "../img/slider4.jpg"
        

        function changeImg(){

            document.slider.src = images[i];
            
            

            if(i<images.length-1){
                i++
            }else{
                i=0;
            }
            setTimeout("changeImg()",time);
        }
        window.onload = changeImg;
        //slider
      
        
            var products = document.querySelectorAll("#icon-cart");
            for(var prod of products){
                prod.addEventListener("click",function(){
            
                var count = document.querySelector(".cart-number").innerText;
                document.querySelector(".cart-number").innerHTML = Number(count)+1;
                
           
         })
        }//rrit numrin e produkteve ne shporte kur klikohen

        document.querySelector('.search-btn').addEventListener('click',function(){
            alert(document.querySelector('.search-txt').value);
            document.querySelector('.search-txt').value = null;
        }) // search function
        
        document.querySelector('#icon1').addEventListener('click',function(){
            var menu = document.querySelector('.menu-bar-categories');
            if(menu.style.display == "none"){
                    menu.style.display = 'flex';
                    
            }
                    else{
                        menu.style.display = 'none';
                    }
                })//hap ose mbyll dritaren e kategorive

    
    

    