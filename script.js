async function getQuote() {

    // using quotable API to get random quote https://api.quotable.io/random
    const response = await fetch('https://api.quotable.io/random')
    const quote = await response.json()
    
    // displaying the quote and author in html
    document.getElementById('quote').value = quote.content;
    document.getElementById('author').value = `- ${quote.author}`;
}

const button = document.getElementById('new');
button.addEventListener('click', getQuote);
