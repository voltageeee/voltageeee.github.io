document.addEventListener('DOMContentLoaded', function() {
    const buttons = [
        { button: document.getElementById('youtubeButton'), text: document.getElementById('youtubeText') },
        { button: document.getElementById('tgButton'), text: document.getElementById('tgText') },
        { button: document.getElementById('discordButton'), text: document.getElementById('discordText') },
        { button: document.getElementById('gitButton'), text: document.getElementById('gitText') },
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
