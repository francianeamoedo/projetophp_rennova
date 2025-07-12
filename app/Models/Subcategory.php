<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Subcategory
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function all(): array
    {
        $sql  = "SELECT subcategories.*, categories.name AS category_name FROM subcategories INNER JOIN categories ON subcategories.category_id = categories.id ORDER BY subcategories.id DESC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function all_actives(): array
    {
        $sql  = "SELECT * FROM subcategories WHERE active = 1 ORDER BY name ASC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id): ?array
    {
        $sql  = "SELECT * FROM subcategories WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);

        $subcategory = $stmt->fetch(PDO::FETCH_ASSOC);
        return $subcategory ?: null;
    }

    public function create(array $data): bool
    {
        $sql  = "INSERT INTO subcategories (name, active, category_id) VALUES (:name, :active, :category_id)";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name'        => $data['name'],
            ':active'      => $data['active'],
            ':category_id' => $data['category_id'],
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql  = "UPDATE subcategories SET name = :name, active = :active, category_id = :category_id WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name'        => $data['name'],
            ':active'      => $data['active'],
            ':category_id' => $data['category_id'],
            ':id'          => $id,
        ]);
    }

    public function delete(int $id): bool
    {
        $sql  = "DELETE FROM subcategories WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([':id' => $id]);
    }
}