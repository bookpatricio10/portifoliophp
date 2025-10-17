<?php include 'includes/header.php'; ?>

<section class="content">
    <h2>Contato</h2>
    <form action="mailto:" method="post" enctype="text/plain"> <!--colocar o email depois-->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>