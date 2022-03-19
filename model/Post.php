<?php

namespace BlogPHP\Model;

/**
 * Class Post
 * @package BlogPHP\Model
 */
class Post {
	
	protected $db_connection;

    /**
     * Post constructor.
     */
    public function __construct() {
        $this->db_connection = new \BlogPHP\app\Database;
    }

    /**
     
     * @param int $startLimit
     * @param int $endLimit
     * @return array
     */
    public function get($startLimit, $endLimit) {
		
        $query = $this->db_connection->prepare('SELECT * FROM posts ORDER BY date DESC LIMIT :startLimitRange, :endLimitRange');
        $query->bindParam(':startLimitRange', $startLimit, \PDO::PARAM_INT);
        $query->bindParam(':endLimitRange', $endLimit, \PDO::PARAM_INT);
        $query->execute();

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * Get all posts
     * @return array
     */
    public function getAll() {
        $query = $this->db_connection->query('SELECT * FROM posts ORDER BY date DESC');
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * Get a post by it's ID
     * @param int $id
     * @return mixed
     */
    public function getById($id) {
		//Normally we wouldn't be using LIMIT here, as the ID is unique anyways. But it's better to have several check ups to have exactly what we need.
        $query = $this->db_connection->prepare('SELECT * FROM posts WHERE id = :postId LIMIT 1');
        $query->bindParam(':postId', $id, \PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(\PDO::FETCH_OBJ);
    }

    /**
     * Add a post
     * @param array $queryData
     * @return bool
     */
    public function add(array $queryData) {
        $query = $this->db_connection->prepare('INSERT INTO posts (title, small_desc, content, author) VALUES(:title, :small_desc, :content, :author)');
        $query->bindValue(':title', $queryData['title']);
        $query->bindValue(':small_desc', $queryData['small_desc']);
        $query->bindValue(':content', $queryData['content']);
        $query->bindValue(':author', $queryData['author']);
		return $query->execute($queryData);
    }

}