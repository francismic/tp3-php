{{ include('header.php', {title: 'Carte Details'})}}
    <main>
        <p><strong>Nom du Joueur : </strong>{{carte.nomJoueur}}</p>
        <p><strong>Equipe : </strong>{{carte.equipe}}</p>
        <p><strong>Quantite de carte :</strong>{{ carte.quantite }}</p>
        <p><strong>Prix de la carte : </strong>{{ carte.prix }}</p>

        {% for categorie in categories %}
            {% if categorie.id == carte.categorie_id %}
                <p><strong>Categorie de la carte : </strong>{{ categorie.categorie }}</p>
            {% endif %}
        {% endfor %}

        {% for collection in collections %}
            {% if collection.id == carte.collection_id %}
                <p><strong>Collection de la carte : </strong>{{ collection.collection }}</p>
            {% endif %}
        {% endfor %}

        
    

        <p><a href="{{ path }}carte/edit/{{carte.id}}">Modifier</a></p>
    </main>
</body>
</html>

