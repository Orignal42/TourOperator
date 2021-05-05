let commentBtns = document.querySelectorAll('.btn-comment');
let commentMsg = document.querySelector('.modal-body');

commentBtns.forEach((btn)=>{
    btn.addEventListener('click', function (e) {
        console.log(e.target.getAttribute('data-idTour'))
        let idTO = e.target.getAttribute('data-idTour')

        let formData = new FormData()
        formData.append('idTO', idTO)
        fetch('getReview.php',{
            method:'post',
            body:formData
        }).then((response)=>{
            return response.text()
        }).then((data)=>{
            console.log(data)
        })
    })
})


function sendMessage(){

}