<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>User details</h1>
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?= htmlspecialchars((string) $user->id, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?= htmlspecialchars((string) $user->name, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars((string) $user->email, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
            <tr>
                <th>Password hash</th>
                <td><?= htmlspecialchars((string) $user->password, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
            <tr>
                <th>Created</th>
                <td><?= htmlspecialchars((string) $user->created_at, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
            <tr>
                <th>Updated</th>
                <td><?= htmlspecialchars((string) $user->updated_at, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
        </tbody>
    </table>
    <a href="/admin/users" class="btn btn-secondary">Back to users</a>
    <a href="/admin/users/edit?id=<?= urlencode((string) $user->id) ?>" class="btn btn-warning">Edit</a>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
