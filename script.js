const button = document.querySelector("button");
let affichage = document.querySelector('.affichage');
 let   form =document.querySelector("form");
    
    button.addEventListener("click",()=>{
          let xhr=new XMLHttpRequest();
       xhr.open("POST","input.php",true);
       xhr.onreadystatechange = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.responseText;
                affichage.innerText = data;
                if (data === "ok") {
                    location.href = 'index1.html';
                }
            }
        }
    }

    })