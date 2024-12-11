

document.querySelectorAll('.up').forEach(button => {
    button.addEventListener('click', function() {
        const item = this.parentElement;
        const prevItem = item.previousElementSibling;
        if (prevItem) {
            item.parentElement.insertBefore(item, prevItem);
        }
    });
});

document.querySelectorAll('.down').forEach(button => {
    button.addEventListener('click', function() {
        const item = this.parentElement;
        const nextItem = item.nextElementSibling;
        if (nextItem) {
            item.parentElement.insertBefore(nextItem, item);
        }
    });
});

document.querySelectorAll('.save').forEach(button => {
    button.addEventListener('click', function() {
        const item = this.parentElement;
        const img = item.querySelector('img');
        const border = item.querySelector('.border-input').value;
        const width = item.querySelector('.width-input').value;
        img.style.border = `${border}px solid black`;
        img.style.width = `${width}px`;
    });
})
