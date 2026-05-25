<h1>Modifier la section</h1>
<form method="POST" action="/admin/sections/{{ $section->id }}">
  @csrf
  <label>Titre :</label>
  <input type="text" name="title" value="{{ $section->title }}" required><br><br>

  <label>Contenu :</label>
  <textarea name="content">{{ $section->content }}</textarea><br><br>

  <label>Slug (URL) :</label>
  <input type="text" name="slug" value="{{ $section->slug }}"><br><br>

  <label>SEO Title :</label>
  <input type="text" name="seo_title" value="{{ $section->seo_title }}"><br><br>

  <label>SEO Description :</label>
  <input type="text" name="seo_description" value="{{ $section->seo_description }}"><br><br>

  <button type="submit">Mettre à jour</button>
</form>
