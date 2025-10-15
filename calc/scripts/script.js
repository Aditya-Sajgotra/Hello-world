let answer;

document.addEventListener("DOMContentLoaded", () => {

    let arr = document.getElementsByClassName("extend")
    // const equate = arr[0];
    arr = Array.from(document.getElementsByClassName("btns"))

    let arr1= document.getElementsByTagName("input");
    const input = arr1[0];
    // console.log(input)

    // equate.addEventListener('click', ()=>{
    //     if(input.value == ""){
            
    //     }
    //     else{
            
    //     }
    // })
    // console.log(arr)
    arr.forEach(e => {
        e.addEventListener('click',()=>{
            // console.log("clicked")
            if(e.textContent == "="){
                answer = eval(input.value);
            // console.log(answer)
            
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
            // console.log(answer)
            
            input.value = answer;
        }
    })

})