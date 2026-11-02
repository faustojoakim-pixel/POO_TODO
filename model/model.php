<?php
//Attributs
class Todo{
    private int $idTodo;
    private string $Todo;
    private string $description;
    private DateTime $dateCreation;
    private DateTime $dateLimit;
    private int $idUser;
    private pdo $pdo;

 //Constructeur
 public function __construct(int $newIdTodo, string $NewTodo, string $Newdescription, DateTime $NewdateCreation, DateTime $NewdateLimit, int $NewidUser, pdo $Newpdo){
    $this->idTodo = $newIdTodo;
    $this->Todo = $NewTodo;
    $this->description = $Newdescription;
    $this->dateCreation = $NewdateCreation;
    $this->dateLimit = $NewdateLimit;
    $this->idUser = $NewidUser;
    $this->pdo = $Newpdo;

    }

 //getters et setters







    /**
     * Get the value of idTodo
     *
     * @return int
     */
    public function getIdTodo(): int {
        return $this->idTodo;
    }

    /**
     * Set the value of idTodo
     *
     * @param int $idTodo
     *
     * @return self
     */
    public function setIdTodo(int $idTodo): self {
        $this->idTodo = $idTodo;
        return $this;
    }

    /**
     * Get the value of Todo
     *
     * @return string
     */
    public function getTodo(): string {
        return $this->Todo;
    }

    /**
     * Set the value of Todo
     *
     * @param string $Todo
     *
     * @return self
     */
    public function setTodo(string $Todo): self {
        $this->Todo = $Todo;
        return $this;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    /**
     * Get the value of dateCreation
     *
     * @return DateTime
     */
    public function getDateCreation(): DateTime {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @param DateTime $dateCreation
     *
     * @return self
     */
    public function setDateCreation(DateTime $dateCreation): self {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Get the value of dateLimit
     *
     * @return DateTime
     */
    public function getDateLimit(): DateTime {
        return $this->dateLimit;
    }

    /**
     * Set the value of dateLimit
     *
     * @param DateTime $dateLimit
     *
     * @return self
     */
    public function setDateLimit(DateTime $dateLimit): self {
        $this->dateLimit = $dateLimit;
        return $this;
    }

    /**
     * Get the value of idUser
     *
     * @return int
     */
    public function getIdUser(): int {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @param int $idUser
     *
     * @return self
     */
    public function setIdUser(int $idUser): self {
        $this->idUser = $idUser;
        return $this;
    }

    /**
     * Get the value of pdo
     *
     * @return pdo
     */
    public function getPdo(): pdo {
        return $this->pdo;
    }

    /**
     * Set the value of pdo
     *
     * @param pdo $pdo
     *
     * @return self
     */
    public function setPdo(pdo $pdo): self {
        $this->pdo = $pdo;
        return $this;
    }
    function getAllTodosByUserId(int $userId): array {
        $request = $this->pdo->prepare('SELECT id_todo FROM todos WHERE id_User = ?');
        $request->bindParam(1, $userId, PDO::PARAM_INT);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
}
