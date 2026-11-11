<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>Users</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($users ?? []) as $user): ?>
                <tr>
                    <td><?= htmlspecialchars((string) $user->id, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars((string) $user->name, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars((string) $user->email, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars((string) $user->created_at, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars((string) $user->updated_at, ENT_QUOTES, 'UTF-8') ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="/admin/users/view?id=<?= urlencode((string) $user->id) ?>" class="btn btn-info">View</a>
                            <a href="/admin/users/edit?id=<?= urlencode((string) $user->id) ?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/users/delete?id=<?= urlencode((string) $user->id) ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
