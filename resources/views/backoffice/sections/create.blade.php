<h1>Ajouter une section</h1>
<form method="POST" action="/admin/sections">
  @csrf
  <label>Titre :</label>
  <input type="text" name="title" required><br><br>

  <label>Contenu :</label>
  <textarea name="content"></textarea><br><br>

  <label>Slug (URL) :</label>
  <input type="text" name="slug"><br><br>

  <label>SEO Title :</label>
  <input type="text" name="seo_title"><br><br>

  <label>SEO Description :</label>
  <input type="text" name="seo_description"><br><br>

  <button type="submit">Créer</button>
</form>
