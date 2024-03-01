<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'myguests';
	
	
	public function getGuest($email = false)
    {
        if ($email === false) {
            return $this->findAll();
        }

        return $this->where(['email' => $email])->first();
    }
}