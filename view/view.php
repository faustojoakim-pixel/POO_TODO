<?php
class viewtodos{
    private array $data;

    /**
     * Get the value of data
     *
     * @return array
     */
    public function getData(): array {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @param array $data
     *
     * @return self
     */
    public function setData(array $newData): self {
        $this->data = $newData;
        return $this;
        }
     public function display(){
       
    }
}








?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Page d'Accueil</h1>
        <section>
            <h2>Inscription</h2>
            <form action="" method="post">
                <label for="prenom">Prenom <input type="text" name="prenom" id="prenom"></label>
                <label for="nom">Nom <input type="text" name="nom" id="nom"></label>
                <label for="email">Email <input type="text" name="email" id="email"></label>
                <label for="password">Mot de Passe <input type="text" name="password" id="password"></label>
                <input type="submit" name="submit">
            </form>
            <p>
                <?php ?>
            </p>
        </section>
        <section>
            <h2>Listes des utilisateurs</h2>
            <ul>
                <?php $this->display(); ?>
            </ul>
        </section>
    </main>
</body>
</html>