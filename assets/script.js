document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        document.querySelector('.loading').classList.add('loaded');
    }, 0);

    document.querySelector('.nav-button').addEventListener('click', (event) => {
        window.scroll({top: 0, behavior: 'smooth'});
        event.target.parentNode.classList.toggle('open')
        document.querySelector('nav ul').classList.toggle('open')
    })

    document.querySelector('.shuffle').addEventListener('click', () => {
        window.location.reload();
    })

    document.querySelector('.page-down').addEventListener('click', () => {
        window.scroll({top: document.body.getBoundingClientRect().bottom, behavior: 'smooth'});
    })

    document.querySelector('.show-more').addEventListener('click', () => {
        document.querySelector('.container-project .text').style.display = 'block';
        document.querySelector('.show-more').style.display = 'none';
    })

    if (typeof images != 'undefined') {
        let shuffled = images.map(value => ({value, sort: Math.random()})).sort((a, b) => a.sort - b.sort).map(({value}) => value)

            let column_index = -1,
                leftovers = shuffled.length % columns.length;

            while (shuffled.length) {
                if (shuffled.length <= leftovers) {
                    column_index = Math.floor(Math.random() * columns.length);
                } else {
                    column_index++;
                }

                let column = columns[column_index];

                if (column.querySelectorAll('img').length <= max_images) {
                    let image = document.createElement('img');
                    image.src = shuffled.pop();

                    column.appendChild(image);
                }

            }

            for (c in columns) {
                let column = columns[c],
                    images = column.querySelectorAll('img');
                if (images.length == 1) {
                    images[0].style.marginTop = Math.floor(Math.random() * 15) + 'rem';
                } else {
                    for (let i = 1; i < images.length; i++) {
                        images[i].style.marginTop = Math.floor(Math.random() * 15) + 1 + 'rem';
                    }
                }
            }
        }

    })
