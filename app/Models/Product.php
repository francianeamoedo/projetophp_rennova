<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function all(): array
    {
        $sql  = "SELECT * FROM products ORDER BY id DESC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function all_actives(): array
    {
        $sql  = "SELECT * FROM products WHERE active = 1 ORDER BY name ASC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function all_by_promotion(int $limit): array
    {
        $sql  = "SELECT * FROM products WHERE with_promo = 1 AND active = 1 ORDER BY id DESC LIMIT :limit";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function all_by_subcategory(int $subcategory_id): array
    {
        $sql  = "SELECT * FROM products WHERE subcategory_id = :subcategory_id AND active = 1 ORDER BY id DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':subcategory_id' => $subcategory_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id): ?array
    {
        $sql  = "SELECT p.*, s.name AS subcategory_name FROM products p LEFT JOIN subcategories s ON p.subcategory_id = s.id WHERE p.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);

        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product ?: null;
    }

    public function create(array $data): bool
    {
        $sql  = "INSERT INTO products (name, description, image, price, price_off, with_promo, rating, subcategory_id, active) VALUES (:name, :description, :image, :price, :price_off, :with_promo, :rating, :subcategory_id, :active)";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name'           => $data['name'],
            ':description'    => $data['description'] ?? '',
            ':image'          => $data['image'] ?? '',
            ':price'          => $data['price'],
            ':price_off'      => $data['price_off'] ?? null,
            ':with_promo'     => $data['with_promo'] ?? 0,
            ':rating'         => $data['rating'] ?? 0,
            ':active'         => $data['active'],
            ':subcategory_id' => $data['subcategory_id'] ?? null,
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql  = "UPDATE products SET name = :name, description = :description, image = :image, price = :price, price_off = :price_off, with_promo = :with_promo, rating = :rating, subcategory_id = :subcategory_id, active = :active WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name'           => $data['name'],
            ':image'          => $data['image'] ?? '',
            ':description'    => $data['description'] ?? '',
            ':price'          => $data['price'],
            ':price_off'      => $data['price_off'] ?? null,
            ':with_promo'     => $data['with_promo'] ?? 0,
            ':rating'         => $data['rating'] ?? 0,
            ':subcategory_id' => $data['subcategory_id'] ?? null,
            ':active'         => $data['active'],
            ':id'             => $id,
        ]);
    }

    public function delete(int $id): bool
    {
        $product = $this->find($id);

        if ($product && ! empty($product['image'])) {
            $imagePath = __DIR__ . '/../../assets' . $product['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $sql  = "DELETE FROM products WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([':id' => $id]);
    }
}
