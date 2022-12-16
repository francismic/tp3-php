{{ include('header.php', {title: 'Edit Carte', pageHeader:'Modifier'})}}
<main>
        <form action="{{ path }}carte/update" method="post">
            <input type="hidden" name="id" value="{{ carte.id }}">
            <label>Nom du Joueur 
                <input type="text" name="nomJoueur" value="{{ carte.nomJoueur}}">
            </label>
            <label>Equipe
                <input type="text" name="equipe" value="{{ carte.equipe}}">
            </label>
            <label>Quantite
            <select name="quantite">
                    <option>{{ carte.quantite}}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </label>
            <label>Prix
                <input type="text" name="prix" value="{{ carte.prix}}">
            </label>
            <label>Categorie
                <select name="categorie_id">
                    {% for categorie in categories %}
                    <option value="{{ categorie.id }}" {% if categorie.id == carte.categorie_id %} selected {% endif %}>{{ categorie.categorie }}</option>
                    {% endfor %}
                </select>
            </label>
            <label>Collection
                <select name="collection_id">
                    {% for collection in collections %}
                    <option value="{{ collection.id }}" {% if collection.id == carte.collection_id %} selected {% endif %}>{{ collection.collection }}</option>
                    {% endfor %}
                </select>
            </label>

            <input type="submit" value="Modifier">
        </form>
        <form action="{{ path }}carte/delete" method="post">
            <input type="hidden" name="id" value="{{ carte.id}}">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>