<?php

namespace App\Repositories;

use App\Pengalaman;

class PengalamanRepository
{
    protected $Pengalaman;

    public function __construct(Pengalaman $Pengalaman)
    {

        $this->Pengalaman = $Pengalaman;
    }


    public function find($id)
    {
        return $this->Pengalaman->find($id);
    }

    ////public function findBy($column, $data)
    //{
    //return $this->user->where($column, $data)->get();
    //}
}
