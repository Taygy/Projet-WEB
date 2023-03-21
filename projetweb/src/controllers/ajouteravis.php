<?php

require_once('src/modele/model.php');

function addComment(string $post, array $input)
{
    $author = null;
    $comment = null;
    if (!empty($input['author']) && !empty($input['comment'])) {
        $author = $input['author'];
        $comment = $input['comment'];
    } else {
        throw new Exception('Les données du formulaire sont invalides.');
    }

    $commentRepository = new CommentRepository();
    $commentRepository->connection = new DatabaseConnection();
    $success = $commentRepository->createComment($post, $author, $comment);
    if (!$success) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $post);
    }
}
function createComment(string $post, string $author, string $comment): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())'
        );
        $affectedLines = $statement->execute([$post, $author, $comment]);

        return ($affectedLines > 0);
    }