let words =["The sky", "above", "the port","was", "the color of television", "tuned", "to", "a dead channel", ".", "All", "this happened", "more or less","." ,"I", "had", "the story", "bit by bit", "from various people", "and", "as generally", "happens", "in such cases", "each time", "it", "was", "a different story","." ,"It", "was", "a pleasure", "to", "burn"];
        
function get_text() {
    var text = [];
    var x = Math.ceil(Math.random() * 25) + 25;
    while(--x) text.push(words[Math.floor(Math.random() * words.length)]);
    document.write(text.join(" ")+'.')
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.nav-button').addEventListener('click', (event) => {
        event.target.parentNode.classList.toggle('open')
        document.querySelector('nav ul').classList.toggle('open')
    })

    let shuffled = images
        .map(value => ({ value, sort: Math.random() }))
        .sort((a, b) => a.sort - b.sort)
        .map(({ value }) => value)

    let column_index = -1,
        leftovers = shuffled.length % columns.length;

    while(shuffled.length) {
        if(shuffled.length <= leftovers) {
            column_index = Math.floor(Math.random() * columns.length);
        } else {
            column_index++;
        }

        let column = columns[column_index];

        if(column.querySelectorAll('img').length <= max_images){
            let image = document.createElement('img');
            image.src = shuffled.pop();

            column.appendChild(image);
        }

    }

    for(c in columns){
        let column = columns[c],
            images = column.querySelectorAll('img');
        if(images.length == 1){
            images[0].style.marginTop = Math.floor(Math.random() * 15) + 'rem';
        } else {
            for(let i = 1; i < images.length; i++){
                images[i].style.marginTop = Math.floor(Math.random() * 15) + 1 + 'rem';
            }
        }
    }
})