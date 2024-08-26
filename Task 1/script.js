// give span
let span = document.getElementById('span');

// check variable
let check = 0;

// first button function
const first = () => {
    if (check) {
        check = 0
    } else {
        check = 1
    }
}

// second button function
const second = () => {
    if (check) {
        span.classList.add('hidden');
    } else {
        span.classList.remove('hidden');
    }
}