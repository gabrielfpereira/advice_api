window.addEventListener('load', ()=>{
    request('count')
    xhr.addEventListener('load', ()=>{
        //console.log(xhr.response)
        resp = xhr.response
        document.querySelector('#number').innerHTML = resp.count
    })

    xhr.send()
})

document.querySelector('#btnGenerationSlip').addEventListener("click", ()=>{
   request('random')
    //xhr.setRequestHeader("Authorization", "Bearer 1|ZDZyu53m8TIRAc8nJTYuP7u49rbkE0GrqLrWm9Ui")
    xhr.addEventListener('load', ()=>{
        //console.log(xhr.response)
        resp = xhr.response
        document.querySelector('.content-slip').innerHTML = resp.slip.content
    })

    xhr.send()
})

function request(endPoint){
    xhr = new XMLHttpRequest()
    xhr.open('GET', 'http://localhost:8000/api/'+endPoint)
    xhr.responseType = 'json'
    return this
}