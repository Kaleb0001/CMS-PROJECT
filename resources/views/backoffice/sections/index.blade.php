<h1>Gestion des sections</h1>
<a href="/admin/sections/create">➕ Ajouter une section</a>

<table border="1">
  <tr>
    <th>Titre</th>
    <th>Visibilité</th>
    <th>Position</th>
    <th>Actions</th>
  </tr>
  @foreach($sections as $section)
    <tr>
      <td>{{ $section->title }}</td>
      <td>{{ $section->is_visible ? 'Visible' : 'Masquée' }}</td>
      <td>{{ $section->position }}</td>
      <td>
        <a href="/admin/sections/{{ $section->id }}/edit">✏️ Modifier</a>
        <form method="POST" action="/admin/sections/{{ $section->id }}/delete" style="display:inline;">
          @csrf
          <button type="submit">🗑️ Supprimer</button>
        </form>
        <button onclick="toggleSection({{ $section->id }})">
          {{ $section->is_visible ? 'Masquer' : 'Afficher' }}
        </button>
        <button onclick="moveSection({{ $section->id }}, 'up')">↑</button>
        <button onclick="moveSection({{ $section->id }}, 'down')">↓</button>
      </td>
    </tr>
  @endforeach
</table>

<script>
function toggleSection(id) {
  fetch(`/admin/sections/${id}/toggle`, {
    method: 'POST',
    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
  }).then(() => location.reload());
}

function moveSection(id, direction) {
  fetch(`/admin/sections/${id}/move`, {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': '{{ csrf_token() }}',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ direction: direction })
  }).then(() => location.reload());
}

</script>
