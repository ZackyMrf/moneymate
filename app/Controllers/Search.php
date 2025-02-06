<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\TransactionModel;
use App\Models\UserModel;

class Search extends BaseController
{
    public function index()
    {
        $query = $this->request->getGet('query');

        $categoryModel = new CategoryModel();
        $transactionModel = new TransactionModel();
        $userModel = new UserModel();

        $categories = $categoryModel->like('name', $query)->findAll();
        $transactions = $transactionModel->like('description', $query)->findAll();
        $users = $userModel->like('username', $query)->findAll();

        return view('search_results', [
            'categories' => $categories,
            'transactions' => $transactions,
            'users' => $users,
            'query' => $query
        ]);
    }
}