// Button on/off gender
const genderButtons = document.querySelectorAll('.gender-button');
const inputSelectedGender = document.getElementById('selectedGender');

genderButtons.forEach(button => {
    button.addEventListener('click', function () {
        genderButtons.forEach(btn => {
            btn.classList.remove('active');
            btn.classList.add('inactive');
        });

        this.classList.toggle('active');
        this.classList.remove('inactive');

        inputSelectedGender.value = this.getAttribute('data-gender');
    });
});


// Button on/off foot
const footButtons = document.querySelectorAll('.foot-button');
const inputFoot = document.getElementById('inputFoot');
footButtons.forEach(button => {
    button.addEventListener('click', function () {
        footButtons.forEach(btn => {
            btn.classList.remove('active');
            btn.classList.add('inactive');
        });

        this.classList.toggle('active');
        this.classList.remove('inactive');

        inputFoot.value = this.getAttribute('data-foot')
    });
});