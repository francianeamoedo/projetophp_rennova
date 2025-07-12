<?php
namespace App\Controllers;

use App\Core\BaseController;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategoryController extends BaseController
{
    private $subcategoryModel;
    private $categoryModel;

    public function __construct()
    {
        parent::__construct();

        $this->redirectIfNotAuthenticated();

        $this->subcategoryModel = new Subcategory();
        $this->categoryModel    = new Category();
    }

    public function index()
    {
        $subcategories = $this->subcategoryModel->all();
        require_once __DIR__ . '/../Views/admin/subcategory/subcategories.php';
    }

    public function create()
    {
        $categories = $this->categoryModel->all_actives();
        require_once __DIR__ . '/../Views/admin/subcategory/form_subcategory.php';
    }

    public function update($id)
    {
        $subcategory = $this->subcategoryModel->find($id);
        if (! $subcategory) {
            flash('message', 'Subcategoria não encontrada.', 'warning');
            redirect('/subcategories');
        }

        $categories = $this->categoryModel->all_actives();

        require_once __DIR__ . '/../Views/admin/subcategory/form_subcategory.php';
    }

    public function delete($id)
    {
        $this->subcategoryModel->delete($id);
        flash('message', 'Subcategoria deletada com sucesso!', 'success');
        redirect('/subcategories');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            redirect('/subcategories');
        }

        $id         = $_POST['id'] ?? null;
        $name       = $_POST['name'] ?? '';
        $categoryId = isset($_POST['category_id']) ? (int) $_POST['category_id'] : 0;
        $active     = isset($_POST['active']) ? (int) $_POST['active'] : 0;

        if ($id) {
            $this->subcategoryModel->update($id, [
                'name'        => $name,
                'category_id' => $categoryId,
                'active'      => $active,
            ]);
            flash('message', 'Subcategoria atualizada com sucesso!', 'success');
        } else {
            $this->subcategoryModel->create([
                'name'        => $name,
                'category_id' => $categoryId,
                'active'      => $active,
            ]);
            flash('message', 'Subcategoria criada com sucesso!', 'success');
        }

        redirect('/subcategories');
    }
}