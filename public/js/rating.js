const inputRatings = document.querySelectorAll('.rating-input input')
inputRatings.forEach(input => {
    input.addEventListener('change', (e) => {
        ratingStar(e)
        const confirmRate = confirm('Apakah anda yakin ingin merating nya? Rating tidak dapat dirubah');

        if (confirmRate) {
            input.closest('form').submit()
        }
        else {
            location.reload()
        }
    })
})

function ratingStar(event){
    var checkValue = document.querySelectorAll(".rating-input input");
    var checkStar = document.querySelectorAll(".rating-input label");
    var checkSmiley = document.querySelectorAll(".rating-input i");
    var checkCount = 0;
    for(var i=0; i<checkValue.length; i++){
        if(checkValue[i]==event.target){
            checkCount = i+1;
        }
    }
    for(var j=0; j<checkCount; j++){
        checkValue[j].checked = true;
        checkStar[j].className = "rated";
        checkSmiley[j].style.display = "none";
    }
    
    for(var k=checkCount; k<checkValue.length; k++){
        checkValue[k].checked = false;
        checkStar[k].className = "check"
        checkSmiley[k].style.display = "none";	
    }

    checkSmiley[checkCount - 1].style.display = 'block';

}