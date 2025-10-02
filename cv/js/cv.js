document.addEventListener("DOMContentLoaded", ()=> {
    const manual = document.getElementById("manual");
    // console.log(manual.textContent)
    const writings = ["2nd year student at GCET Jammu", "Doing BTech. in CSE Engineering"];
    let i = 0;
    let j = 0;
    let typeInterval, eraseInterval;
    // console.log(writings.length)
    const type = ()=>{
        if(j < writings[i].length){
            manual.textContent += writings[i][j];
            j++;
        }
        else{

                j = 0;
                clearInterval(typeInterval);
                eraseInterval = setInterval(erase, 100);
                if(i == writings.length - 1){
                    i = 0;
                }
                else{
                    i++;
                }
            
            
        }
    }

    const erase = () => {
        manual.textContent = manual.textContent.slice(0,-1);
        if(manual.textContent == ""){
            clearInterval(eraseInterval);
            typeInterval = setInterval(type, 100);
        }
    }
    typeInterval = setInterval(type, 100);

})