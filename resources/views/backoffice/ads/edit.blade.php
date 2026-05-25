<h1>Modifier la publicité</h1>
<form method="POST" action="/admin/ads/{{ $ad->id }}">
  @csrf
  <label>Emplacement :</label>
  <select name="location">
    <option value="header" {{ $ad->location == 'header' ? 'selected' : '' }}>Header</option>
    <option value="sidebar" {{ $ad->location == 'sidebar' ? 'selected' : '' }}>Sidebar</option>
    <option value="footer" {{ $ad->location == 'footer' ? 'selected' : '' }}>Footer</option>
  </select><br><br>

  <label>Contenu :</label>
  <textarea name="content">{{ $ad->content }}</textarea><br><br>

  <button type="submit">Mettre à jour</button>
</form>
