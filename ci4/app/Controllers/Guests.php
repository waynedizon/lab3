<?php

namespace App\Controllers;

use App\Models\GuestsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guests extends BaseController
{
    public function index()
    {
        $model = model(GuestsModel::class);

        $data = [
            'guests'  => $model->getGuests(),
            'title' => 'Guest Logbook',
        ];

        return view('templates/header', $data)
            . view('guests/index')
            . view('templates/footer');
    }

    public function show($email = null)
    {
        $model = model(GuestsModel::class);

        $data['guests'] = $model->getGuests($email);

        if (empty($data['guests'])) {
            throw new PageNotFoundException('Cannot find the guest item: ' . $email);
        }

        $data['title'] = $data['guests']['name'];

        return view('templates/header', $data)
            . view('guests/view')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a guest item'])
            . view('guests/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'email', 'website', 'comment', 'gender']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'website' => 'required|max_length[255]|min_length[3]',
            'comment'  => 'required|max_length[5000]|min_length[10]',
            'gender' => 'required|max_length[255]|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(GuestsModel::class);

        $model->save([
            'name' => $post['name'],
            'email' => $post['email'],
            'website' => $post['website'],
            'comment' => $post['comment'],
            'gender' => $post['gender'],
        ]);

	header("refresh: 3");

        return view('templates/header', ['title' => 'Create a guest item'])
            . view('guests/success')
            . view('templates/footer');
    }
}