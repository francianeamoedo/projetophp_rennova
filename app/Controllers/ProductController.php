<?php
namespace App\Controllers;

use App\Core\BaseController;
use App\Models\Product;
use App\Models\Subcategory;

class ProductController extends BaseController
{
    private $subcategoryModel;
    private $productModel;

    public function __construct()
    {
        parent::__construct(); // inicia sessão

        $this->redirectIfNotAuthenticated(); // garante login

        $this->subcategoryModel = new Subcategory();
        $this->productModel     = new Product();
    }

    public function index()
    {
        $products = $this->productModel->all();
        require_once __DIR__ . '/../Views/admin/product/products.php';
    }

    public function create()
    {
        $subcategories = $this->subcategoryModel->all_actives();
        require_once __DIR__ . '/../Views/admin/product/form_product.php';
    }

    public function update($id)
    {
        $product = $this->productModel->find($id);
        if (! $product) {
            flash('message', 'Produto não encontrado.', 'warning');
            redirect('/products');
        }

        $subcategories = $this->subcategoryModel->all_actives();

        require_once __DIR__ . '/../Views/admin/product/form_product.php';
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        flash('message', 'Produto deletado com sucesso!', 'success');
        redirect('/products');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            redirect('/products');
        }

        $id            = $_POST['id'] ?? null;
        $name          = $_POST['name'] ?? '';
        $description   = $_POST['description'] ?? '';
        $price         = $_POST['price'] ?? 0;
        $priceOff      = $_POST['price_off'] ?? 0;
        $withPromo     = $_POST['with_promo'] ?? 0;
        $rating        = $_POST['rating'] ?? 0;
        $subcategoryId = isset($_POST['subcategory_id']) ? (int) $_POST['subcategory_id'] : 0;
        $active        = isset($_POST['active']) ? (int) $_POST['active'] : 0;

        $imagePath = null;

        $current_image = $_POST['current_image'] ?? null;

        // Processa upload de imagem
        if (! empty($_FILES['image']['name'])) {
            $image      = $_FILES['image'];
            $imageName  = time() . '_' . basename($image['name']);
            $uploadDir  = __DIR__ . '/../../assets/uploads/products/';
            $uploadPath = $uploadDir . $imageName;

            // Verifica se o diretório de upload existe, se não, cria
            if (! file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
                $imagePath = '/uploads/products/' . $imageName;

                // Se uma imagem atual já existe, remove-a
                if ($current_image) {
                    $currentImagePath = __DIR__ . '/../../assets' . $current_image;
                    if (file_exists($currentImagePath)) {
                        unlink($currentImagePath);
                    }
                }
            } else {
                flash('message', 'Erro ao salvar imagem.', 'danger');
                redirect('/products');
            }
        } else {
            // nenhuma nova imagem enviada, manter a atual
            $imagePath = $current_image;
        }

        $data = [
            'name'           => $name,
            'description'    => $description,
            'price'          => $price,
            'price_off'      => $priceOff,
            'with_promo'     => $withPromo,
            'image'          => $imagePath,
            'rating'         => $rating,
            'subcategory_id' => $subcategoryId,
            'active'         => $active,
        ];

        if ($id) {
            if (! $imagePath) {
                unset($data['image']);
            }

            $this->productModel->update($id, $data);
            flash('message', 'Produto atualizado com sucesso!', 'success');
        } else {
            $this->productModel->create($data);
            flash('message', 'Produto criado com sucesso!', 'success');
        }

        redirect('/products');
    }
}