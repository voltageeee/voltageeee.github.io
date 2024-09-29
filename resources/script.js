document.addEventListener('DOMContentLoaded', function() {
    const buttons = [
        { button: document.getElementById('youtubeButton'), text: document.getElementById('youtubeText') },
        { button: document.getElementById('tgButton'), text: document.getElementById('tgText') },
        { button: document.getElementById('chessButton'), text: document.getElementById('chText') },
        { button: document.getElementById('gitButton'), text: document.getElementById('gitText') },
        { button: document.getElementById('dbButton'), text: document.getElementById('dbText') },
    ];

    function hideAllText() {
        buttons.forEach(item => {
            item.text.style.display = 'none';
        });
    }

    buttons.forEach(item => {
        item.button.addEventListener('mouseover', function() {
            item.text.style.display = 'block';
        });

        item.button.addEventListener('mouseout', hideAllText);
    });
});
