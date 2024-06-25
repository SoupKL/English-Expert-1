document.querySelectorAll('input[type="radio"][name="vbr2"]').forEach(radio => {
    radio.addEventListener('change', function() {
        document.querySelectorAll('.cards1, .cards2, .cards3, .cards4').forEach(cards => {
            cards.style.display = 'none';
        });
        if (this.value === 'novice') {
            document.querySelector('.cards1').style.display = 'flex';
        } else if (this.value === 'user') {
            document.querySelector('.cards2').style.display = 'flex';
        } else if (this.value === 'professional') {
            document.querySelector('.cards3').style.display = 'flex';
            document.querySelector('.cards4').style.display = 'flex';
        }  else if (this.value === 'default') {
            document.querySelector('.cards1').style.display = 'flex';
            document.querySelector('.cards2').style.display = 'flex';
            document.querySelector('.cards3').style.display = 'flex';
            document.querySelector('.cards4').style.display = 'flex';
        }
    });
});