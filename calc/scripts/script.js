let answer;

document.addEventListener("DOMContentLoaded", () => {

    let arr = document.getElementsByClassName("extend")
    arr = Array.from(document.getElementsByClassName("btns"))

    let arr1= document.getElementsByTagName("input");
    const input = arr1[0];
    arr.forEach(e => {
        e.addEventListener('click',()=>{
            if(e.textContent == "="){
                answer = eval(input.value);
                input.value = answer;

            }
            else if(e.textContent == "C"){
                input.value = ""
            }
            else{
                input.value += e.textContent
            }
        })
    });
    document.addEventListener('keydown', (e)=>{
        if(e.key === "Enter"){
            answer = eval(input.value);
            input.value = answer;
        }
    })

})