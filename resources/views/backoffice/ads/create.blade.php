<h1>Ajouter une publicité</h1>
<form method="POST" action="/admin/ads">
  @csrf
  <label>Emplacement :</label>
  <select name="location">
    <option value="header">Header</option>
    <option value="sidebar">Sidebar</option>
    <option value="footer">Footer</option>
  </select><br><br>

  <label>Contenu (HTML ou texte) :</label>
  <textarea name="content"></textarea><br><br>

  <button type="submit">Créer</button>
</form>
