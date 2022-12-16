{{ include('header.php', {title: 'New Carte'})}}

    <main>
        
        <h2>Saisir</h2>
        <span class="error">{{ errors|raw }}</span>
        
        <form action="{{ path }}carte/store" method="post">
            <label>Nom du Joueur
                <input type="text" name="nomJoueur" value="{{ data.nomJoueur }}">
            </label>
            <label>Equipe
                <input type="text" name="equipe" value="{{ data.equipe }}">
            </label>
            <label>Quantite
            <select name="quantite">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </label>
            <label>Prix
                <input type="text" name="prix" value="{{ data.prix }}">
            </label>
            <label>Categorie
                <select name="categorie_id">
                    <option value="1">Hockey</option>
                    <option value="2">Soccer</option>
                    <option value="3">Basketball</option>
                </select>
            </label>
            <label>Collection
                <select name="collection_id">
                    <option value="1">Upper Deck</option>
                    <option value="2">Topps</option>
                    <option value="3">Panini</option>
                </select>
            </label>

            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>