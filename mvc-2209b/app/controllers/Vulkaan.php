<?php

class Vulkaan extends BaseController
{
    private $vulkaanModel;

    public function __construct()
    {
        $this->vulkaanModel = $this->model('vulkaanModel');
    }

    public function index()
    {
        $vulkaan = $this->vulkaanModel->getCountries();

        $rows = '';
        foreach ($vulkaan as $result) {
            $rows .= "<tr>
                        <td>$result->Naam</td>
                        <td>$result->Hoogte</td>
                        <td>$result->Land</td>
                        <td>$result->JaarLaatsteUitbarsting</td>
                        <td>$result->AantalSlachtoffers</td>                  
                      </tr>";
        }

        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'records' => 'info uit de database',
            'rows'    => $rows
        ];

        $this->view('Vulkaan/index', $data);
    }
}