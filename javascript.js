document.addEventListener('DOMContentLoaded', function() {
    var likeButton = document.querySelector('input[name="like"]');

    likeButton.addEventListener('click', function(e) {
        e.preventDefault();

        // Envoie une requête AJAX à l'article.php pour incrémenter le compteur de likes
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'article/index.template.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Mettre à jour le contenu de la page avec la réponse du serveur
                document.body.innerHTML = xhr.responseText;
            }
        };
        xhr.send('like=true');
    });
});