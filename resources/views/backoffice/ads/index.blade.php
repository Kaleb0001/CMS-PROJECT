<h1>Gestion des publicités</h1>
<a href="/admin/ads/create">➕ Ajouter une publicité</a>

<table border="1" cellpadding="10">
  <tr>
    <th>Emplacement</th>
    <th>Contenu</th>
    <th>Statut</th>
    <th>Actions</th>
  </tr>
  @foreach($ads as $ad)
    <tr>
      <td>{{ $ad->location }}</td>
      <td>{{ $ad->content }}</td>
      <td>{{ $ad->is_active ? 'Active' : 'Inactive' }}</td>
      <td>
        <a href="/admin/ads/{{ $ad->id }}/edit">✏️ Modifier</a>
        <form method="POST" action="/admin/ads/{{ $ad->id }}/delete" style="display:inline;">
          @csrf
          <button type="submit">🗑️ Supprimer</button>
        </form>
        <button onclick="toggleAd({{ $ad->id }})">
          {{ $ad->is_active ? 'Désactiver' : 'Activer' }}
        </button>
      </td>
    </tr>
  @endforeach
</table>

<script>
function toggleAd(id) {
  fetch(`/admin/ads/${id}/toggle`, {
    method: 'POST',
    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
  }).then(() => location.reload());
}
</script>
