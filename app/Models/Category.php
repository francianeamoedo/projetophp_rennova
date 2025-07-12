<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Category
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function all(): array
    {
        $sql  = "SELECT * FROM categories ORDER BY id DESC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function all_actives(): array
    {
        $sql  = "SELECT * FROM categories WHERE active = 1 ORDER BY name ASC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id): ?array
    {
        $sql  = "SELECT * FROM categories WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);

        $category = $stmt->fetch(PDO::FETCH_ASSOC);
        return $category ?: null;
    }

    public function create(array $data): bool
    {
        $sql  = "INSERT INTO categories (name, active) VALUES (:name, :active)";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name'   => $data['name'],
            ':active' => $data['active'],
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql  = "UPDATE categories SET name = :name, active = :active WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name'   => $data['name'],
            ':active' => $data['active'],
            ':id'     => $id,
        ]);
    }

    public function delete(int $id): bool
    {
        $sql  = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([':id' => $id]);
    }
}