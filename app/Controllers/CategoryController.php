<?php
namespace App\Controllers;

use App\Core\BaseController;
use App\Models\Category;

class CategoryController extends BaseController
{
    private $categoryModel;

    public function __construct()
    {
        parent::__construct();

        $this->redirectIfNotAuthenticated();

        $this->categoryModel = new Category();
    }

    public function index()
    {
        $categories = $this->categoryModel->all();
        require_once __DIR__ . '/../Views/admin/category/categories.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../Views/admin/category/form_category.php';
    }

    public function update($id)
    {
        $category = $this->categoryModel->find($id);
        if (! $category) {
            flash('message', 'Categoria não encontrada.', 'warning');
            redirect('/categories');
        }

        require_once __DIR__ . '/../Views/admin/category/form_category.php';
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);
        flash('message', 'Categoria deletada com sucesso!', 'success');
        redirect('/categories');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            redirect('/categories');
        }

        $id     = $_POST['id'] ?? null;
        $name   = $_POST['name'] ?? '';
        $active = isset($_POST['active']) ? (int) $_POST['active'] : 0;

        if ($id) {
            $this->categoryModel->update($id, [
                'name'   => $name,
                'active' => $active,
            ]);
            flash('message', 'Categoria atualizada com sucesso!', 'success');
        } else {
            $this->categoryModel->create([
                'name'   => $name,
                'active' => $active,
            ]);
            flash('message', 'Categoria criada com sucesso!', 'success');
        }

        redirect('/categories');
    }
}