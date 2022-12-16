{{ include('header.php', {title: 'Carte Achat'})}}
    <main>
        <p><strong>Nom du Joueur : </strong>{{carte.nomJoueur}}</p>
        <p><strong>Equipe : </strong>{{carte.equipe}}</p>
        <label for="quantite"><strong>Quantite de Carte : </strong>
        <select name="quantite">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </label>
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

        
    

        <p><a href="{{ path }}carte">Confirmer l'achat</a></p>
    </main>
</body>
</html>